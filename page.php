<?php get_header(); ?>

<main>
    <?php 
        while (have_posts()) {
            the_post(); ?>
            <article class="post">
                <h2><?php the_title(); ?></h2>
                <?php the_content() ?>
            </article>
        <?php }
    ?>
</main>

<?php get_footer(); ?>