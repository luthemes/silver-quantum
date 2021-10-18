<?php
/**
 * Silver Quantum ( page.php )
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
		<div id="global-layout" class="left-sidebar">
			<main id="main" class="content-area">
				<?php
					while ( have_posts() ) : the_post();
						$engine->display( 'content/page' );
					endwhile;
						comments_template();
				?>
			</main>
			<?php Benlumia007\Backdrop\Theme\Sidebar\display( 'sidebar', [ 'secondary' ] ); ?>
		</div>
	</section>
<?php $engine->display( 'footer' ); ?>