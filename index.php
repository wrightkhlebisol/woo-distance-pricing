<?php
/*
*  	Plugin Name: WC Ondeot Distance Checkout
*  	Author: Wright
*	Version: 0.0.1
*	Author URI: https://www.github.com/wrightkhlebisol/
*	Description: Set total purchase price in Woo-Commerce checkout based on the distance of the customer from their store
*/
if(!function_exists('add_action')){
	die('Just a plugin, not much here');
	exit();
}
// Setup
define('RECIPE_PLUGIN_URL', __FILE__);

// Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/menus.php');
include('includes/admin/options-page.php');

// Hooks
register_activation_hook('__FILE__', 'onedot_activate_plugin');
add_action('init', 'onedot_init');
add_action('admin_menu', 'onedot_admin_menus');


// Shortcodes
