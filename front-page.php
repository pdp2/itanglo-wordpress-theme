<?php get_header(); ?>

<main class="itangloBlogPosts">
    <?php 
        while (have_posts()) {
            the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?> in <?php echo get_the_category_list(','); ?></div>
                <?php the_excerpt() ?>
				<p><a href="<?php the_permalink() ?>">Continue reading &raquo;</a></p>
            </article>
        <?php }
    ?>
</main>

<?php get_footer(); ?>