<section id = "site-content">
    <article class = "<?php if (is_sticky()) { ?> sticky <?php } ?>" id = "post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h3 class = "entry-title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php comments_template(); ?>
    </article>
</section>