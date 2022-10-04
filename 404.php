<?php get_header(); ?>

<div class="nm-page-not-found">
	<div class="nm-row">
		<div class="col-xs-12 not-found-wrapper">
			<h2><?php esc_html_e( 'Ups ... du hast es kaputt gemacht!', 'nm-framework' ); ?></h2>
			<hr>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/DominicStricker-404-illustration.svg" alt="404 illustration">
			<p><?php esc_html_e( 'Nur ein Scherz, mach dir keine Sorgen.
Diese Seite wurde nicht gefunden.', 'nm-framework' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button"><i class="nm-font nm-font-arrow-left"></i> <?php esc_html_e( 'zur statseite', 'nm-framework' ); ?></a>
		</div>
	</div>
</div>

<?php 
global $nm_theme_options;
if ( $nm_theme_options['page_not_found_show_products'] ) :
	?>
	<div class="nm-page-not-found-products">
		<div class="nm-row">
			<div class="col-xs-12">
				<h2 class="nm-page-not-found-products-heading"><?php esc_html_e( 'Featured products', 'woocommerce' ); ?></h2>
				<?php
				global $woocommerce_loop;
				$woocommerce_loop['columns_medium'] = '4';
				$shortcode = apply_filters( 'nm_page_not_found_shortcode', '[featured_products per_page="4" columns="4"]' );
				echo do_shortcode( $shortcode );
				?>
			</div>
		</div>
	</div>
	<?php
endif;

get_footer();
