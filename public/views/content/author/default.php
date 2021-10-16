<?php
/**
 * silver-quantum ( content-page.php )
 *
 * @package     silver-quantum
 * @copyright   Copyright (C) 2018-2019. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="archive-header">
        <?php the_archive_title( '<h1 class="archive-title">', '</h1>'); ?>
    </header>
    <div class="entry-content">
        <ul class="grid">
                <?php $posts_per_page = 3; ?>
                <?php $query = new WP_Query( [ 'post_type' => 'post', 'ignore_sticky_posts' => 1, 'posts_per_page' => $posts_per_page ] ); ?>
                
                <?php if ( $query->have_posts() ) { ?>
                    <?php while ( $query->have_posts() ) { ?>
                        <?php $query->the_post(); ?>
                            <li>
                                <?php the_post_thumbnail( 'silver-quantum-medium-thumbnails' ); ?>
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                                    <div class="entry-metadata">
                                        <?php Benlumia007\Backdrop\Theme\Entry\display_author(); ?>
                                        <?php Benlumia007\Backdrop\Theme\Entry\display_date(); ?>
                                        <?php Benlumia007\Backdrop\Theme\Entry\display_comments_link(); ?>
                                    </div>
                                </header>
                                <div class="entry-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </li>
                        <?php
                        }
                    }
                ?>
            </ul>
    </div>
</article>