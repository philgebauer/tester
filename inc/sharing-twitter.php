<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="<?php get_field( 'twitter_username', 'options' ); ?>" />
		<meta name="twitter:url" content="<?php echo home_url(add_query_arg(array(),$wp->request)); ?>">
		<meta name="twitter:title" content="<?php echo ( !is_front_page() && $post ) ? get_bloginfo('name') . ' - ' . get_the_title( $post->ID ) : get_bloginfo( 'name' ); ?>" />
		<meta name="twitter:description" content="<?php echo ( get_field( 'sharing_description' ) ) ? get_field( 'sharing_description' ) : get_field( 'twitter_default_description', 'options' ); ?>" />
		<meta name="twitter:text:description" content="<?php echo ( get_field( 'sharing_description' ) ) ? get_field( 'sharing_description' ) : get_field( 'twitter_default_description', 'options' ); ?>" />
<?php if ( !is_archive() || has_post_thumbnail( $post->ID ) ) : ?>
		<meta name="twitter:image" content="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'twitter_card' )[0]; ?>" />
<?php else: ?>
		<meta name="twitter:image" content="<?php the_field( 'twitter_default_image', 'options' ); ?>" />
<?php endif; ?>