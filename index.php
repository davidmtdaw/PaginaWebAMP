<?php get_header(); ?>

<main>
    <h2>Bienvenido a <?php bloginfo('name'); ?></h2>
    <p><?php bloginfo('description'); ?></p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
