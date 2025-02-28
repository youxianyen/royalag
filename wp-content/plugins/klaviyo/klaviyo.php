<?php
/**
 * Plugin Name: Klaviyo
 * Plugin URI: https://wordpress.org/plugins/klaviyo/
 * Description: A plugin to automatically sync your WooCommerce sales, products and customers with Klaviyo. With Klaviyo you can set up abandoned cart emails, collect emails for your newsletter to grow your business.
 * Version: 3.4.3
 * Author: Klaviyo, Inc.
 * Author URI: https://www.klaviyo.com
 * Requires at least: 4.4
 * Requires PHP: 7.0
 * WC requires at least: 2.0
 * WC tested up to: 5.5.2
 * Text Domain: woocommerce-klaviyo
 * Domain Path: /i18n/languages/
 *
 * @package WooCommerceKlaviyo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'is_plugin_inactive' ) ) {
	require_once ABSPATH . '/wp-admin/includes/plugin.php';
}

// Deactivate all old Klaviyo plugins.
const OLD_KLAVIYO_PLUGINS = array(
	'woocommerce-klaviyo/woocommerce-klaviyo.php',
	'klaviyo-for-woocommerce/woocommerce-klaviyo.php',
	'woocommerce-klaviyo-master/woocommerce-klaviyo.php',
);
deactivate_plugins( OLD_KLAVIYO_PLUGINS );

add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	}
);

if ( ! class_exists( 'WooCommerceKlaviyo' ) ) :

	/**
	 * Main WooCommerceKlaviyo Class
	 *
	 * @class WooCommerceKlaviyo
	 * @version 2.0.1
	 */
	final class WooCommerceKlaviyo {

		/**
		 * Plugin version.
		 *
		 * @var string
		 */
		public static $version = '3.4.3';

		/**
		 * Instance of the class.
		 *
		 * @var WooCommerceKlaviyo The single instance of the class
		 * @since 2.0.0
		 */
		protected static $instance = null;

		/**
		 * Installer responsible for install/uninstall logic.
		 *
		 * @var WCK_Install $installer Responsible for install/uninstall logic.
		 */
		public $installer;

		/**
		 * Handles plugin's admin page content and functionality.
		 *
		 * @var WPKlaviyoAdmin $admin Handles plugin's admin page content and functionality.
		 */
		public $admin;

		/**
		 * WCK_API class.
		 *
		 * @var WCK_API $api Handles plugin's custom api routes.
		 */
		public $api;

		/**
		 * Service class for sending data back to Klaviyo.
		 *
		 * @var WCK_Webhook_Service $webhook_service Service class for sending data back to Klaviyo.
		 */
		public $webhook_service;


		/**
		 * Class for fetching options and handling options backwards compatibility.
		 *
		 * @var WCK_Options
		 */
		public $options;

		/**
		 * [DEPRECATED] Get plugin version number.
		 *
		 * @deprecated 3.2.2 Use get_version() instead.
		 * @since 2.0.0
		 * @static
		 * @return int
		 */
		public static function getVersion() {
			return self::get_version();
		}

		/**
		 * Get plugin version number.
		 *
		 * @since 2.0.0
		 * @static
		 * @return int
		 */
		public static function get_version() {
			return self::$version;
		}

		/**
		 * Main WooCommerceKlaviyo Instance
		 *
		 * Ensures only one instance of WooCommerceKlaviyo is loaded or can be loaded.
		 *
		 * @since 2.0.0
		 * @static
		 * @see WCK()
		 * @return WooCommerceKlaviyo - Main instance
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Cloning is forbidden.
		 *
		 * @since 2.1
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, esc_html_e( 'Cheatin&#8217; huh?', 'woocommerce-klaviyo' ), '0.9' );
		}

		/**
		 * Unserializing instances of this class is forbidden.
		 *
		 * @since 2.1
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, esc_html_e( 'Cheatin&#8217; huh?', 'woocommerce-klaviyo' ), '0.9' );
		}

		/**
		 * WooCommerceKlaviyo Constructor.
		 */
		public function __construct() {
			// Auto-load classes on demand.
			if ( function_exists( '__autoload' ) ) {
				spl_autoload_register( '__autoload' );
			}

			spl_autoload_register( array( $this, 'autoload' ) );

			$this->define_constants();

			// Include required files.
			$this->includes();

			// Init API.
			$this->api             = new WCK_API();
			$this->installer       = new WCK_Install();
			$this->webhook_service = new WCK_Webhook_Service();
			$this->admin           = new WPKlaviyoAdmin();
			$this->options         = new WCK_Options();

			// Hooks.
			add_action( 'init', array( $this, 'init' ), 0 );
			$this->define_admin_hooks();

			/**
			 * Plugin loaded.
			 *
			 * @since 2.0.0
			 */
			do_action( 'woocommerce_klaviyo_loaded' );
		}

		/**
		 * Autoload inaccessible properties on demand.
		 *
		 * @param mixed $key Key to be loaded.
		 * @return mixed
		 */
		public function __get( $key ) {
			if ( method_exists( $this, $key ) ) {
				return $this->$key();
			}
			return false;
		}

		/**
		 * Auto-load WC classes on demand to reduce memory consumption.
		 *
		 * @param mixed $class Class to be loaded.
		 * @return void
		 */
		public function autoload( $class ) {
			$path  = null;
			$class = strtolower( $class );
			$file  = 'class-' . str_replace( '_', '-', $class ) . '.php';

			if ( $path && is_readable( $path . $file ) ) {
				include_once $path . $file;
				return;
			}

			// Fallback.
			if ( strpos( $class, 'wck_' ) === 0 ) {
				$path = $this->plugin_path() . '/includes/';
			}

			if ( $path && is_readable( $path . $file ) ) {
				include_once $path . $file;
				return;
			}
		}

		/**
		 * Define some plugin constants.
		 *
		 * @return void
		 */
		private function define_constants() {
			if ( ! defined( 'WCK_PLUGIN_FILE' ) ) {
				define( 'WCK_PLUGIN_FILE', __FILE__ );
			}
			if ( ! defined( 'WCK_VERSION' ) ) {
				define( 'WCK_VERSION', $this->version );
			}
		}

		/**
		 * Include required core files used in admin and on the frontend. Only include
		 * wck-core if WooCommerce plugin is activated. Always include analytics.
		 *
		 * @return void
		 */
		private function includes() {
			if ( is_plugin_active('woocommerce/woocommerce.php') ) {
				// `woocommerce_init` fires during execution of the general `init` action.
				add_action( 'woocommerce_init', function () {
					include_once 'includes/wck-core-functions.php';
				} );
			}
			include_once 'includes/class-wck-install.php';
			include_once 'includes/class-wck-webhook-service.php';
			include_once 'inc/kla-admin.php';
		}

		/**
		 * Add admin styles.
		 *
		 * @return void
		 */
		private function define_admin_hooks() {
			add_action( 'admin_enqueue_scripts', array( $this->admin, 'enqueue_styles' ) );
		}

		/**
		 * Init WooCommerceKlaviyo when WordPress Initialises.
		 */
		public function init() {
			/**
			 * Klaviyo plugin init hook.
			 *
			 * @since 2.0.0
			 */
			do_action( 'woocommerce_klaviyo_init' );
		}

		/**
		 * Get the plugin url.
		 *
		 * @return string
		 */
		public function plugin_url() {
			return untrailingslashit( plugins_url( '/', __FILE__ ) );
		}

		/**
		 * Get the plugin path.
		 *
		 * @return string
		 */
		public function plugin_path() {
			return untrailingslashit( plugin_dir_path( __FILE__ ) );
		}
	}

