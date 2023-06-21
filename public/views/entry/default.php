<?php
/**
 * Default page/default template
 *
 * @package   Succotash
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<picture class="post-thumbnail">
			<source media="(max-width: 768px)" srcset="<?php the_post_thumbnail_url( 'creativity-medium' ); ?>">
			<?php the_post_thumbnail( 'creativity-small' ); ?>
		</picture>
	<?php } ?>
	<header class="entry-header">
		<?php Backdrop\Theme\Entry\display_title(); ?>
		<div class="entry-metadata">
			<img class="svg-author" src="<?php echo esc_url( get_parent_theme_file_uri( 'public/svg/blog-icons/user.svg' ) ); ?>" /> <?php Backdrop\Theme\Entry\display_author(); ?>
			<img class="svg-date" src="<?php echo esc_url( get_parent_theme_file_uri( 'public/svg/blog-icons/calendar.svg' ) ); ?>" /> <?php Backdrop\Theme\Entry\display_date(); ?>
			<img class="svg-comment" src="<?php echo esc_url( get_parent_theme_file_uri( 'public/svg/blog-icons/comment.svg' ) ); ?>" /> <?php Backdrop\Theme\Entry\display_comments_link(); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
