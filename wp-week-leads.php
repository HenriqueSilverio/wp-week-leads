<?php
/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package MiniCurso\Leads
 *
 * @wordpress-plugin
 * Plugin Name:       WP Week Leads
 * Plugin URI:        https://henriquesilverio.github.io
 * Description:       WordPress Plugin Boilerplate with PSR-4 Autoloading.
 * Version:           0.0.1
 * Author:            Henrique Silvério
 * Author URI:        https://henriquesilverio.github.io
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wp-week-leads
 * Domain Path:       languages
 */

use MiniCurso\Leads;

/**
 * Prevents direct file access.
 */
if (false === defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    die();
}

/** Requires the classes autoloader. */
require_once 'vendor/autoload.php';

/** Gets the main plugin instance. */
$plugin = Leads\Plugin::getInstance();

/** Starts the plugin with WordPress loading process. */
add_action('plugins_loaded', [$plugin, 'start']);
