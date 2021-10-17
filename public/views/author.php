<?php
/**
 * Silver Quantum ( archive.php )
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
	<section id="content" class="site-content">
		<div id="global-layout" class="no-sidebar">
			<main id="main" class="content-area">
				<?php if ( ! is_front_page() ) { ?>
					<header class="archive-header">
						<?php the_archive_title( '<h1 class="archive-title">', '</h1>'); ?>
						<?php the_archive_description( '<h1 class="archive-description">', '</h1>'); ?>
					</header>
				<?php } ?>

				<?php if ( have_posts() ) : ?>
					<div class="loop">
						<ul class="grid">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php $engine->display( 'content/author' ); ?>
							<?php endwhile; ?>
						</ul>
						<?php the_posts_pagination(); ?>
					</div>
				<?php endif; ?>
			</main>
		</div>
	</section>
<?php $engine->display( 'footer' ); ?>
