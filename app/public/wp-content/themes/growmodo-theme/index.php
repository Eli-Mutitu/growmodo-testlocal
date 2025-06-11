<?php
/**
 * index.php - Fallback for all pages if no other template matches
 */
get_header();
?>

<main class="site-main" style="padding: 4rem 2rem;">
    <?php if ( is_front_page() ) : ?>
        <?php get_template_part('template-parts/hero'); ?>
        <?php get_template_part('template-parts/featured-listings'); ?>
        <?php get_template_part('template-parts/choose-us'); ?>
        <?php get_template_part('template-parts/testimonials'); ?>
        <?php get_template_part('template-parts/cta-section'); ?>
    <?php else : ?>
        <h1><?php single_post_title(); ?></h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile; endif; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>