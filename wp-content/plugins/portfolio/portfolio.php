<?php
/*
Plugin Name: Portfolio
Description: Plugin de Portfolio | CPT de type "projet" avec sa taxonomie associée "type de projet"
Author: Charlene Zybala
*/

//Test de sécurité
if (!defined('WPINC')) {
    http_response_code(404);
    exit;
}

define('PORTFOLIO_PLUGIN_FILE', __FILE__);

require plugin_dir_path(PORTFOLIO_PLUGIN_FILE) . 'vendor/autoload.php';
require_once ABSPATH . 'wp-admin/includes/user.php';
//var_dump(ABSPATH . 'wp-admin/includes/user.php');
//exit;

$plugin = new portfolio\Plugin;
$plugin->run();