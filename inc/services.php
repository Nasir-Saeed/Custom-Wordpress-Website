<?php

// Egowebsite Services
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'egowebsite' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'egowebsite' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'egowebsite' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'egowebsite' ),
		'archives' => __( 'Service Archives', 'egowebsite' ),
		'attributes' => __( 'Service Attributes', 'egowebsite' ),
		'parent_item_colon' => __( 'Parent Service:', 'egowebsite' ),
		'all_items' => __( 'All Services', 'egowebsite' ),
		'add_new_item' => __( 'Add New Service', 'egowebsite' ),
		'add_new' => __( 'Add New', 'egowebsite' ),
		'new_item' => __( 'New Service', 'egowebsite' ),
		'edit_item' => __( 'Edit Service', 'egowebsite' ),
		'update_item' => __( 'Update Service', 'egowebsite' ),
		'view_item' => __( 'View Service', 'egowebsite' ),
		'view_items' => __( 'View Services', 'egowebsite' ),
		'search_items' => __( 'Search Service', 'egowebsite' ),
		'not_found' => __( 'Not found', 'egowebsite' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'egowebsite' ),
		'featured_image' => __( 'Featured Image', 'egowebsite' ),
		'set_featured_image' => __( 'Set featured image', 'egowebsite' ),
		'remove_featured_image' => __( 'Remove featured image', 'egowebsite' ),
		'use_featured_image' => __( 'Use as featured image', 'egowebsite' ),
		'insert_into_item' => __( 'Insert into Service', 'egowebsite' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'egowebsite' ),
		'items_list' => __( 'Services list', 'egowebsite' ),
		'items_list_navigation' => __( 'Services list navigation', 'egowebsite' ),
		'filter_items_list' => __( 'Filter Services list', 'egowebsite' ),
	);
	$args = array(
		'label' => __( 'Service', 'egowebsite' ),
		'description' => __( 'Service Area', 'egowebsite' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-customizer',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

