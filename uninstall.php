<?php

if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) exit();

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

// TODO: Handle uninstall actions