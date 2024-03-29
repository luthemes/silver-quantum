<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<picture class="post-thumbnail">
			<source media="(max-width: 768px)" srcset="<?php the_post_thumbnail_url( 'silver-quantum-medium' ); ?>">
			<?php the_post_thumbnail( 'silver-quantum-small' ); ?>
		</picture>
	<?php } ?>
	<header class="entry-header text-center">
		<?php Backdrop\Theme\Entry\display_title(); ?>
		<div class="entry-metadata">
			<?php Backdrop\Theme\Entry\display_author(); ?>
			<?php Backdrop\Theme\Entry\display_date( [ 'before' => SilverQuantum\sep() ] ); ?>
			<?php Backdrop\Theme\Entry\display_comments_link( [ 'before' => SilverQuantum\sep() ] ); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
