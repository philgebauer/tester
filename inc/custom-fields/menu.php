<?php
// Theme Settings Pages
if( function_exists('acf_add_options_page') ) :
	$parent = acf_add_options_page(array(
	    'page_title'    => __( 'Theme General Settings', 'youthcare' ),
	    'menu_title'    => __( 'Theme Settings', 'youthcare' ),
	    'capability'    => 'manage_options',
	    'icon_url'		=> 'dashicons-welcome-widgets-menus',
	    'redirect'		=> false,
	    'position'		=> 60
	));
	acf_add_options_sub_page(array(
	    'page_title'    => __( 'Sharing Options', 'youthcare' ),
	    'menu_title'    => __( 'Sharing Options', 'youthcare' ),
	    'capability'    => 'manage_options',
	    'parent_slug'	=> $parent['menu_slug']
	));
	acf_add_options_sub_page(array(
	    'page_title'    => __( 'Call to Action Settings', 'youthcare' ),
	    'menu_title'    => __( 'CTA Settings', 'youthcare' ),
	    'capability'    => 'manage_options',
	    'parent_slug'	=> $parent['menu_slug']
	));
	acf_add_options_page(array(
	    'page_title'    => __( 'Footer Options', 'youthcare' ),
	    'menu_title'    => __( 'Footer Options', 'youthcare' ),
	    'capability'    => 'manage_options',
	    'parent_slug'	=> $parent['menu_slug']
	));
endif;