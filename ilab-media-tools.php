<?php
/*
Plugin Name: ILAB Media Tools
Plugin URI: http://interfacelab.com/media-tools
Description: Complete media management tools
Author: Jon Gilkison
Version: 0.1
Author URI: http://interfacelab.com
*/


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if (is_plugin_active('amazon-web-services/amazon-web-services.php')) {
	deactivate_plugins( plugin_basename( __FILE__ ) );

	add_action( 'admin_notices', function () {
		?>
		<div class="notice notice-error is-dismissible">
			<p><?php _e( 'ILAB Media Tools cannot be activated the same time as the <strong>Amazon Web Services</strong> plugin due to ILAB Media Tools using a newer version of the Amazon AWS SDK.', 'ilab-media-tools' ); ?></p>
		</div>
		<?php
	} );
	return;
}

// Directory defines
define('ILAB_TOOLS_DIR',dirname(__FILE__));
define('ILAB_HELPERS_DIR',ILAB_TOOLS_DIR.'/helpers');
define('ILAB_CLASSES_DIR',ILAB_TOOLS_DIR.'/classes');
define('ILAB_VENDOR_DIR',ILAB_TOOLS_DIR.'/vendor');
define('ILAB_VIEW_DIR',ILAB_TOOLS_DIR.'/views');

// URL defines for CSS/JS
$plug_url = plugin_dir_url( __FILE__ );
define('ILAB_PUB_JS_URL',$plug_url.'public/js');
define('ILAB_PUB_CSS_URL',$plug_url.'public/css');
define('ILAB_PUB_IMG_URL',$plug_url.'public/img');

// Composer
require_once(ILAB_VENDOR_DIR.'/autoload.php');

// Helper functions
require_once('helpers/ilab-media-tool-helpers.php');
require_once('helpers/ilab-media-tool-view.php');
require_once('helpers/ilab-media-tool-wordpress-helpers.php');
require_once('helpers/ilab-media-tool-geometry-helpers.php');

require_once('classes/ilab-media-tools-manager.php');
register_activation_hook(__FILE__,[ILabMediaToolsManager::instance(),'install']);
register_deactivation_hook(__FILE__,[ILabMediaToolsManager::instance(),'uninstall']);
