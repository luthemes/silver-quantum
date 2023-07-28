<?php
/**
 * Default single template
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */
?>
<section id="content" class="site-content m-18">
	<div id="global-layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
		<main id="main" class="content-area">
			<?php while( have_posts() ) : the_post(); ?>
				<?php Backdrop\View\display( 'entry/single' ); ?>
			<?php endwhile; ?>
			<?php comments_template(); ?>
		</main>
		<?php Backdrop\View\display( 'sidebar', 'primary', [ 'location' => 'primary' ] ); ?>
	</div>
</section>
