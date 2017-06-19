<meta property="og:url" content="<?php echo home_url(add_query_arg(array(),$wp->request)); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo ( !is_front_page() && $post ) ? get_bloginfo('name') . ' - ' . get_the_title( $post->ID ) : get_bloginfo( 'name' ); ?>" />
		<meta property="og:description" content="<?php echo ( get_field( 'sharing_description' ) ) ? get_field( 'sharing_description' ) : get_field( 'facebook_default_description', 'options' ); ?>" />
		<meta property="fb:app_id" content="<?php the_field( 'facebook_app_id', 'options' ); ?>" />
<?php if ( !is_archive() || has_post_thumbnail( $post->ID ) ) : ?>
		<meta property="og:image" content="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium_large' )[0]; ?>" />
<?php else: ?>
		<meta name="og:image" content="<?php the_field( 'facebook_default_image', 'options' ); ?>" />
<?php endif; ?>