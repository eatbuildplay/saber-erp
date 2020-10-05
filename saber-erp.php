<?php

/**
 * Plugin Name:     Saber ERP
 * Description:     Powerful ERP system for WP.
 * Version:         0.0.1
 * Author:          Eat/Build/Play
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     saber-erp
 *
 * @package         EBP\SaberErp
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

namespace SaberErp;

// Define conts.
define('SABER_ERP_PLUGIN_NAME', 'Skinny Blocks Premium');
define('SABER_ERP_VERSION', '0.0.1');
define('SABER_ERP_PATH', plugin_dir_path(__FILE__));
define('SABER_ERP_URL', plugin_dir_url(__FILE__));

class Plugin {

	public function __construct() {

		$this->loader();

	}

	/*
	 * Init PHP loading
	 */
	public function loader() {

		spl_autoload_register([$this, 'autoload']);

	}

	public function autoload( $className ) {

		if ( 0 !== strpos( $className, 'SaberErp\\' ) ) {
      return;
    }

		// strip the namespace leaving only the final class name
		$className = str_replace('SaberErp\\', '', $className);
		require( SABER_ERP_PATH . 'src/' . $className . '.php' );

	}

  public static function activation() {

  }

}

// init plugin
new Plugin();

/*
 * Activation and deactivation hooks
 */
register_activation_hook(__FILE__, '\SaberErp\Plugin::activation');
