<?php global $nm_theme_options; ?>
<section class="section-footer-copyright">
	<div class="nm-footer-bar-inner">
		<div class="nm-row">
			<div class="col-md-6 col-copyright">
				<?php
				$display_social_icons = ( strpos( $nm_theme_options['footer_bar_content'], 'social' ) !== false ) ? true : false;
				$display_copyright_text = ( strpos( $nm_theme_options['footer_bar_content'], 'copyright' ) !== false ) ? true : false;
				$copyright_text = ( isset( $nm_theme_options['footer_bar_text'] ) && strlen( $nm_theme_options['footer_bar_text'] ) > 0 ) ? $nm_theme_options['footer_bar_text'] : '';
				if ( $nm_theme_options['footer_bar_text_cr_year'] ) :
					$copyright_text = sprintf( '&copy; %s %s', date( 'Y' ), $copyright_text );
				endif;
				?>
				<?php if ( ! $display_copyright_text ) : ?>
					<p class="nm-menu-item-copyright menu-item"><span><?php echo wp_kses_post( $copyright_text ); ?></span></p>
				<?php endif; ?>
			</div>
			<div class="col-md-6 col-social">
				<?php
				if ( $display_social_icons ) :
					echo nm_get_social_profiles( 'nm-footer-bar-social' ); // Args: $wrapper_class
				endif;
				?>
			</div>
		</div>
	</div>
</section>
