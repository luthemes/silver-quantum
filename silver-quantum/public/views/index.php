<?php
/**
 * Main Template File - index.php
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */
?>
<?php $engine = Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
    <section id="content" class="site-content">
        <div id="global-layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
            <main id="main" class="content-area">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php $engine->display( 'content' ); ?>
                    <?php endwhile; ?>
                        <?php the_posts_pagination(); ?>
                    <?php else : ?>
                        <?php $engine->display( 'content/404/none' ); ?>
                    <?php endif; ?>
            </main>
            <?php Backdrop\Theme\Sidebar\display( 'sidebar', [ 'primary' ] ); ?>
        </div>
    </section>
<?php $engine->display( 'footer' ); ?>