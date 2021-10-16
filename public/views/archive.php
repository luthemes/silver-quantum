<?php
/**
 * Silver Quantum ( archive.php )
 *
 * @package   Silver Quantum
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
	<section id="content" class="site-content">
		<div id="global-layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
			<main id="main" class="content-area">
				<?php
					if ( have_posts() ) :
				?>
					<header class="archive-header">
						<?php the_archive_title( '<h1 class="archive-title">', '</h1>'); ?>
					</header>
				<?php
					while ( have_posts() ) : the_post();
						$engine->display( 'content/page' );
					endwhile;
						the_posts_pagination();
					else :
						$engine->display( 'content/404/none' );
					endif;
				?>
			</main>
			<?php Benlumia007\Backdrop\Theme\Sidebar\display( 'sidebar', [ 'primary' ] ); ?>
		</div>
	</section>
<?php $engine->display( 'footer' ); ?>
