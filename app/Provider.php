<?php
/**
 * App service provider.
 *
 * Service providers are essentially the bootstrapping code for your theme.
 * They allow you to add bindings to the container on registration and boot them
 * once everything has been registered.
 *
 * @package   Exhale
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2019 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://themehybrid.com/themes/exhale
 */

namespace SilverQuantum;

use Backdrop\Core\ServiceProvider;
use SilverQuantum\Tools\Config;

/**
 * App service provider.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Callback executed when the `\Hybrid\Core\Application` class registers
	 * providers. Use this method to bind items to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		// Bind a single instance of theme mod defaults.
		$this->app->singleton( 'silver/quantum/mods', function() {

			return array_merge(
				( new Config() )->get( '_settings-mods' )
			);
		} );
	}
}