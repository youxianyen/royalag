<?php
/**
 * Class use to define the constants used by the WAF
 *
 * @package automattic/jetpack-waf
 */

namespace Automattic\Jetpack\Waf;

use Automattic\Jetpack\Status\Host;

/**
 * Defines our constants.
 */
class Waf_Constants {
	/**
	 * Initializes the constants required for generating the bootstrap, if they have not been initialized yet.
	 *
	 * @return void
	 */
	public static function initialize_bootstrap_constants() {
		self::define_waf_directory();
		self::define_wpconfig_path();
		self::define_killswitch();
		self::define_entrypoint();
	}

	/**
	 * Compatiblity patch for cases where an outdated Waf_Constants class has been autoloaded by
	 * the standalone bootstrap execution at the beginning of the current request.
	 */
	public static function initialize_constants() {
		self::initialize_bootstrap_constants();
	}

	/**
	 * Set the path to the WAF directory if it has not been set.
	 *
	 * @return void
	 */
	public static function define_waf_directory() {
		if ( ! defined( 'JETPACK_WAF_DIR' ) ) {
			define( 'JETPACK_WAF_DIR', trailingslashit( WP_CONTENT_DIR ) . 'jetpack-waf' );
		}
	}

	/**
	 * Set the path to the wp-config.php file if it has not been set.
	 *
	 * @return void
	 */
	public static function define_wpconfig_path() {
		if ( ! defined( 'JETPACK_WAF_WPCONFIG' ) ) {
			define( 'JETPACK_WAF_WPCONFIG', trailingslashit( WP_CONTENT_DIR ) . '../wp-config.php' );
		}
	}

	/**
	 * Set the killswitch definition if it has not been set.
	 *
	 * @return void
	 */
	public static function define_killswitch() {
		if ( ! defined( 'DISABLE_JETPACK_WAF' ) ) {
			$is_wpcom        = defined( 'IS_WPCOM' ) && IS_WPCOM;
			$is_atomic       = ( new Host() )->is_atomic_platform();
			$is_atomic_on_jn = defined( 'IS_ATOMIC_JN' ) ?? IS_ATOMIC_JN;
			define( 'DISABLE_JETPACK_WAF', $is_wpcom || ( $is_atomic && ! $is_atomic_on_jn ) );
		}
	}

	/**
	 * Set the mode definition if it has not been set.
	 *
	 * @return void
	 */
	public static function define_mode() {
		if ( ! defined( 'JETPACK_WAF_MODE' ) ) {
			$mode_option = get_option( Waf_Runner::MODE_OPTION_NAME );
			define( 'JETPACK_WAF_MODE', $mode_option );
		}
	}

	/**
	 * Set the entrypoint definition if it has not been set.
	 */
	public static function define_entrypoint() {
		if ( ! defined( 'JETPACK_WAF_ENTRYPOINT' ) ) {
			define( 'JETPACK_WAF_ENTRYPOINT', 'rules/rules.php' );
		}
	}

	/**
	 * Set the share data definition if it has not been set.
	 *
	 * @return void
	 */
	public static function define_share_data() {
		if ( ! defined( 'JETPACK_WAF_SHARE_DATA' ) ) {
			$share_data_option = false;
			if ( function_exists( 'get_option' ) ) {
				$share_data_option = get_option( Waf_Runner::SHARE_DATA_OPTION_NAME, false );
			}

			define( 'JETPACK_WAF_SHARE_DATA', $share_data_option );
		}
		if ( ! defined( 'JETPACK_WAF_SHARE_DEBUG_DATA' ) ) {
			$share_debug_data_option = false;
			if ( function_exists( 'get_option' ) ) {
				$share_debug_data_option = get_option( Waf_Runner::SHARE_DEBUG_DATA_OPTION_NAME, false );
			}

			define( 'JETPACK_WAF_SHARE_DEBUG_DATA', $share_debug_data_option );
		}
	}

	/**
	 * Set the brute force protection's API host definition if it has not been set.
	 *
	 * @return void
	 */
	public static function define_brute_force_api_host() {
		if ( ! defined( 'JETPACK_PROTECT__API_HOST' ) ) {
			define( 'JETPACK_PROTECT__API_HOST', 'https://api.bruteprotect.com/' );
		}
	}
}
