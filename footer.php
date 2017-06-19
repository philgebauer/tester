	</main>
	<?php get_template_part( 'inc/component', 'cta' ); ?>
	<footer class="layout-footer">
		<?php if( is_active_sidebar('footer') ): ?>
		<ul class="sidebar-footer">
			<?php dynamic_sidebar('footer'); ?>
		</ul>
		<?php endif; ?>
		<div class="footer-flex-row">
			<div class="footer-information">
				<div class="footer-company-name"><?php the_field( 'company_name', 'options' ); ?></div>
						<p class="footer-company-address"><?php the_field( 'company_address', 'options' ); ?></p>
						<div><a style="color: currentColor" href="tel:+1<?php the_field( 'company_phone', 'options'); ?>"><?php youthcare_phone_number( 'company_phone', 'p: ' ); ?></a></div>
						<div><?php youthcare_phone_number( 'company_fax', 'f: ' ); ?></div>
						<div><a href="mailto:<?php the_field( 'company_email', 'options' ); ?>"><?php the_field( 'company_email', 'options' ); ?></a></div>
						<?php if( get_field( 'social_links', 'options' ) ): ?>
						<div class="footer-sm-container">
						<?php while( have_rows( 'social_links', 'options' ) ): the_row(); ?>
							<a class="sm-link" href="<?php the_sub_field( 'social_link_url' ); ?>">
								<i class="sm-icon fa <?php the_sub_field( 'social_icon' ); ?>"></i>
							</a>
						<?php endwhile; ?>
						</div>
						<?php endif; ?>
			</div>
			<div class="footer-form">
				<?php if( get_field( 'newsletter_signup_form_id', 'options' )): ?>
					<?php echo do_shortcode('[gravityform id=' . get_field( 'newsletter_signup_form_id', 'options' ) . ' title=true description=false ajax=true tabindex=99]'); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="footer-menu">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_id'=>'footer-menu',
				'container_class' => 'menu-footer-menu-container',
				'menu_class' => 'footer-nav-menu' ) ); ?>
		</div>
	<div class="copyright-container">
		<div class="copyright-notice">
			&copy; <?php echo date('Y'); ?> <?php the_field( 'company_name', 'options' ); ?>. <?php _e( 'All rights reserved.', 'youthcare' ); ?>
		</div>
		<div class="credit-notice">
			 <?php _e( 'Powered by', 'youthcare' ); ?> <a href="https://w.org" rel="nofollow">WordPress</a>. <!-- <?php _e( 'Created by', 'youthcare' ); ?> <a href="https://rocketsquirrel.io" rel="nofollow">Rocket Squirrel.</a> -->
		</div>
	</footer>
	<?php wp_footer(); ?>
	<?php if ( get_field( 'google_analytics_id', 'options' ) )
				get_template_part( 'inc/analytics', 'google' ); ?>
	</body>
</html>
