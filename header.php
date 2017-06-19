<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php get_template_part( 'inc/sharing', 'og' ); ?>
		<?php get_template_part( 'inc/sharing', 'twitter' ); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php $header_template = (is_front_page()) ? 'home-slider' : 'nav'; ?>
		<header class="header-<?php echo $header_template; ?>">
			<?php get_template_part( 'inc/header', $header_template ); ?>
		</header>
		<main>