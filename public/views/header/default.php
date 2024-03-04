<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php Backdrop\View\display( 'menu', 'primary', [ 'location' => 'primary' ] ); ?>
<div id="container" class="site-container lg:container xl:container bg-white">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'silver-quantum' ); ?></a>
	<header id="masthead" class="site-header">
	<div class="custom-image-header">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

			$image_src = $logo ? $logo[0] : get_header_image();
			$image_width = $logo ? $logo[1] : absint(get_custom_header()->width);
			$image_height = $logo ? $logo[2] : absint(get_custom_header()->height);
		?>

		<img alt="" src="<?php echo esc_url( $image_src ); ?>" width="<?php echo esc_attr( $image_width ); ?>" height="<?php echo esc_attr( $image_height ); ?>">

		<?php if ( ! $logo ) { ?>
			<div class="site-branding">
			<?php Backdrop\Theme\Site\display_site_title(); ?>
			<?php Backdrop\Theme\Site\display_site_description(); ?>
		</div>		
		<?php } ?>
	</div>
	</header>

