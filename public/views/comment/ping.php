<li>

	<header class="comment__meta pb-4">
		<?php Backdrop\Theme\Comment\display_author_link( [
			'class' => 'comment__author-link font-700 no-underline hover:underline focus:underline',
			'after' => '<br />',
		] ) ?>

		<?php Backdrop\Theme\Comment\display_permalink( [
			'text' => Backdrop\Theme\Comment\render_date( [
				'format' => sprintf(
				// Translators: Comment date + time format.
					esc_html__( '%1$s, %2$s', 'silver-quantum' ),
					get_option( 'date_format' ),
					get_option( 'time_format' )
				)
			] )
		] ) ?>
		<?php Backdrop\Theme\Comment\display_edit_link( [ 'before' => SilverQuantum\sep() ] ) ?>
	</header>

	<div class="comment__content mt-4">

		<?php if ( ! Backdrop\Theme\Comment\is_approved() ) : ?>

			<p class="comment__moderation">
				<?php esc_html_e( 'Your comment is awaiting moderation.', 'silver-quantum' ) ?>
			</p>

		<?php endif ?>

		<?php comment_text() ?>
	</div>

<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>
