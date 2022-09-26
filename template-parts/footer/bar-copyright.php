<?php global $nm_theme_options; ?>
<div class="copyright-section">
	<div class="nm-footer-bar-inner">
		<div class="nm-row">
			<div class="col-md-6">
				copyright here
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
