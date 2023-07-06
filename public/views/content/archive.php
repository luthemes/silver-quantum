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
<section id="content" class="site-content">
	<main id="main" class="content-area">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<?php
				the_archive_title( '<h1 class="archive-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
			<div class="loop">
				<ul class="grid-items grid-col-3">
					<?php while( have_posts() ) : the_post(); ?>
						<?php Backdrop\View\display( 'entry/archive' ); ?>
					<?php endwhile; ?>
				</ul>
				<?php the_posts_pagination(); ?>
			</div>
		<?php endif; ?>
	</main>
</section>
