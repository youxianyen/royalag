<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\GoogleListingsAndAds\Internal\DependencyManagement;

use Automattic\WooCommerce\GoogleListingsAndAds\Proxies\GoogleGtagJs;
use Automattic\WooCommerce\GoogleListingsAndAds\Proxies\RESTServer;
use Automattic\WooCommerce\GoogleListingsAndAds\Proxies\Tracks;
use Automattic\WooCommerce\GoogleListingsAndAds\Proxies\WC as WCProxy;
use Automattic\WooCommerce\GoogleListingsAndAds\Proxies\WP;
use Automattic\WooCommerce\GoogleListingsAndAds\Proxies\Jetpack;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\League\Container\Definition\Definition;
use wpdb;

use function WC;

/**
 * Class ProxyServiceProvider
 *
 * @package Automattic\WooCommerce\GoogleListingsAndAds\Internal\DependencyManagement
 */
class ProxyServiceProvider extends AbstractServiceProvider {

	/**
	 * Array of classes provided by this container.
	 *
	 * @var array
	 */
	protected $provides = [
		RESTServer::class   => true,
		Tracks::class       => true,
		GoogleGtagJs::class => true,
		WP::class           => true,
		Jetpack::class      => true,
		WCProxy::class      => true,
	];

	/**
	 * Use the register method to register items with the container via the
	 * protected $this->container property or the `getContainer` method
	 * from the ContainerAwareTrait.
	 *
	 * @return void
	 */
	public function register(): void {
		$this->share( RESTServer::class );
		$this->share( Tracks::class );
		$this->share( GoogleGtagJs::class );
		$this->share( WP::class );
		$this->share( Jetpack::class );
		$this->share( WCProxy::class, WC()->countries );

		// Use a wrapper function to get the wpdb object.
		$this->share_concrete(
			wpdb::class,
			new Definition(
				wpdb::class,
				function () {
					global $wpdb;
					return $wpdb;
				}
			)
		);
	}
}
