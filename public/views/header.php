<?php
/**
 * Default Header
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'silver-quantum' ) ?></a>
<div id="masthead" class="top-navigation">
	<?php Backdrop\Theme\Menu\display( 'menu', [ 'primary' ] ); ?>
</div>
<div id="container" class="site-container">
	<header id="site-header" class="site-header header-image">
		<div class="site-branding">
			<?php SilverQuantum\Site\display_site_title(); ?>
			<?php SilverQuantum\Site\display_site_description(); ?>
		</div>
	</header>