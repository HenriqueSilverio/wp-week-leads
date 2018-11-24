<?php
/**
 * @todo Add documentation.
 */

/**
 * Prevents direct file access.
 */
if (false === defined('WP_UNINSTALL_PLUGIN')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    die();
}

/**
 * @global wpdb $wpdb WordPress database object.
 * @since 1.0.0
 * @see https://developer.wordpress.org/reference/classes/wpdb
 */
global $wpdb;
