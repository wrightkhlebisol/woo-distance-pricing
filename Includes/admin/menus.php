<?php
function onedot_admin_menus(){
	add_menu_page(
		'Distance Pricing Options',
		'Distance Pricing Options',
		'edit_theme_options',
		'onedot_plugin-opts',
		'onedot_plugin_opts_page'
	);
}