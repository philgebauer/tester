<?php get_header(); ?>
<?php get_template_part( 'inc/component', 'programs-banner' ); ?>
<?php get_template_part( 'inc/loop', 'home' ); ?>
<?php if ( get_field( 'show_blog_roll_on_home', 'options' ) )
			get_template_part( 'inc/component', 'blog-roll' ); ?>
<?php get_template_part( 'inc/component', 'home-events' ) ?>
<?php get_footer(); ?>