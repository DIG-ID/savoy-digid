<?php
	global $nm_theme_options;
	
	$meta_viewport = array( 'width=device-width', 'initial-scale=1.0', 'maximum-scale=1.0', 'user-scalable=no' );
	if ( wp_is_mobile() ) { $meta_viewport[] = 'viewport-fit=cover'; }
	$meta_viewport = apply_filters( 'nm_head_meta_viewport', $meta_viewport );
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="<?php echo esc_attr( 'footer-sticky-' . $nm_theme_options['footer_sticky'] ); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="<?php echo esc_attr( implode ( ', ', $meta_viewport ) ); ?>">
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?
		id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TB4JNL4');</script>
		<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TB4JNL4"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php if ( $nm_theme_options['page_load_transition'] ) : ?>
			<div id="nm-page-load-overlay" class="nm-page-load-overlay"></div>
		<?php endif; ?>

		<div class="nm-page-overflow">
			<div class="nm-page-wrap">
				<?php
				// Top bar
				if ( $nm_theme_options['top_bar'] ) {
					get_template_part( 'template-parts/header/header', 'top-bar' );
				}
				?>

				<div class="nm-page-wrap-inner">
					<?php
					// Header (or Elementor Pro header location)
					if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
						get_template_part( 'template-parts/header/header', 'content' );
					}
					?>
