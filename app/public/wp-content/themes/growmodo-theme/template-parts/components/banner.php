<?php
/**
 * Template part for displaying page banner
 *
 * @param string $title Banner title
 * @param string $description Banner description
 */

$title = get_field('banner_title') ?: get_the_title();
$description = get_field('banner_description');
?>

<section class="banner-section wavy-background">
    <div class="banner-content">
        <h1><?php echo esc_html($title); ?></h1>
        <?php if ($description) : ?>
            <div class="body-large"><?php echo wp_kses_post($description); ?></div>
        <?php endif; ?>
    </div>
</section> 