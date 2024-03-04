<li id="comment-<?php comment_ID(); ?>" class="comments">

	<header class="comment__meta pb-4">
		<?php Backdrop\Theme\Comment\display_parent_link( [
			// Translators: %s is the parent comment link.
			'text'   => __( 'In reply to %s', 'silver-quantum' ),
			'depth'  => 3,
			'class'  => 'comment__parent-link inline-block mb-2',
			'after'  => '<br /></div>',
			'before' => sprintf(
				'<div class="comment__parent text-sm">%s',
				( new SilverQuantum\Tools\Svg )->render( 'caret-right-solid' )
			)
		] ) ?>

		<?php echo get_avatar( $data->comment, $data->args['avatar_size'], '', '', [
			'class' => 'comment__avatar mr-4 rounded-full'
		] ) ?>

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
		<?php Backdrop\Theme\Comment\display_reply_link( [ 'before' => SilverQuantum\sep() ] ) ?>
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
