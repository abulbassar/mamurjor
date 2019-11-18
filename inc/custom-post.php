<?php

function mamurjor_custom_post_type() {

	/**
	 * Post Type: slider test.
	 */

	$labels = [
		"name" => __( "Slider", "mamusrc" ),
		"singular_name" => __( "slider", "mamusrc" ),
		'all_items'             => __( 'All Items', 'mamusrc' ),
		'add_new_item'          => __( 'Add New Item', 'mamusrc' ),
		'add_new'               => __( 'Add New', 'mamusrc' ),
		'new_item'              => __( 'New Item', 'mamusrc' ),
		'edit_item'             => __( 'Edit Item', 'mamusrc' ),
		'update_item'           => __( 'Update Item', 'mamusrc' ),
		'view_item'             => __( 'View Item', 'mamusrc' ),
	];

	$args = [
		"label" => __( "slider", "mamusrc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "slider", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "slider", $args );
	
	//testimonial post type
	$labels = [
		"name" => __( "testimonial", "mamusrc" ),
		"singular_name" => __( "testimonial", "mamusrc" ),
		'all_items'             => __( 'All Items', 'mamusrc' ),
		'add_new_item'          => __( 'Add New Item', 'mamusrc' ),
		'add_new'               => __( 'Add New', 'mamusrc' ),
		'new_item'              => __( 'New Item', 'mamusrc' ),
		'edit_item'             => __( 'Edit Item', 'mamusrc' ),
		'update_item'           => __( 'Update Item', 'mamusrc' ),
		'view_item'             => __( 'View Item', 'mamusrc' ),
	];

	$args = [
		"label" => __( "testimonial", "mamusrc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","excerpt","custom-fields" ],
	];

	register_post_type( "testimonial", $args );
	

	//Team post type
	$labels = [
		"name" => __( "Team", "mamusrc" ),
		"singular_name" => __( "team", "mamusrc" ),
		'all_items'             => __( 'All Items', 'mamusrc' ),
		'add_new_item'          => __( 'Add New Item', 'mamusrc' ),
		'add_new'               => __( 'Add New', 'mamusrc' ),
		'new_item'              => __( 'New Item', 'mamusrc' ),
		'edit_item'             => __( 'Edit Item', 'mamusrc' ),
		'update_item'           => __( 'Update Item', 'mamusrc' ),
		'view_item'             => __( 'View Item', 'mamusrc' ),
	];

	$args = [
		"label" => __( "team", "mamusrc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "team", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","excerpt","custom-fields" ],
	];

	register_post_type( "team", $args );
	
	//Course post type
	$labels = [
		"name" => __( "Course", "mamusrc" ),
		"singular_name" => __( "course", "mamusrc" ),
		'all_items'             => __( 'All courses', 'mamusrc' ),
		'add_new_item'          => __( 'Add New course', 'mamusrc' ),
		'add_new'               => __( 'Add New Course', 'mamusrc' ),
		'new_item'              => __( 'New course', 'mamusrc' ),
		'edit_item'             => __( 'Edit course', 'mamusrc' ),
		'update_item'           => __( 'Update course', 'mamusrc' ),
		'view_item'             => __( 'View course', 'mamusrc' ),
	];

	$args = [
		"label" => __( "course", "mamusrc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "team", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","excerpt","custom-fields" ],
	];

	register_post_type( "course", $args );
	
	//
	//Course post type
	$labels = [
		"name" => __( "Services", "mamusrc" ),
		"singular_name" => __( "services", "mamusrc" ),
		'all_items'             => __( 'All service', 'mamusrc' ),
		'add_new_item'          => __( 'Add New service', 'mamusrc' ),
		'add_new'               => __( 'Add New service', 'mamusrc' ),
		'new_item'              => __( 'New service', 'mamusrc' ),
		'edit_item'             => __( 'Edit service', 'mamusrc' ),
		'update_item'           => __( 'Update service', 'mamusrc' ),
		'view_item'             => __( 'View service', 'mamusrc' ),
	];

	$args = [
		"label" => __( "services", "mamusrc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "team", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","excerpt","custom-fields" ],
	];

	register_post_type( "services", $args );
	
}

add_action( 'init', 'mamurjor_custom_post_type' );
