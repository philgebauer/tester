<?php

// Register Custom Post Type
function youthcare_programs_post_type() {

	$labels = array(
		'name'                  => _x( 'Programs', 'Post Type General Name', 'youthcare' ),
		'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'youthcare' ),
		'menu_name'             => __( 'Programs', 'youthcare' ),
		'name_admin_bar'        => __( 'Program', 'youthcare' ),
		'archives'              => __( 'Program Archives', 'youthcare' ),
		'attributes'            => __( 'Program Attributes', 'youthcare' ),
		'parent_item_colon'     => __( 'Parent Program:', 'youthcare' ),
		'all_items'             => __( 'All Programs', 'youthcare' ),
		'add_new_item'          => __( 'Add New Program', 'youthcare' ),
		'add_new'               => __( 'Add New', 'youthcare' ),
		'new_item'              => __( 'New Program', 'youthcare' ),
		'edit_item'             => __( 'Edit Program', 'youthcare' ),
		'update_item'           => __( 'Update Program', 'youthcare' ),
		'view_item'             => __( 'View Program', 'youthcare' ),
		'view_items'            => __( 'View Programs', 'youthcare' ),
		'search_items'          => __( 'Search Program', 'youthcare' ),
		'not_found'             => __( 'Not found', 'youthcare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'youthcare' ),
		'featured_image'        => __( 'Featured Image', 'youthcare' ),
		'set_featured_image'    => __( 'Set featured image', 'youthcare' ),
		'remove_featured_image' => __( 'Remove featured image', 'youthcare' ),
		'use_featured_image'    => __( 'Use as featured image', 'youthcare' ),
		'insert_into_item'      => __( 'Insert into program', 'youthcare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this program', 'youthcare' ),
		'items_list'            => __( 'Programss list', 'youthcare' ),
		'items_list_navigation' => __( 'Programs list navigation', 'youthcare' ),
		'filter_items_list'     => __( 'Filter programs list', 'youthcare' ),
	);
	$rewrite = array(
		'slug'                  => 'program',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( 'Program', 'youthcare' ),
		'description'           => __( 'YouthCARE Programs', 'youthcare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'programs', $args );

}
add_action( 'init', 'youthcare_programs_post_type', 0 );
