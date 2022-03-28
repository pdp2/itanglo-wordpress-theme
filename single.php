<?php get_header(); ?>

<main class="itangloBlogPosts">
    <?php 
        while (have_posts()) {
            the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <div class="itangloBlogPostMeta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?> in <?php echo get_the_category_list(','); ?></div>
                <?php the_content() ?>
            </article>
        <?php }
    ?>
</main>

<?php get_footer(); ?>