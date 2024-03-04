<section id="content" class="site-content">
	<main id="main" class="content-area">
		<header class="archive-header">
			<?php
			the_archive_title( '<h1 class="archive-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>
		<section class="archive-content">
			<p><?php echo esc_html__( 'It looks like you stumbled upon a page that does not exist. Perhaps rolling the dice with a search might help.', 'silver-quantum' ); ?></p>
			<?php get_search_form(); ?>
		</section>
	</main>
</section>
