<?php
/**
 * The compatibility module services.
 *
 * @package WooCommerce\PayPalCommerce\Compat
 */

declare(strict_types=1);

namespace WooCommerce\PayPalCommerce\Compat;

use WooCommerce\PayPalCommerce\Vendor\Psr\Container\ContainerInterface;
use WooCommerce\PayPalCommerce\Compat\Assets\CompatAssets;

return array(

	'compat.ppec.mock-gateway'                       => static function( $container ) {
		$settings = $container->get( 'wcgateway.settings' );
		$title    = $settings->has( 'title' ) ? $settings->get( 'title' ) : __( 'PayPal', 'woocommerce-paypal-payments' );
		$title    = sprintf(
			/* Translators: placeholder is the gateway name. */
			__( '%s (Legacy)', 'woocommerce-paypal-payments' ),
			$title
		);

		return new PPEC\MockGateway( $title );
	},

	'compat.ppec.subscriptions-handler'              => static function ( ContainerInterface $container ) {
		$ppcp_renewal_handler = $container->get( 'wc-subscriptions.renewal-handler' );
		$gateway              = $container->get( 'compat.ppec.mock-gateway' );

		return new PPEC\SubscriptionsHandler( $ppcp_renewal_handler, $gateway );
	},

	'compat.ppec.settings_importer'                  => static function( ContainerInterface $container ) : PPEC\SettingsImporter {
		$settings = $container->get( 'wcgateway.settings' );

		return new PPEC\SettingsImporter( $settings );
	},

	'compat.plugin-script-names'                     => static function( ContainerInterface $container ) : array {
		return array(
			'ppcp-smart-button',
			'ppcp-oxxo',
			'ppcp-pay-upon-invoice',
			'ppcp-vaulting-myaccount-payments',
			'ppcp-gateway-settings',
			'ppcp-webhooks-status-page',
			'ppcp-tracking',
			'ppcp-fraudnet',
			'ppcp-tracking-compat',
			'ppcp-clear-db',
		);
	},

	'compat.plugin-script-file-names'                => static function( ContainerInterface $container ) : array {
		return array(
			'button.js',
			'gateway-settings.js',
			'status-page.js',
			'order-edit-page.js',
			'fraudnet.js',
			'tracking-compat.js',
			'ppcp-clear-db.js',
		);
	},

	'compat.gzd.is_supported_plugin_version_active'  => function (): bool {
		return function_exists( 'wc_gzd_get_shipments_by_order' ); // 3.0+
	},

	'compat.wc_shipment_tracking.is_supported_plugin_version_active' => function (): bool {
		return class_exists( 'WC_Shipment_Tracking' );
	},

	'compat.ywot.is_supported_plugin_version_active' => function (): bool {
		return function_exists( 'yith_ywot_init' );
	},
	'compat.dhl.is_supported_plugin_version_active'  => function (): bool {
		return function_exists( 'PR_DHL' );
	},
	'compat.shipstation.is_supported_plugin_version_active' => function (): bool {
		return function_exists( 'woocommerce_shipstation_init' );
	},
	'compat.wc_shipping_tax.is_supported_plugin_version_active' => function (): bool {
		return class_exists( 'WC_Connect_Loader' );
	},
	'compat.nyp.is_supported_plugin_version_active'  => function (): bool {
		return function_exists( 'wc_nyp_init' );
	},
	'compat.wc_bookings.is_supported_plugin_version_active' => function (): bool {
		return class_exists( 'WC_Bookings' );
	},

	'compat.module.url'                              => static function ( ContainerInterface $container ): string {
		/**
		 * The path cannot be false.
		 *
		 * @psalm-suppress PossiblyFalseArgument
		 */
		return plugins_url(
			'/modules/ppcp-compat/',
			dirname( realpath( __FILE__ ), 3 ) . '/woocommerce-paypal-payments.php'
		);
	},

	'compat.assets'                                  => function( ContainerInterface $container ) : CompatAssets {
		return new CompatAssets(
			$container->get( 'compat.module.url' ),
			$container->get( 'ppcp.asset-version' ),
			$container->get( 'compat.gzd.is_supported_plugin_version_active' ),
			$container->get( 'compat.wc_shipment_tracking.is_supported_plugin_version_active' ),
			$container->get( 'compat.wc_shipping_tax.is_supported_plugin_version_active' ),
			$container->get( 'api.bearer' )
		);
	},

	/**
	 * Configuration for the new/old settings map.
	 *
	 * @returns SettingsMap[]
	 */
	'compat.setting.new-to-old-map'                  => function( ContainerInterface $container ) : array {
		$are_new_settings_enabled = $container->get( 'wcgateway.settings.admin-settings-enabled' );
		if ( ! $are_new_settings_enabled ) {
			return array();
		}

		return array(
			new SettingsMap(
				$container->get( 'settings.data.common' ),
				array(
					'client_id'     => 'client_id',
					'client_secret' => 'client_secret',
				)
			),
			new SettingsMap(
				$container->get( 'settings.data.general' ),
				array(
					'is_sandbox'             => 'sandbox_on',
					'live_client_id'         => 'client_id_production',
					'live_client_secret'     => 'client_secret_production',
					'live_merchant_id'       => 'merchant_id_production',
					'live_merchant_email'    => 'merchant_email_production',
					'sandbox_client_id'      => 'client_id_sandbox',
					'sandbox_client_secret'  => 'client_secret_sandbox',
					'sandbox_merchant_id'    => 'merchant_id_sandbox',
					'sandbox_merchant_email' => 'merchant_email_sandbox',
				)
			),
		);
	},
	'compat.settings.settings_map_helper'            => static function( ContainerInterface $container ) : SettingsMapHelper {
		return new SettingsMapHelper( $container->get( 'compat.setting.new-to-old-map' ) );
	},
);
