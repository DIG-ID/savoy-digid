<?php global $nm_theme_options; ?>
<div class="copyright-section">
	<div class="nm-footer-bar-inner">
		<div class="nm-row">
			<div class="col-md-6">
			<?php
				$copyright_text = ( isset( $nm_theme_options['footer_bar_text'] ) && strlen( $nm_theme_options['footer_bar_text'] ) > 0 ) ? $nm_theme_options['footer_bar_text'] : '';
				if ( $nm_theme_options['footer_bar_text_cr_year'] ) {
					$copyright_text = sprintf( '&copy; %s %s', date( 'Y' ), $copyright_text );
			} ?>
			 <?php if ( ! $display_copyright_text ) : ?>
				<p class="nm-menu-item-copyright menu-item"><span><?php echo wp_kses_post( $copyright_text ); ?></span></p>
			<?php endif; ?>
			</div>
			<div class="col-md-6">
				<?php
				$display_social_icons = ( strpos( $nm_theme_options['footer_bar_content'], 'social' ) !== false ) ? true : false;
				if ( $display_social_icons ) :
					echo nm_get_social_profiles( 'nm-footer-bar-social' ); // Args: $wrapper_class
				endif;
				?>
			</div>
		</div>
	</div>
</div>
