<section class="call-to-action">
	<div class="container">
		<div class="col-lg-12">
			<h3 class="cta-title"><?php the_field( 'cta_title', 'options' ); ?></h3>
			<p class="cta-text"><?php the_field( 'cta_text', 'options' ); ?></p>
			<?php if ( have_rows( 'cta_buttons', 'options' ) ): ?>
				<div class="cta-buttons">
					<?php while ( have_rows( 'cta_buttons', 'options' ) ):
						the_row();
						$btnColor = get_sub_field( 'cta_button_color', 'options' );
						$btnText = get_sub_field( 'cta_button_text', 'options' );
						$btnLink = get_sub_field( 'cta_button_link', 'options' );
						$btnIcon = '';
						if ( get_sub_field( 'cta_button_icon', 'options' ) ) {
							$btnIcon = '<i class="fa fa-' . get_sub_field( 'cta_button_icon', 'options' ) . '"></i>';
						}
						?>
						<a href="<?php echo $btnLink; ?>" class="btn-cta btn-md btn-cta-<?php echo $btnColor ?>"><?php echo $btnIcon; ?><?php echo $btnText; ?></a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>