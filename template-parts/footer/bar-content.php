<section class="section-footer-content">
	<div class="nm-footer-bar-inner">
		<div class="nm-row">
			<div class="nm_column ">
				<div class="nm-footer-bar-logo">
					<img src="<?php echo esc_url( $logo_src ); ?>"<?php echo $logo_alt_attr_escaped; ?> />
				</div>
			</div>
			<div class="nm_column ">
				<ul id="nm-footer-bar-menu" class="menu">
					<?php
					// Footer menu
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'container'      => false,
							'fallback_cb'    => false,
							'items_wrap'     => '%3$s',
						),
					);
					?>
				</ul>
			</div>
			<div class="nm_column ">
				visa and master card
			</div>
		</div>
	</div>
</section>
