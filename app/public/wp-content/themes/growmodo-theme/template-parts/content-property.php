<?php
/**
 * Template part for displaying property cards
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('property-card'); ?>>
    <div class="property-image">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('property-thumbnail'); ?>
        <?php endif; ?>
    </div>

    <div class="property-content">
        <h3 class="property-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="property-location">
            <i class="fas fa-map-marker-alt"></i>
            <?php echo esc_html(get_post_meta(get_the_ID(), 'property_location', true)); ?>
        </div>

        <div class="property-features">
            <span class="feature">
                <i class="fas fa-bed"></i>
                <?php echo esc_html(get_post_meta(get_the_ID(), 'property_bedrooms', true)); ?> Beds
            </span>
            <span class="feature">
                <i class="fas fa-bath"></i>
                <?php echo esc_html(get_post_meta(get_the_ID(), 'property_bathrooms', true)); ?> Baths
            </span>
            <span class="feature">
                <i class="fas fa-ruler-combined"></i>
                <?php echo esc_html(get_post_meta(get_the_ID(), 'property_area', true)); ?> sqft
            </span>
        </div>

        <div class="property-footer">
            <div class="property-price">
                <?php
                $price = get_post_meta(get_the_ID(), 'property_price', true);
                echo '$' . number_format($price);
                ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="primary-button">View Property Details</a>
        </div>
    </div>
</article>