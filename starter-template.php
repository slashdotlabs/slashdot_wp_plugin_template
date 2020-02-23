<?php
/**
 *
 * Plugin Name:       Starter Template
 * Plugin URI:        Change URI
 * Description:       Change the description
 * Version:	1.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.3
 * Author:            Slash Dot Labs Limited
 * Author URI:        https://slashdotlabs.com/
 */

// Prevent direct access
defined('ABSPATH') or die("We don't do that here :/");

//global plugin name
define('SLASH_COUPON_PLUGIN_NAME', plugin_basename(__FILE__));

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

// TODO: have different namespaces for root inc in different plugins to avoid collisions
register_activation_hook(__FILE__, [Slash\Base\Activate::class, 'run']);
register_deactivation_hook(__FILE__, [Slash\Base\Deactivate::class, 'run']);

if (class_exists(Slash\Init::class)) {
    Slash\Init::register_services();
}
