<?php
/**
 * Plugin Name:     Media Copyright Manager
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     media-copyright-manager
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Media_Copyright_Manager
 */

// Your code starts here.

require_once(__DIR__ . '/taxonomies/mcm-media-source.php');
require_once(__DIR__ . '/inc/copyright-auto-assign.php');
require_once(__DIR__ . '/inc/providers.php');
require_once(__DIR__ . '/inc/cli.php');
