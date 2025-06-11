<?php
/**
 * Template Name: Properties
 */

get_header(); ?>

<main class="properties-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Find Your Dream Property</h1>
            <p class="subtitle">Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life. With categories to suit every dreamer, your journey begins here.</p>
            
            <!-- Search Form -->
            <div class="search-form">
                <div class="search-input-wrapper">
                    <input type="text" placeholder="Search For A Property" class="search-input">
                    <button class="button primary">Find Property</button>
                </div>
                
                <div class="search-filters">
                    <div class="filter-group">
                        <select>
                            <option value="">Location</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select>
                            <option value="">Property Type</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select>
                            <option value="">Pricing Range</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select>
                            <option value="">Property Size</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select>
                            <option value="">Build Year</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="properties-section">
        <div class="container">
            <div class="section-header">
                <h2>Discover a World of Possibilities</h2>
                <p>Our portfolio of properties is as diverse as your dreams. Explore the following categories to find the perfect property that resonates with your vision of home.</p>
            </div>

            <div class="properties-grid">
                <!-- Property Card 1 -->
                <div class="property-card">
                    <div class="property-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity.jpg" alt="Seaside Serenity Villa">
                    </div>
                    <div class="property-content">
                        <span class="property-category">Coastal Escapes - Where Waves Beckon</span>
                        <h3>Seaside Serenity Villa</h3>
                        <p>Wake up to the soothing melody of waves. This beachfront villa offers... <a href="#" class="read-more">Read More</a></p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 4 Bedrooms</span>
                            <span><i class="fas fa-bath"></i> 3 Bathrooms</span>
                            <span><i class="fas fa-ruler-combined"></i> 2,500 Sq. Ft.</span>
                        </div>
                        <div class="property-footer">
                            <div class="price-wrapper">
                                <span class="price-label">Price</span>
                                <span class="price">$1,250,000</span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/single-property')); ?>" class="button primary">View Property Details</a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="property-card">
                    <div class="property-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/metropolitan-haven.jpg" alt="Metropolitan Haven">
                    </div>
                    <div class="property-content">
                        <span class="property-category">Urban Oasis - Life in the Heart of the City</span>
                        <h3>Metropolitan Haven</h3>
                        <p>Immerse yourself in the energy of the city. This modern apartment brings... <a href="#" class="read-more">Read More</a></p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 3 Bedrooms</span>
                            <span><i class="fas fa-bath"></i> 2 Bathrooms</span>
                            <span><i class="fas fa-ruler-combined"></i> 1,800 Sq. Ft.</span>
                        </div>
                        <div class="property-footer">
                            <div class="price-wrapper">
                                <span class="price-label">Price</span>
                                <span class="price">$850,000</span>
                            </div>
                            <a href="#" class="button primary">View Property Details</a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="property-card">
                    <div class="property-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/rustic-retreat.jpg" alt="Rustic Retreat Cottage">
                    </div>
                    <div class="property-content">
                        <span class="property-category">Countryside Charm - Escape to Nature's Embrace</span>
                        <h3>Rustic Retreat Cottage</h3>
                        <p>Find tranquility in the countryside. This charming cottage offers... <a href="#" class="read-more">Read More</a></p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 2 Bedrooms</span>
                            <span><i class="fas fa-bath"></i> 2 Bathrooms</span>
                            <span><i class="fas fa-ruler-combined"></i> 1,500 Sq. Ft.</span>
                        </div>
                        <div class="property-footer">
                            <div class="price-wrapper">
                                <span class="price-label">Price</span>
                                <span class="price">$350,000</span>
                            </div>
                            <a href="#" class="button primary">View Property Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="properties-navigation">
                <span>01 of 10</span>
                <div class="nav-buttons">
                    <button class="nav-button prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="nav-button next"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2>Let's Make it Happen</h2>
                <p>Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match. Don't wait - let's unlock an exciting journey together.</p>
            </div>

            <form class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" placeholder="Enter Phone Number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Preferred Location</label>
                        <select>
                            <option value="">Select Location</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Property Type</label>
                        <select>
                            <option value="">Select Property Type</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. of Bathrooms</label>
                        <select>
                            <option value="">Select No. of Bathrooms</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. of Bedrooms</label>
                        <select>
                            <option value="">Select No. of Bedrooms</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label>Budget</label>
                        <select>
                            <option value="">Select Budget</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label>Preferred Contact Method</label>
                        <div class="contact-method-options">
                            <div class="contact-method">
                                <input type="tel" placeholder="Enter Phone Number">
                                <input type="radio" name="contact_method" value="phone">
                            </div>
                            <div class="contact-method">
                                <input type="email" placeholder="Enter Your Email">
                                <input type="radio" name="contact_method" value="email">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label>Message</label>
                        <textarea placeholder="Enter your Message here"></textarea>
                    </div>
                </div>

                <div class="form-footer">
                    <label class="checkbox-label">
                        <input type="checkbox">
                        <span>I agree with Terms of Use and Privacy Policy</span>
                    </label>
                    <button type="submit" class="button primary">Send Your Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Start Your Real Estate Journey Today</h2>
                <p>Your dream property is just a click away. Whether you're buying, selling, or exploring, we're here to guide you home.</p>
                <a href="#" class="button primary">Explore Properties</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 