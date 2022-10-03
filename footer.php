<?php
	global $nm_theme_options, $nm_globals;
?>
						</div> <!-- .nm-page-wrap-inner -->
				</div> <!-- .nm-page-wrap -->
				<footer id="nm-footer" class="nm-footer">
					<?php
						get_template_part( 'template-parts/footer/footer', 'custom' );
					?>
					<?php
					// Footer widgets
					/*if ( is_active_sidebar( 'footer' ) ) {
						get_template_part( 'template-parts/footer/footer', 'widgets' );
					}*/
					?>
					<?php
					// Footer bar (or Elementor Pro footer location)
					/*if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
						get_template_part( 'template-parts/footer/footer', 'bar' );
					}*/
					?>
				</footer>
				<?php 
				// Mobile menu
				get_template_part( 'template-parts/navigation/navigation', 'mobile' );
				?>
				<?php
				// Cart panel
				if ( $nm_globals['cart_panel'] ) {
					get_template_part( 'template-parts/woocommerce/cart-panel' );
				}
				?>
				<?php
				// Login panel
				if ( $nm_globals['login_popup'] && ! is_user_logged_in() && ! is_account_page() ) {
					get_template_part( 'template-parts/woocommerce/login' );
				}
				?>
				<div id="nm-page-overlay"></div>
				<div id="nm-quickview" class="clearfix"></div>
				<?php wp_footer(); // WordPress footer hook ?>
		</div> <!-- .nm-page-overflow -->
		<a id="button-btt">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 352c-8.188 0-16.38-3.125-22.62-9.375L224 173.3l-169.4 169.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25C432.4 348.9 424.2 352 416 352z"/></svg>
		</a>
	</body>
</html>
