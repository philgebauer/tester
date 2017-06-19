<?php

// Register Custom Post Type
function youthcare_events_post_type() {

	$labels = array(
		'name'                  => _x( 'Event', 'Post Type General Name', 'youthcare' ),
		'singular_name'         => _x( 'Events', 'Post Type Singular Name', 'youthcare' ),
		'menu_name'             => __( 'Events', 'youthcare' ),
		'name_admin_bar'        => __( 'Event', 'youthcare' ),
		'archives'              => __( 'Event Archives', 'youthcare' ),
		'attributes'            => __( 'Event Attributes', 'youthcare' ),
		'parent_item_colon'     => __( 'Parent Event:', 'youthcare' ),
		'all_items'             => __( 'All Events', 'youthcare' ),
		'add_new_item'          => __( 'Add New Event', 'youthcare' ),
		'add_new'               => __( 'Add New', 'youthcare' ),
		'new_item'              => __( 'New Event', 'youthcare' ),
		'edit_item'             => __( 'Edit Event', 'youthcare' ),
		'update_item'           => __( 'Update Event', 'youthcare' ),
		'view_item'             => __( 'View Event', 'youthcare' ),
		'view_items'            => __( 'View Events', 'youthcare' ),
		'search_items'          => __( 'Search Event', 'youthcare' ),
		'not_found'             => __( 'Not found', 'youthcare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'youthcare' ),
		'featured_image'        => __( 'Featured Image', 'youthcare' ),
		'set_featured_image'    => __( 'Set featured image', 'youthcare' ),
		'remove_featured_image' => __( 'Remove featured image', 'youthcare' ),
		'use_featured_image'    => __( 'Use as featured image', 'youthcare' ),
		'insert_into_item'      => __( 'Insert into Event', 'youthcare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'youthcare' ),
		'items_list'            => __( 'Events list', 'youthcare' ),
		'items_list_navigation' => __( 'Events list navigation', 'youthcare' ),
		'filter_items_list'     => __( 'Filter Events list', 'youthcare' ),
	);
	$rewrite = array(
		'slug'                  => 'events',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( 'Events', 'youthcare' ),
		'description'           => __( 'Events', 'youthcare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'youthcare_events_post_type', 0 );
