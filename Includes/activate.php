<?php

function one_activate_plugin(){
	if(version_compare(get_bloginfo('version'), '4.5', '<')){
		wp_die(__('Update wordpress to use this plugin', 'onedot'));
	}
}