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
		<main id="main" class="content-area">
			<?php
				if ( have_posts() ) :
					$engine->display( 'content/author');
					the_posts_navigation( array(
						'prev_text' => '<span class="post-previous" aria-hidden="true">' . esc_html__( 'Older', 'camaraderie' ) . '</span>' . '<span class="post-title">Projects</span>',
						'next_text' => '<span class="post-next" aria-hiddent="true">' . esc_html__( 'Newer', 'camaraderie' ) . '</span>' . '<span class="post-title">Projects</span>',
					) );
				else :
					get_template_part('views/content/content', 'none');
				endif;
			?>
		</main>
	</section>
<?php $engine->display( 'footer' ); ?>