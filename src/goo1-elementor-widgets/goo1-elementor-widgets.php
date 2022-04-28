<?php
/**
 * Plugin Name: Elementor Essential Widgets
 * Plugin URI: https://github.com/andreaskasper/
 * Description: Implement important functions and shortcodes for your danceevent
 * Author: Andreas Kasper
 * Version: 0.1.109
 * Author URI: https://github.com/andreaskasper/
 * Network: True
 * Text Domain: goo1-elementor
 */

spl_autoload_register(function ($class_name) {
	if (substr($class_name,0,30) != "plugins\\goo1\\elementorwidgets\\") return false;
	$files = array(
		__DIR__."/classes/".str_replace("\\", DIRECTORY_SEPARATOR,substr($class_name, 30)).".php"
	);
	foreach ($files as $file) {
		if (file_exists($file)) {
			include($file);
			return true;
		}
	}
	die(__DIR__."/classes/".str_replace("\\", DIRECTORY_SEPARATOR,substr($class_name, 30)).".php");
	return false;
});

add_action( "plugins_loaded", function() {
    load_plugin_textdomain( "danceevent", FALSE, basename( dirname( __FILE__ ) ) . "/languages/" );
});
\plugins\goo1\danceevent\core::init();

if (!class_exists("Puc_v4_Factory")) {
	require_once(__DIR__."/plugin-update-checker/plugin-update-checker.php");
}
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    "https://raw.githubusercontent.com/andreaskasper/elementor-widgets/main/dist/updater.json",
    __FILE__, //Full path to the main plugin file or functions.php.
    "goo1-elementor-widgets"
);

