<?php
/**
 * silver-quantum ( content.php )
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<?php printf( '<span class="sticky-post">%1$s</span>', esc_html__( 'Featured', 'silver-quantum' ) ); ?>
		<?php } ?>
		<?php Benlumia007\Backdrop\Theme\Entry\display_title(); ?>
		<div class="entry-metadata">
			<?php Benlumia007\Backdrop\Theme\Entry\display_author(); ?>
			<?php Benlumia007\Backdrop\Theme\Entry\display_date(); ?>
			<?php Benlumia007\Backdrop\Theme\Entry\display_comments_link(); ?>
		</div>
	</header>
	<div class="post-thumbnails">
		<?php $size = 'left-sidebar' === get_theme_mod( 'global_layout', 'left-sidebar' ) ? 'medium' : 'large'; ?>
		<?php the_post_thumbnail( "silver-quantum-{$size}-thumbnails"); ?>
	</div>
	<div class="entry-excerpt">
		<?php the_excerpt(); ?>
	</div>
</article>
