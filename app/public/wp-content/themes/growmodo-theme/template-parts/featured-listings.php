<section class="featured-listings" style="padding: 4rem 2rem;">
    <h2>Featured Listings</h2>
    <div class="listings-grid">
        <?php if( have_rows('featured_listings') ): ?>
            <?php while( have_rows('featured_listings') ): the_row(); ?>
                <div class="listing-item">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('price'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
