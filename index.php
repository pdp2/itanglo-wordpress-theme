<?php get_header(); ?>

<main>
    <?php 
        while (have_posts()) {
            the_post(); ?>
            <article class="post">
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?> in <?php echo get_the_category_list(','); ?></p>
                </header>
                <?php if ( has_post_thumbnail() ) { ?>
                    <figure>
                        <?php the_post_thumbnail(); ?>
                        <figcaption><?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?></figcaption>
                    </figure>
                <?php }
                the_excerpt() ?>
                <p><a href="<?php the_permalink() ?>">Continue reading &raquo;</a></p>
            </article>
        <?php }

        echo paginate_links();
    ?>
</main>

<?php get_footer(); ?>