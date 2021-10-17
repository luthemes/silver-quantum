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
    <?php if ( has_post_thumbnail() ) { ?>
        <picture class="post-thumbnail">
            <?php the_post_thumbnail( 'silver-quantum-medium-thumbnails' ); ?>
        </picture>
    <?php } ?>
    <div class="entry-content">
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
    </div>
</article>