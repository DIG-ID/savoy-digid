<section class="section-footer-content">
	<div class="nm-footer-bar-inner">
		<div class="nm-row">
			<div class="nm_column col-xs-12 col-md-4">
				<?php if ( isset( $nm_theme_options['footer_bar_logo'] ) && strlen( $nm_theme_options['footer_bar_logo']['url'] ) > 0 ) : ?>
					<?php
					$logo_src = ( is_ssl() ) ? str_replace( 'http://', 'https://', $nm_theme_options['footer_bar_logo']['url'] ) : $nm_theme_options['footer_bar_logo']['url'];
					$logo_alt_attr_escaped = ( isset( $nm_theme_options['footer_bar_logo']['title'] ) && strlen( $nm_theme_options['footer_bar_logo']['title'] ) > 0 ) ? 'alt="' . esc_attr( $nm_theme_options['footer_bar_logo']['title'] ) . '"' : '';
					?>
					<div class="nm-footer-bar-logo">
						<img src="<?php echo esc_url( $logo_src ); ?>"<?php echo $logo_alt_attr_escaped; ?> />
					</div>
				<?php endif; ?>
			</div>
			<div class="nm_column col-xs-12 col-md-5">
				<h3 class="footer-widget-title"><?php esc_html_e( 'Seiten', 'nm-framework' ); ?></h3>
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
			<div class="nm_column col-xs-12 col-md-3">
				<h3 class="footer-widget-title"><?php esc_html_e( 'Zahlungsarten', 'nm-framework' ); ?></h3>
				<div class="footer-payment-methods-wrapper">
					<figure>
						<svg xmlns="http://www.w3.org/2000/svg" width="63.119" height="39.012" viewBox="0 0 63.119 39.012"><defs><style>.a{fill:#ff5f00;}.b{fill:#eb001b;}.c{fill:#f79e1b;}</style></defs><g transform="translate(-17.913 -17.999)"><rect class="a" width="17.067" height="30.671" transform="translate(40.94 22.17)"/><path class="b" d="M42.024,37.5a19.471,19.471,0,0,1,7.45-15.335,19.506,19.506,0,1,0,0,30.67A19.471,19.471,0,0,1,42.024,37.5Z" transform="translate(0 0)"/><path class="c" d="M107.72,37.5A19.5,19.5,0,0,1,76.162,52.84a19.508,19.508,0,0,0,0-30.67A19.5,19.5,0,0,1,107.72,37.5Z" transform="translate(-26.688)"/><path class="c" d="M130.641,75.667V75.04h.254v-.128h-.645v.128h.253v.628Zm1.252,0V74.91h-.2l-.227.521-.228-.521h-.2v.757h.139V75.1l.214.493h.145l.213-.494v.573Z" transform="translate(-51.47 -26.076)"/></g></svg>
					</figure>
					<figure>
						<svg xmlns="http://www.w3.org/2000/svg" width="120.798" height="39.012" viewBox="0 0 120.798 39.012"><defs><style>.a{fill:#1434cb;}</style></defs><path class="a" d="M778.135,729.575,762.32,767.308H752L744.22,737.2c-.473-1.855-.883-2.534-2.32-3.315a40.863,40.863,0,0,0-9.629-3.208l.232-1.1h16.609a4.548,4.548,0,0,1,4.5,3.848l4.11,21.834,10.159-25.682Zm40.429,25.413c.042-9.959-13.771-10.507-13.676-14.956.03-1.354,1.319-2.793,4.14-3.161a18.412,18.412,0,0,1,9.623,1.689l1.714-8a26.232,26.232,0,0,0-9.13-1.673c-9.648,0-16.438,5.129-16.5,12.473-.062,5.432,4.846,8.463,8.544,10.268,3.8,1.849,5.081,3.036,5.067,4.69-.027,2.531-3.034,3.649-5.845,3.693a20.451,20.451,0,0,1-10.023-2.383l-1.769,8.266a29.587,29.587,0,0,0,10.855,2c10.255,0,16.963-5.065,16.994-12.91m25.477,12.32h9.028l-7.88-37.733h-8.333a4.442,4.442,0,0,0-4.154,2.768l-14.648,34.965H828.3l2.036-5.636h12.523Zm-10.891-13.37,5.138-14.167,2.957,14.167Zm-41.068-24.363-8.071,37.733H774.25l8.074-37.733Z" transform="translate(-732.271 -728.886)"/></svg>
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>
