<?php

/**
 * Advanced Custom Fields
 * 
 */
	if( ! class_exists('acf') ) :
		// Set the ACF Directory
		function youthcare_acf_settings_path( $path ) {
		    $path = get_stylesheet_directory() . '/inc/advanced-custom-fields-pro/';
		    return $path;
		}
		add_filter('acf/settings/path', 'youthcare_acf_settings_path');

		// Set the ACF URI
		function youthcare_acf_uri( $dir ) {
		    $dir = get_stylesheet_directory_uri() . '/inc/advanced-custom-fields-pro/';
		    return $dir;
		}
		add_filter('acf/settings/dir', 'youthcare_acf_uri');

		// Do not display it in the Admin Menu
		add_filter('acf/settings/show_admin', '__return_false');

		// Include ACF
		include('inc/advanced-custom-fields-pro/acf.php');

	endif;

/**
 * Content Width
 * @link https://codex.wordpress.org/Content_Width
 */
	if( ! isset( $content_width ) ) $content_width = 1200;

/**
 * Run after theme is setup
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 */

	function youthcare_theme_setup() {

		// Advanced Custom Fields
		include('inc/custom-fields/menu.php');
		include('inc/custom-fields/home-slider.php');
		include('inc/custom-fields/program.php');
		include('inc/custom-fields/event.php');
		include('inc/custom-fields/staff.php');
		include('inc/custom-fields/sharing-options.php');
		include('inc/custom-fields/cta-options.php');
		include('inc/custom-fields/footer-options.php');
		include('inc/custom-fields/timeline.php');
		include('inc/custom-fields/documents.php');

	}
	add_action( 'after_setup_theme', 'youthcare_theme_setup' );

	// Google Maps API Key Setting
	function youthcare_acf_init() {
		acf_update_setting( 'google_api_key', get_field( 'google_maps_api_key', 'options' ) );
	}

	add_action('acf/init', 'youthcare_acf_init');

/**
 * Add theme shortcodes
 * @link https://codex.wordpress.org/Shortcode_API
 */
	include('inc/short-codes/donation-form.php'); // [donation-form]

/**
 * Post Types
 */
	include('inc/post-types/events.php');
	include('inc/post-types/programs.php');
	include('inc/post-types/testimonials.php');
	include('inc/post-types/staff.php');
	include('inc/post-types/publications.php');

/**
 * Enqueue scripts
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 */
	function youthcare_enque() {
		/**
		 * Add a custom stylesheet.
		 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
		 * @example wp_enqueue_style( $handle, $src, $dep, $ver, $media );
		 */
			// Main stylesheet
			wp_enqueue_style( 'youthcare-style', get_stylesheet_uri(), array(), '0.0.1', false );

		/**
		 * Add a custom JavaScript file.
		 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/#default-scripts-included-and-registered-by-wordpress
		 * @example wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
		 */
		// Google Maps API JavaScript
		wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . get_field( 'google_maps_api_key', 'options' ), array(), '0.0.0', true );
		// Main YouthCARE JavaScript File
		wp_enqueue_script( 'youthcare-main', get_stylesheet_directory_uri() . '/main.js', array( 'jquery' ), '4.7.4', true );
		// Sets a JavaScript variable for the Slider Interval
		wp_add_inline_script( 'youthcare-main', 'var youthcareSliderInterval = ' . get_field( 'slider_interval', get_option('page_on_front') ) . ' * 1000;', 'before');

		/**
		 * Comment Reply Script
		 * @link https://codex.wordpress.org/Migrating_Plugins_and_Themes_to_2.7/Enhanced_Comment_Display
		 */
			if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	}
	add_action( 'wp_enqueue_scripts', 'youthcare_enque' );

