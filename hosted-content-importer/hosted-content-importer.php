<?php
/*
 * Plugin Name: Hosted Content Importer
 * Plugin URI: https://wordpress.org/plugins/hosted-content-importer/
 * Description: Dynamically fetches programmed contents from third party source
 * Author: Bimal Poudel
 * Author URI: http://bimal.org.np/
 * Development URI: https://github.com/bimalpoudel/hosted-content-importer
 * License: GPLv2 or later
 * Version: 1.0.0
 */

define('HCI_PLUGIN_DIR', dirname(__FILE__));

/**
 * Class file Parsedown.php renamed. Rest, 100% original.
 * http://parsedown.org/
 * https://github.com/erusev/parsedown
 */
if(!class_exists('Parsedown'))
{
	require_once(HCI_PLUGIN_DIR . '/classes/parsedown/class.parsedown.inc.php' );
}
require_once(HCI_PLUGIN_DIR . '/classes/hci/interface.hosted_content_interface.inc.php');
require_once(HCI_PLUGIN_DIR . '/classes/hci/class.hosted_content_importer.inc.php');
require_once(HCI_PLUGIN_DIR . '/classes/hci/class.hosted_content_shortcode.inc.php');

new hosted_content_shortcode;