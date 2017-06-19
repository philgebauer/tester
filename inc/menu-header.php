<div class="header-menu">
			<div>
				<?php the_custom_logo(); ?>
			</div>
			<nav>	
<?php wp_nav_menu( array(
	'theme_location' => 'primary',
	'menu_id'=>'primary-menu',
	'container_class' => 'primary-menu',
	'menu_class' => 'primary-menu',
	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><a class="btn-md btn-red" href="' . home_url( '/donate' ) . '">' . __( 'Donate', 'youthcare' ) . '</a></li></ul>',
	'depth'	=> 2
) ); ?>
			</nav>
		</div>