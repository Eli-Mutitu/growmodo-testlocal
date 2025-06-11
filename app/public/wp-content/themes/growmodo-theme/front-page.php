<?php get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="hero-section wavy-background">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Discover Your Dream<br>Property with Estatein</h1>
                <p>Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.</p>
                <div class="hero-buttons">
                    <a href="#" class="button outline">Learn More</a>
                    <a href="<?php echo esc_url(home_url('/properties')); ?>" class="button primary">Browse Properties</a>
                </div>
                
                <!-- Stats Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Happy Customers</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">10k+</span>
                        <span class="stat-label">Properties For Clients</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">16+</span>
                        <span class="stat-label">Years of Experience</span>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/building-hero.jpg" alt="Modern blue-lit building" class="main-building">
            </div>

            <!-- Circular Badge -->
            <div class="circular-badge">
                <svg viewBox="0 0 100 100" class="circular-text">
                    <defs>
                        <path id="circle" d="M 50,50 m -37,0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"/>
                    </defs>
                    <text>
                        <textPath href="#circle">
                            Discover Your Dream Property ✨
                        </textPath>
                    </text>
                </svg>
                <div class="arrow-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-up-right.svg" alt="Arrow" class="arrow-icon">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-grid">
            <a href="#" class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/home.svg" alt="Home icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-up-right.svg" alt="Arrow" class="arrow-icon">
                </div>
                <h3>Find Your Dream Home</h3>
            </a>

            <a href="#" class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/camera.svg" alt="Camera icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-up-right.svg" alt="Arrow" class="arrow-icon">
                </div>
                <h3>Unlock Property Value</h3>
            </a>

            <a href="#" class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/building.svg" alt="Building icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-up-right.svg" alt="Arrow" class="arrow-icon">
                </div>
                <h3>Effortless Property Management</h3>
            </a>

            <a href="#" class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sun.svg" alt="Sun icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-up-right.svg" alt="Arrow" class="arrow-icon">
                </div>
                <h3>Smart Investments, Informed Decisions</h3>
            </a>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section class="featured-properties">
        <div class="section-header">
            <div class="header-left">
                <div class="star-icon">
                    <i class="fas fa-star-of-life"></i>
                </div>
                <div class="title-wrapper">
                    <h2>Featured Properties</h2>
                </div>
            </div>
            <div class="header-right">
                <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. </p>
                <p>Click "View Details" for more information.</p>
                <a href="#" class="button secondary">View All Properties</a>
            </div>
        </div>

        <div class="property-slider">
            <div class="property-slider-container">
                <!-- Property Card 1 -->
                <div class="property-card">
                    <div class="property-image-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/properties/seaside-serenity.jpg'); ?>" alt="Seaside Serenity Villa">
                    </div>
                    <div class="property-content">
                        <h3>Seaside Serenity Villa</h3>
                        <p>A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood... <a href="#" class="read-more">Read More</a></p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 4-Bedroom</span>
                            <span><i class="fas fa-bath"></i> 3-Bathroom</span>
                            <span><i class="fas fa-home"></i> Villa</span>
                        </div>
                        <div class="property-footer">
                            <div class="price-wrapper">
                                <span class="price-label">Price</span>
                                <span class="price">$550,000</span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/single-property')); ?>" class="button primary">View Property Details</a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="property-card">
                    <div class="property-image-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/properties/metropolitan-haven.jpg'); ?>" alt="Metropolitan Haven">
                    </div>
                    <div class="property-content">
                        <h3>Metropolitan Haven</h3>
                        <p>A chic and fully-furnished 2-bedroom apartment with panoramic city views... <a href="#" class="read-more">Read More</a></p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 2-Bedroom</span>
                            <span><i class="fas fa-bath"></i> 2-Bathroom</span>
                            <span><i class="fas fa-home"></i> Villa</span>
                        </div>
                        <div class="property-footer">
                            <div class="price-wrapper">
                                <span class="price-label">Price</span>
                                <span class="price">$550,000</span>
                            </div>
                            <a href="#" class="button primary">View Property Details</a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="property-card">
                    <div class="property-image-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/properties/rustic-retreat.jpg'); ?>" alt="Rustic Retreat Cottage">
                    </div>
                    <div class="property-content">
                        <h3>Rustic Retreat Cottage</h3>
                        <p>An elegant 3-bedroom, 2.5-bathroom townhouse in a gated community... <a href="#" class="read-more">Read More</a></p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 3-Bedroom</span>
                            <span><i class="fas fa-bath"></i> 3-Bathroom</span>
                            <span><i class="fas fa-home"></i> Villa</span>
                        </div>
                        <div class="property-footer">
                            <div class="price-wrapper">
                                <span class="price-label">Price</span>
                                <span class="price">$550,000</span>
                            </div>
                            <a href="#" class="button primary">View Property Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-nav">
                <span>01</span> of <span>60</span>
                <button class="prev"><i class="fas fa-arrow-left"></i></button>
                <button class="next"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="section-header">
            <div class="header-left">
                <div class="star-icon">
                    <i class="fas fa-star-of-life"></i>
                </div>
                <div class="title-wrapper">
                    <h2>What Our Clients Say</h2>
                </div>
            </div>
            <div class="header-right">
                <p>Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
                <a href="#" class="button secondary">View All Testimonials</a>
            </div>
        </div>

        <div class="testimonials-slider">
            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Exceptional Service!</h3>
                    <p>Our experience with Estatein was outstanding. Their team's dedication and professionalism made finding our dream home a breeze. Highly recommended!</p>
                    <div class="client-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/wade-warren.jpg" alt="Wade Warren" class="client-image">
                        <div class="client-details">
                            <span class="name">Wade Warren</span>
                            <span class="location">USA, California</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Efficient and Reliable</h3>
                    <p>Estatein provided us with top-notch service. They helped us sell our property quickly at an optimal price. We couldn't be happier with the result!</p>
                    <div class="client-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/emilie-thomson.jpg" alt="Emilie Thomson" class="client-image">
                        <div class="client-details">
                            <span class="name">Emilie Thomson</span>
                            <span class="location">USA, Florida</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Trusted Advisors</h3>
                    <p>The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Trust them for your next home!</p>
                    <div class="client-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/john-mans.jpg" alt="John Mans" class="client-image">
                        <div class="client-details">
                            <span class="name">John Mans</span>
                            <span class="location">USA, Nevada</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-controls">
                <button class="prev-slide"><i class="fas fa-arrow-left"></i></button>
                <div class="slide-numbers">
                    <span class="current">01</span>
                    <span class="total">/ 12</span>
                </div>
                <button class="next-slide"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="section-header">
            <div class="header-left">
                <div class="star-icon">
                    <i class="fas fa-star-of-life"></i>
                </div>
                <div class="title-wrapper">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="header-right">
                <p>Find answers to common questions about the real estate process. Here's to provide clarity and expert guidance.</p>
                <a href="#" class="button secondary">View All FAQs</a>
            </div>
        </div>

        <div class="faq-slider">
            <div class="faq-grid">
                <!-- FAQ Item 1 -->
                <div class="faq-card">
                    <h3>How do I search for properties on Estatein?</h3>
                    <p>Learn how to use our user-friendly search tools to find properties that match your criteria.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-card">
                    <h3>What documents do I need to sell my property through Estatein?</h3>
                    <p>Find out about the necessary documentation required to list your property with us.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-card">
                    <h3>How can I contact an Estatein agent?</h3>
                    <p>Discover the different ways you can get in touch with our experienced agents.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

            <div class="slider-controls">
                <button class="prev-slide"><i class="fas fa-arrow-left"></i></button>
                <div class="slide-numbers">
                    <span class="current">01</span>
                    <span class="total">/ 12</span>
                </div>
                <button class="next-slide"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Start Your Real Estate Journey Today</h2>
            <p>Your dream property is just a click away. Whether you're looking for a home, an investment opportunity, or expert real estate advice, Estatein is here to help. Take the first step towards your real estate goals with confidence.</p>
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="button primary">Explore Properties</a>
        </div>
    </section>
</main>

<?php get_footer(); ?> 