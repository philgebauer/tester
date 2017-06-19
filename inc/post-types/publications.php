<?php

// Register Custom Post Type
function youthcare_publications_post_type() {

	$labels = array(
		'name'                  => _x( 'Publications', 'Post Type General Name', 'youthcare' ),
		'singular_name'         => _x( 'Publication', 'Post Type Singular Name', 'youthcare' ),
		'menu_name'             => __( 'Publications', 'youthcare' ),
		'name_admin_bar'        => __( 'Document', 'youthcare' ),
		'archives'              => __( 'Document Group Archives', 'youthcare' ),
		'attributes'            => __( 'Document Group Attributes', 'youthcare' ),
		'parent_item_colon'     => __( 'Parent Group:', 'youthcare' ),
		'all_items'             => __( 'Publications', 'youthcare' ),
		'add_new_item'          => __( 'Add New Document Group', 'youthcare' ),
		'add_new'               => __( 'Add New', 'youthcare' ),
		'new_item'              => __( 'New Group', 'youthcare' ),
		'edit_item'             => __( 'Edit Group', 'youthcare' ),
		'update_item'           => __( 'Update Group', 'youthcare' ),
		'view_item'             => __( 'View Group', 'youthcare' ),
		'view_items'            => __( 'View Groups', 'youthcare' ),
		'search_items'          => __( 'Search Group', 'youthcare' ),
		'not_found'             => __( 'Not found', 'youthcare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'youthcare' ),
		'featured_image'        => __( 'Featured Image', 'youthcare' ),
		'set_featured_image'    => __( 'Set featured image', 'youthcare' ),
		'remove_featured_image' => __( 'Remove featured image', 'youthcare' ),
		'use_featured_image'    => __( 'Use as featured image', 'youthcare' ),
		'insert_into_item'      => __( 'Insert into item', 'youthcare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this document', 'youthcare' ),
		'items_list'            => __( 'Documents list', 'youthcare' ),
		'items_list_navigation' => __( 'Documentss list navigation', 'youthcare' ),
		'filter_items_list'     => __( 'Filter documents list', 'youthcare' ),
	);
	$args = array(
		'label'                 => __( 'Publication', 'youthcare' ),
		'description'           => __( 'Publications Management', 'youthcare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => 'edit.php?post_type=page',
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'publications',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'publications', $args );

}
add_action( 'init', 'youthcare_publications_post_type', 0 );