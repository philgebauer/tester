<?php

// Register Custom Post Type
function youthcare_staff_post_type() {

	$labels = array(
		'name'                  => _x( 'Staff', 'Post Type General Name', 'youthcare' ),
		'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'youthcare' ),
		'menu_name'             => __( 'Staff', 'youthcare' ),
		'name_admin_bar'        => __( 'Staff', 'youthcare' ),
		'archives'              => __( 'Staff Archives', 'youthcare' ),
		'attributes'            => __( 'Staff Attributes', 'youthcare' ),
		'parent_item_colon'     => __( 'Parent Item:', 'youthcare' ),
		'all_items'             => __( 'All Staff Members', 'youthcare' ),
		'add_new_item'          => __( 'Add New Staff Member', 'youthcare' ),
		'add_new'               => __( 'Add New', 'youthcare' ),
		'new_item'              => __( 'New Staff Member', 'youthcare' ),
		'edit_item'             => __( 'Edit Staff Member', 'youthcare' ),
		'update_item'           => __( 'Update Staff Member', 'youthcare' ),
		'view_item'             => __( 'View Staff Member', 'youthcare' ),
		'view_items'            => __( 'View Staff', 'youthcare' ),
		'search_items'          => __( 'Search Staff Member', 'youthcare' ),
		'not_found'             => __( 'Not found', 'youthcare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'youthcare' ),
		'featured_image'        => __( 'Profile Photo', 'youthcare' ),
		'set_featured_image'    => __( 'Set profile photo', 'youthcare' ),
		'remove_featured_image' => __( 'Remove profile photo', 'youthcare' ),
		'use_featured_image'    => __( 'Use as profile photo', 'youthcare' ),
		'insert_into_item'      => __( 'Insert into staff member', 'youthcare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this staff member', 'youthcare' ),
		'items_list'            => __( 'Staff Member list', 'youthcare' ),
		'items_list_navigation' => __( 'Staff list navigation', 'youthcare' ),
		'filter_items_list'     => __( 'Filter staff list', 'youthcare' ),
	);
	$rewrite = array(
		'slug'                  => 'staff',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( 'Staff', 'youthcare' ),
		'description'           => __( 'Staff Members', 'youthcare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => 'edit.php?post_type=page',
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type( 'staff', $args );

}
add_action( 'init', 'youthcare_staff_post_type', 0 );
