<section id="content" class="site-content m-18">
	<div id="global-layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'right-sidebar' ) ); ?>">
		<main id="main" class="content-area">
			<?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
					<?php Backdrop\View\display( 'entry/page' ); ?>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php endif; ?>
		</main>
		<?php Backdrop\View\display( 'sidebar', 'custom', [ 'location' => 'custom' ] ); ?>
	</div>
</section>
