<?php
/**
 * Handles connection-requests, that connect the current site to a PayPal
 * merchant account.
 *
 * @package WooCommerce\PayPalCommerce\Settings\Handler
 */

declare( strict_types = 1 );

namespace WooCommerce\PayPalCommerce\Settings\Handler;

use WooCommerce\PayPalCommerce\Settings\Data\CommonSettings;
use WooCommerce\PayPalCommerce\Settings\Service\OnboardingUrlManager;
use WooCommerce\WooCommerce\Logging\Logger\NullLogger;
use Psr\Log\LoggerInterface;

/**
 * Provides a listener that handles merchant-connection requests.
 *
 * Those connection requests are made after the merchant logs into their PayPal
 * account (inside the login popup). At the last step, they see a "Return to
 * Store" button.
 * Clicking that button triggers the merchant-connection request.
 */
class ConnectionListener {
	/**
	 * ID of the current settings page; empty if not on a PayPal settings page.
	 *
	 * @var string
	 */
	private string $settings_page_id;

	/**
	 * Access to connection settings.
	 *
	 * @var CommonSettings
	 */
	private CommonSettings $settings;

	/**
	 * Access to the onboarding URL manager.
	 *
	 * @var OnboardingUrlManager
	 */
	private OnboardingUrlManager $url_manager;

	/**
	 * Logger instance, mainly used for debugging purposes.
	 *
	 * @var LoggerInterface
	 */
	private LoggerInterface $logger;

	/**
	 * ID of the current user, set by the process() method.
	 *
	 * @var int
	 */
	private int $user_id;

	/**
	 * Prepare the instance.
	 *
	 * @param string               $settings_page_id Current plugin settings page ID.
	 * @param CommonSettings       $settings         Access to saved connection details.
	 * @param OnboardingUrlManager $url_manager      Get OnboardingURL instances.
	 * @param ?LoggerInterface     $logger           The logger, for debugging purposes.
	 */
	public function __construct( string $settings_page_id, CommonSettings $settings, OnboardingUrlManager $url_manager, LoggerInterface $logger = null ) {
		$this->settings_page_id = $settings_page_id;
		$this->settings         = $settings;
		$this->url_manager      = $url_manager;
		$this->logger           = $logger ?: new NullLogger();

		// Initialize as "guest", the real ID is provided via process().
		$this->user_id = 0;
	}

	/**
	 * Process the request data, and extract connection details, if present.
	 *
	 * @param int   $user_id The current user ID.
	 * @param array $request Request details to process.
	 */
	public function process( int $user_id, array $request ) : void {
		$this->user_id = $user_id;

		if ( ! $this->is_valid_request( $request ) ) {
			return;
		}

		$token = $this->get_token_from_request( $request );
		if ( ! $this->url_manager->validate_token_and_delete( $token, $this->user_id ) ) {
			return;
		}

		$data = $this->extract_data( $request );
		if ( ! $data ) {
			return;
		}

		$this->logger->info( 'Found merchant data in request', $data );

		$this->store_data(
			$data['is_sandbox'],
			$data['merchant_id'],
			$data['merchant_email']
		);
	}

	/**
	 * Determine, if the request details contain connection data that should be
	 * extracted and stored.
	 *
	 * @param array $request Request details to verify.
	 *
	 * @return bool True, if the request contains valid connection details.
	 */
	protected function is_valid_request( array $request ) : bool {
		if ( $this->user_id < 1 || ! $this->settings_page_id ) {
			return false;
		}

		if ( ! user_can( $this->user_id, 'manage_woocommerce' ) ) {
			return false;
		}

		$required_params = array(
			'merchantIdInPayPal',
			'merchantId',
			'ppcpToken',
		);

		foreach ( $required_params as $param ) {
			if ( empty( $request[ $param ] ) ) {
				return false;
			}
		}

		return true;
	}

	/**
	 * Extract the merchant details (ID & email) from the request details.
	 *
	 * @param array $request The full request details.
	 *
	 * @return array Structured array with 'is_sandbox', 'merchant_id', and 'merchant_email' keys,
	 *               or an empty array on failure.
	 */
	protected function extract_data( array $request ) : array {
		$this->logger->info( 'Extracting connection data from request...' );

		$merchant_id    = $this->get_merchant_id_from_request( $request );
		$merchant_email = $this->get_merchant_email_from_request( $request );

		if ( ! $merchant_id || ! $merchant_email ) {
			return array();
		}

		return array(
			'is_sandbox'     => $this->settings->get_sandbox(),
			'merchant_id'    => $merchant_id,
			'merchant_email' => $merchant_email,
		);
	}

	/**
	 * Persist the merchant details to the database.
	 *
	 * @param bool   $is_sandbox     Whether the details are for a sandbox account.
	 * @param string $merchant_id    The anonymized merchant ID.
	 * @param string $merchant_email The merchant's email.
	 */
	protected function store_data( bool $is_sandbox, string $merchant_id, string $merchant_email ) : void {
		$this->logger->info( "Save merchant details to the DB: $merchant_email ($merchant_id)" );

		$this->settings->set_merchant_data( $is_sandbox, $merchant_id, $merchant_email );
		$this->settings->save();
	}

	/**
	 * Returns the sanitized connection token from the incoming request.
	 *
	 * @param array $request Full request details.
	 *
	 * @return string The sanitized token, or an empty string.
	 */
	protected function get_token_from_request( array $request ) : string {
		return $this->sanitize_string( $request['ppcpToken'] ?? '' );
	}

	/**
	 * Returns the sanitized merchant ID from the incoming request.
	 *
	 * @param array $request Full request details.
	 *
	 * @return string The sanitized merchant ID, or an empty string.
	 */
	protected function get_merchant_id_from_request( array $request ) : string {
		return $this->sanitize_string( $request['merchantIdInPayPal'] ?? '' );
	}

	/**
	 * Returns the sanitized merchant email from the incoming request.
	 *
	 * Note that the email is provided via the argument "merchantId", which
	 * looks incorrect at first, but PayPal uses the email address as merchant
	 * IDm and offers a more anonymous ID via the "merchantIdInPayPal" argument.
	 *
	 * @param array $request Full request details.
	 *
	 * @return string The sanitized merchant email, or an empty string.
	 */
	protected function get_merchant_email_from_request( array $request ) : string {
		return $this->sanitize_merchant_email( $request['merchantId'] ?? '' );
	}

	/**
	 * Sanitizes a request-argument for processing.
	 *
	 * @param string $value Value from the request argument.
	 *
	 * @return string Sanitized value.
	 */
	protected function sanitize_string( string $value ) : string {
		return trim( sanitize_text_field( wp_unslash( $value ) ) );
	}

	/**
	 * Sanitizes the merchant's email address for processing.
	 *
	 * @param string $email The plain email.
	 *
	 * @return string Sanitized email address.
	 */
	protected function sanitize_merchant_email( string $email ) : string {
		return sanitize_text_field( str_replace( ' ', '+', $email ) );
	}
}
