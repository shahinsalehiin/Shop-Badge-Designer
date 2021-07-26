<?php
/**
 * Plugin Name:             Shop Badge Designer
 * Plugin URI:              https://wpcommerz.com/
 * Description:             Attach custom badges in product image using Shop Badge Designer
 * Version:                 1.0.0
 * Author:                  WPCommerz
 * Author URI:              https://wpcommerz.com
 * WC requires at least:    3.0
 * WC tested up to:         5.1.0
 * License:                 GPL v2 or later
 * License URI:             https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:             wpcsbd
 * Domain Path:             /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPCSBD_VERSION', '1.0.0' );

defined( 'WPCSBD_PATH' ) or define( 'WPCSBD_PATH', plugin_dir_path( __FILE__ ) );
defined( 'WPCSBD_URL' ) or define( 'WPCSBD_URL', plugin_dir_url( __FILE__ ) );

defined( 'WPCSBD_IMG_DIR' ) or define( 'WPCSBD_IMG_DIR', plugin_dir_url( __FILE__ ) . 'admin/images/' );

defined( 'WPCSBD_CSS_DIR' ) or define( 'WPCSBD_CSS_DIR', plugin_dir_url( __FILE__ ) . 'public/css/' );

defined( 'WPCSBD_JS_DIR' ) or define( 'WPCSBD_JS_DIR', plugin_dir_url( __FILE__ ) . 'public/js/' );

defined( 'WPCSBD_PREVIEW_IMG' ) or define( 'WPCSBD_PREVIEW_IMG', plugin_dir_url( __FILE__ ) . 'admin/partials/preview-image' );

defined( 'WPCSBD_VIEW_DIRECTORY' ) or define( 'WPCSBD_VIEW_DIRECTORY', plugin_dir_url( __FILE__ ) . 'admin/partials' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpcsbd-activator.php
 */
function activate_wpcsbd() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpcsbd-activator.php';
	Wpcsbd_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpcsbd-deactivator.php
 */
function deactivate_wpcsbd() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpcsbd-deactivator.php';
	Wpcsbd_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpcsbd' );
register_deactivation_hook( __FILE__, 'deactivate_wpcsbd' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpcsbd.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpcsbd() {

	$plugin = new Wpcsbd();
	$plugin->run();

}
run_wpcsbd();
