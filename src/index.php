<?php
/**
 * Plugin Name:     Udemy Plus
 * Plugin URI:      https://www.udemy.com
 * Description:     This is a plugin for udemy plus
 * Version:         1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.4
 * Author:          Udemy
 * Author URI:      https://www.udemy.com
 * Text Domain:     udemy-plus
 * Domain Path:     /languages
 */

if (!function_exists('add_action')) {
    echo 'Seems like you stumbled here by accident :p';
    exit;
}

// Setup
define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes
include(UP_PLUGIN_DIR . 'includes/register-blocks.php');

// Hooks
add_action('init', 'up_register_blocks');