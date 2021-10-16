<?php
/**
 * Silver Quantum ( single.php )
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
					while ( have_posts() ) : the_post();
						$engine->display( 'content/single' );
					endwhile;
						the_post_navigation( [
							'next_text' => '<span class="post-next" aria-hidden="true">' . esc_html__( 'Next', 'silver-quantum' ) . '</span><span class="post-title">%title</span>',
							'prev_text' => '<span class="post-previous" aria-hidden="true">' . esc_html__( 'Previous', 'silver-quantum' ) . '</span><span class="post-title">%title</span>',
						] );
						comments_template();
				?>
			</main>
			<?php Benlumia007\Backdrop\Theme\Sidebar\display( 'sidebar', [ 'primary' ] ); ?>
		</div>
	</section>
<?php $engine->display( 'footer' ); ?>