<?php
/*
Plugin Name: Portfolioo
Description: Plugin de Portfolio | CPT de type "projet" avec sa taxonomie associée "type de projet"
Author: Charlene Zybala
Author URI: https://www.charlene-zybala.com
Version: 1.0
*/

//Test de sécurité
if (!defined('WPINC')) {
    http_response_code(404);
    exit;
}

define('PORTFOLIOO_PLUGIN_FILE', __FILE__);

require plugin_dir_path(PORTFOLIOO_PLUGIN_FILE) . 'vendor/autoload.php';
require_once ABSPATH . 'wp-admin/includes/user.php';
//var_dump(ABSPATH . 'wp-admin/includes/user.php');
//exit;

$plugin = new portfolioCZ\Plugin;
$plugin->run();