/**
 * Register Sidebars
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 */
	function yc_register_sidears() {

		$args = array(
			'id'            => 'blog',
			'class'         => 'sidebar-blog',
			'name'          => __( 'Blog Sidebar', 'youthcare' ),
			'description'   => __( 'Sidebar for main blog and individual blog posts.', 'youthcare' ),
		);
		register_sidebar( $args );

		$args = array(
			'id'            => 'page',
			'class'         => 'sidebar-page',
			'name'          => __( 'Page Sidebar', 'youthcare' ),
			'description'   => __( 'Located on individual content pages using the \"Two Column\" template.', 'youthcare' ),
		);
		register_sidebar( $args );

		$args = array(
			'id'            => 'footer',
			'class'         => 'sidebar-footer',
			'name'          => __( 'Footer Sidebar', 'youthcare' ),
			'description'   => __( 'Supports a maximum of four widgets.', 'youthcare' ),
		);
		register_sidebar( $args );

	}
	add_action( 'widgets_init', 'yc_register_sidears' );

/**
 * Register Navigation Menu(s)
 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
 */

	function owc_menu_registrar() {
		$menus = array( 
			'primary'	=>		__( 'Primary Menu', 'youthcare' ),
			'footer'    =>      __('Footer Menu', 'youthcare')
		);
		register_nav_menus( $menus );
	}
	add_action( 'init', 'owc_menu_registrar' );

/**
 * Theme Supports
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 */
	/**
	 * Automatic Feed Links
	 * @link https://codex.wordpress.org/Automatic_Feed_Links
	 */
		add_theme_support( 'automatic-feed-links' );
	/**
	 * Title Tag
	 * @link https://codex.wordpress.org/Title_Tag
	 */
		add_theme_support( 'title-tag' );
	/**
	 * Custom Logo
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
		add_theme_support( 'custom-logo', array(
			'height'	=>	250, // @TODO Correct the logo height
			'width'		=>	110, // @TODO Correct the logo width
			'flex-height'	=>	true, // @TODO Is the logo flexible?
			'flex-width'	=>	true,
			'header-text'	=>	array( 'site-title', 'site-description' )
			) );
	/**
	 * Post Thumbnails
	 * @link https://codex.wordpress.org/Post_Thumbnails
	 */
		add_theme_support( 'post-thumbnails' );
		// Staff Thumbnails
		add_image_size( 'staff_thumb', 278, 300, true );
		add_image_size( 'event_home_feature', 450, 450, true );
		add_image_size( 'event_archive', 300, 300, true );
		add_image_size( 'twitter_card', 600, 330, true );

	/**
	 * HTML5 Support
	 * @link https://codex.wordpress.org/Theme_Markup
	 */
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	/**
	 * Phone Number Formatter
	 */
		function youthcare_phone_number( $field_id, $before = '', $after = '') {
			$phone_number_string = get_field( $field_id, 'options' );
			if($phone_number_string) {
				$area_code 	= substr( $phone_number_string, 0, 3);
				$local_code = substr( $phone_number_string, 3, 3);
				$res_code 	= substr( $phone_number_string, 6, 4);
				echo $before . $area_code . '.' . $local_code . '.' . $res_code . $after;
			}
		}

	/**
	 * Add Editor Stylesheet
	 * @link
	 */
	function youthcare_add_editor_stylesheet() {
	    add_editor_style( 'editor.css' );
	}
	add_action( 'admin_init', 'youthcare_add_editor_stylesheet' );

	/*  Add responsive container to embeds
	/* ------------------------------------ */ 
	function youthcare_embed_video( $html, $url, $attr ) {
		switch( parse_url($url)['host'] ) {
			case 'youtu.be':
			case 'www.youtu.be':
			case 'youtube.com':
			case 'www.youtube.com':
			case 'vimeo.com':
			case 'www.vimeo.com':
				return '<div class="video-container">' . $html . '</div>';
			case 'instagram.com':
			case 'www.instagram.com':
				return '<div class="instagram-container">' . $html . '</div>';
			case 'facebook.com':
			case 'www.facebook.com':
				return '<div class="facebook-container">' . $html . '</div>';
			default:
				return $html;
		}
	}
	 
	add_filter( 'embed_oembed_html', 'youthcare_embed_video', 10, 3 );
	add_filter( 'video_embed_html', 'youthcare_embed_video' );