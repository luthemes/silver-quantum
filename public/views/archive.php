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
<?php get_header(); ?>
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
						Benlumia007\Backdrop\Template\get_template_part( 'content/content', get_post_format() );
					endwhile;
						the_posts_pagination();
					else :
						Benlumia007\Backdrop\Template\get_template_part( 'content/content', 'none' );
					endif;
				?>
			</main>
			<?php Benlumia007\Backdrop\View\display( 'sidebar', [ 'primary' ] ); ?>
		</div>
	</section>
<?php get_footer(); ?>
