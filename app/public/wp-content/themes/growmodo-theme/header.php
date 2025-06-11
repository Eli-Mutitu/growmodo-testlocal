<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="announcement-bar">
    <p>✨ Discover Your Dream Property with Estatein <a href="#">Learn More</a></p>
    <button class="close-announcement">×</button>
</div>

<header class="site-header">
    <div class="header-container">
        <div class="logo-container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo estatein_logo(); ?>
            </a>
        </div>

        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
                'container_class' => 'primary-menu-container',
                'menu_class' => 'primary-menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker' => new Custom_Nav_Walker()
            ));
            ?>
        </nav>

        <div class="header-actions">
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="contact-button">Contact Us</a>
        </div>
    </div>
</header>

<div id="content" class="site-content"> 