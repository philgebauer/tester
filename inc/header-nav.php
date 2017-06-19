<header class="header-nav">
	<div class="title-banner">
		<?php get_template_part( 'inc/menu', 'header' ); ?>
		<div class="title-banner-container">
		<?php if ( is_singular() ): ?>
			<div class="title-banner-parallax" <?php echo ( has_post_thumbnail() ) ? 'style="background-image: url(\'' . get_the_post_thumbnail_url() . '\');"' : '' ; ?>></div>
			<h2 class="title-banner-text"><?php if ( !is_home() ) the_title(); ?></h2>
		<?php endif; ?>
		<?php if ( is_home() ): ?>
			<div class="title-banner-parallax"></div>
			<h2 class="title-banner-text"><?php echo esc_html( get_the_title( get_option( 'page_for_posts' ) ) ); ?></h2>
		<?php else: ?>
			<div class="title-banner-parallax"></div>
		<?php endif; ?>
		</div>
	</div>
</header>