endif;
// phpcs:disable
if ( ! function_exists( 'WCK' ) ) {
	/**
	 * Returns the main instance of WCK to prevent the need to use globals.
	 *
	 * @since  0.9
	 * @return WooCommerceKlaviyo
	 */
	function WCK() {
		return WooCommerceKlaviyo::instance();
	}
}
// phpcs:enable
// Global for backwards compatibility.
$GLOBALS['woocommerce-klaviyo'] = WCK();

// load the WordPress tracking and widgets.

// Makes sure the plugin is defined before trying to use it.

$url = plugins_url();

if ( ! function_exists( 'is_plugin_inactive' ) ) {
	require_once ABSPATH . '/wp-admin/includes/plugin.php';
}

if ( is_plugin_inactive( 'wordpress-klaviyo-master/klaviyo.php' ) ) {
	// plugin is not activated.

	$my_plugin_file = __FILE__;

	if ( isset( $plugin ) ) {
		$my_plugin_file = $plugin;
	} elseif ( isset( $mu_plugin ) ) {
		$my_plugin_file = $mu_plugin;
	} elseif ( isset( $network_plugin ) ) {
		$my_plugin_file = $network_plugin;
	}


	/** CONSTANTS */
	if ( ! defined( 'KLAVIYO_URL' ) ) {
		define( 'KLAVIYO_URL', plugin_dir_url( $my_plugin_file ) );
	}
	if ( ! defined( 'KLAVIYO_PATH' ) ) {
		define( 'KLAVIYO_PATH', __DIR__ . '/' );
	}
	if ( ! defined( 'KLAVIYO_BASENAME' ) ) {
		define( 'KLAVIYO_BASENAME', plugin_basename( $my_plugin_file ) );
	}
	if ( ! defined( 'KLAVIYO_ADMIN' ) ) {
		define( 'KLAVIYO_ADMIN', admin_url() );
	}
	if ( ! defined( 'KLAVIYO_PLUGIN_VERSION' ) ) {
		define( 'KLAVIYO_PLUGIN_VERSION', '1.3' );
	}

	/** INCLUDES */
	require_once KLAVIYO_PATH . 'inc/kla-analytics.php';
	require_once KLAVIYO_PATH . 'inc/kla-widgets.php';
	require_once KLAVIYO_PATH . 'inc/kla-notice.php';


	/** Helper Class WPKlaviyo */
	if ( ! class_exists( 'WPKlaviyo' ) ) {
		include_once __DIR__ . '/includes/class-wpklaviyo.php';
	}


	/** INIT */
	global $klaviyowp;
	$klaviyowp = new WPKlaviyo();

	// Handle deactivation.
	register_deactivation_hook( __FILE__, array( WCK()->installer, 'cleanup_klaviyo' ) );
}
