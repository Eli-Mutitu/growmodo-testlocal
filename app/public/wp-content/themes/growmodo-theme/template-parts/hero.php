<section class="hero-section" style="padding: 4rem 2rem; text-align: center;">
    <h1><?php the_field('hero_title'); ?></h1>
    <p><?php the_field('hero_description'); ?></p>
    <a href="<?php the_field('hero_button_url'); ?>" class="btn-cta">
        <?php the_field('hero_button_text'); ?>
    </a>
</section>
