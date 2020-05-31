<?php

function onedot_init(){
	$labels = array(
        'name'                  => __( 'Distance Prices', 'onedot' ),
        'singular_name'         => __( 'Distance Price', 'onedot' ),
        'menu_name'             => __( 'Distance Prices', 'onedot' ),
        'name_admin_bar'        => __( 'Distance Price', 'onedot' ),
        'add_new'               => __( 'Add New', 'onedot' ),
        'add_new_item'          => __( 'Add New Distance Price', 'onedot' ),
        'new_item'              => __( 'New Distance Price', 'onedot' ),
        'edit_item'             => __( 'Edit Distance Price', 'onedot' ),
        'view_item'             => __( 'View Distance Price', 'onedot' ),
        'all_items'             => __( 'All Distance Prices', 'onedot' ),
        'search_items'          => __( 'Search Distance Prices', 'onedot' ),
        'parent_item_colon'     => __( 'Parent Distance Prices:', 'onedot' ),
        'not_found'             => __( 'No distance prices found.', 'onedot' ),
        'not_found_in_trash'    => __( 'No distance prices found in Trash.', 'onedot' ),
        'featured_image'        => __( 'Distance Price Cover Image', 'onedot' ),
        'set_featured_image'    => __( 'Set cover image', 'onedot' ),
        'remove_featured_image' => __( 'Remove cover image', 'onedot' ),
        'use_featured_image'    => __( 'Use as cover image', 'onedot' ),
        'archives'              => __( 'Distance Price archives', 'onedot' ),
        'insert_into_item'      => __( 'Insert into distance price', 'onedot' ),
        'uploaded_to_this_item' => __( 'Uploaded to this distance price', 'onedot' ),
        'filter_items_list'     => __( 'Filter distance prices list', 'onedot' ),
        'items_list_navigation' => __( 'Distance Prices list navigation', 'onedot' ),
        'items_list'            => __( 'Distance Prices list', 'onedot' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'distance_price' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		// 'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
		// 'taxonomies'		 =>	array('category', 'post_tag')
    );
 
    register_post_type( 'distance price', $args );
}