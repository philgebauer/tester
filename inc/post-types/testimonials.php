<?php

// Register Custom Post Type
function testimonial() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'youthcare' ),
		'singular_name'         => _x( 'Testmonial', 'Post Type Singular Name', 'youthcare' ),
		'menu_name'             => __( 'Testimonials', 'youthcare' ),
		'name_admin_bar'        => __( 'Testimonial', 'youthcare' ),
		'archives'              => __( 'Testimonial Archives', 'youthcare' ),
		'attributes'            => __( 'Testimonial Attributes', 'youthcare' ),
		'parent_item_colon'     => __( 'Parent Item:', 'youthcare' ),
		'all_items'             => __( 'All Testimonials', 'youthcare' ),
		'add_new_item'          => __( 'Add New Testimonial', 'youthcare' ),
		'add_new'               => __( 'Add New', 'youthcare' ),
		'new_item'              => __( 'New Testimonial', 'youthcare' ),
		'edit_item'             => __( 'Edit Testimonial', 'youthcare' ),
		'update_item'           => __( 'Update Testimonial', 'youthcare' ),
		'view_item'             => __( 'View Testimonial', 'youthcare' ),
		'view_items'            => __( 'View Testimonials', 'youthcare' ),
		'search_items'          => __( 'Search Testimonial', 'youthcare' ),
		'not_found'             => __( 'Not found', 'youthcare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'youthcare' ),
		'featured_image'        => __( 'Featured Image', 'youthcare' ),
		'set_featured_image'    => __( 'Set featured image', 'youthcare' ),
		'remove_featured_image' => __( 'Remove featured image', 'youthcare' ),
		'use_featured_image'    => __( 'Use as featured image', 'youthcare' ),
		'insert_into_item'      => __( 'Insert into item', 'youthcare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'youthcare' ),
		'items_list'            => __( 'Testimonials list', 'youthcare' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'youthcare' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'youthcare' ),
	);
	$args = array(
		'label'                 => __( 'Testmonial', 'youthcare' ),
		'description'           => __( 'Program Testimonials', 'youthcare' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => 'edit.php?post_type=programs',
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-smiley',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'testimonials',
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'yc_testimonial', $args );

}
add_action( 'init', 'testimonial', 0 );