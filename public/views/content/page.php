<?php
/**
 * Default content/default template
 *
 * @package   Creativity
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/creativity
 */
?>
<section id="content" class="site-content clear">
	<div id="global-layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
		<main id="main" class="content-area">
			<?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
					<?php Backdrop\View\display( 'entry/page' ); ?>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php endif; ?>
		</main>
		<?php Backdrop\View\display( 'sidebar', 'primary', [ 'location' => 'primary' ] ); ?>
	</div>
</section>
