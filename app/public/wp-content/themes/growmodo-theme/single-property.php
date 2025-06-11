<?php
/**
 * Template Name: Single Property
 */

get_header(); ?>

<main class="single-property">
    <div class="container">
        <!-- Property Header -->
        <div class="property-header">
            <h1>Seaside Serenity Villa</h1>
            <div class="price">$1,250,000</div>
        </div>

        <!-- Property Gallery -->
        <div class="property-gallery">
            <!-- Thumbnail Strip -->
            <div class="thumbnail-strip">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-1.jpg" alt="Thumbnail 1" class="active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-2.jpg" alt="Thumbnail 2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-3.jpg" alt="Thumbnail 3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-4.jpg" alt="Thumbnail 4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-5.jpg" alt="Thumbnail 5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-6.jpg" alt="Thumbnail 6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-7.jpg" alt="Thumbnail 7">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-8.jpg" alt="Thumbnail 8">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/thumb-9.jpg" alt="Thumbnail 9">
            </div>

            <!-- Main Gallery -->
            <div class="main-gallery">
                <div class="gallery-grid">
                    <div class="gallery-item large">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/exterior.jpg" alt="Exterior View">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/properties/seaside-serenity/interior.jpg" alt="Interior View">
                    </div>
                </div>
                <div class="gallery-nav">
                    <button class="nav-button prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="nav-button next"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <!-- Property Details -->
        <div class="property-details">
            <div class="details-grid">
                <div class="detail-item">
                    <i class="fas fa-bed"></i>
                    <span>04</span>
                </div>
                <div class="detail-item">
                    <i class="fas fa-bath"></i>
                    <span>03</span>
                </div>
                <div class="detail-item">
                    <i class="fas fa-ruler-combined"></i>
                    <span>2,500 Square Feet</span>
                </div>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="property-content">
            <div class="content-grid">
                <!-- Left Column -->
                <div class="content-left">
                    <section class="description-section">
                        <h2>Description</h2>
                        <p>Welcome to your slice of paradise at the Seaside Serenity Villa. This magnificent beachfront estate combines luxury living with breathtaking ocean views, creating a perfect harmony of comfort and sophistication.</p>
                    </section>

                    <section class="features-section">
                        <h2>Key Features and Amenities</h2>
                        <ul class="features-list">
                            <li>Panoramic ocean views from the master bedroom and living areas</li>
                            <li>Gourmet kitchen with high-end appliances and custom cabinetry</li>
                            <li>Private infinity pool overlooking the ocean with outdoor patio</li>
                            <li>Smart home technology for lighting, security, and climate control</li>
                            <li>Spacious walk-in closets and luxury ensuite bathrooms</li>
                        </ul>
                    </section>
                </div>

                <!-- Right Column -->
                <div class="content-right">
                    <section class="inquiry-section">
                        <h2>Inquire About Seaside Serenity Villa</h2>
                        <form class="inquiry-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your Email">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label>Preferred Property</label>
                                <input type="text" value="Seaside Serenity Villa - 04, 03, 2,500ft" readonly>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea placeholder="Enter your Message here"></textarea>
                            </div>
                            <button type="submit" class="button primary">Send Your Message</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <section class="pricing-section">
            <h2>Comprehensive Pricing Details</h2>
            <p>A detailed breakdown of the costs associated with purchasing and maintaining this property. Take a look at what's involved.</p>
            
            <div class="pricing-grid">
                <div class="price-item">
                    <h3>Sale Price</h3>
                    <div class="price-amount">$1,250,000</div>
                    <div class="price-note">The final property value after negotiations and market analysis</div>
                </div>

                <div class="price-item">
                    <h3>Additional Fees</h3>
                    <div class="fee-list">
                        <div class="fee-item">
                            <div class="fee-details">
                                <span class="fee-label">HOA Fees</span>
                                <span class="fee-amount">$2,000</span>
                            </div>
                            <span class="fee-note">Monthly fee for community maintenance and shared amenities</span>
                        </div>
                        <div class="fee-item">
                            <div class="fee-details">
                                <span class="fee-label">Property Tax</span>
                                <span class="fee-amount">$750</span>
                            </div>
                            <span class="fee-note">Annual property tax based on current assessment</span>
                        </div>
                    </div>
                </div>

                <div class="price-item">
                    <h3>Monthly Costs</h3>
                    <div class="fee-list">
                        <div class="fee-item">
                            <div class="fee-details">
                                <span class="fee-label">Utilities</span>
                                <span class="fee-amount">$300</span>
                            </div>
                            <span class="fee-note">Estimated monthly costs for basic utilities</span>
                        </div>
                    </div>
                </div>

                <div class="price-item">
                    <h3>Total Initial Costs</h3>
                    <div class="fee-list">
                        <div class="fee-item">
                            <div class="fee-details">
                                <span class="fee-label">Down Payment</span>
                                <span class="fee-amount">$250,000</span>
                            </div>
                        </div>
                        <div class="fee-item">
                            <div class="fee-details">
                                <span class="fee-label">Closing Costs</span>
                                <span class="fee-amount">$12,500</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-item">
                    <h3>Monthly Expenses</h3>
                    <div class="fee-list">
                        <div class="fee-item">
                            <div class="fee-details">
                                <span class="fee-label">Monthly Total</span>
                                <span class="fee-amount">$4,500</span>
                            </div>
                            <span class="fee-note">Estimated total monthly cost including mortgage</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How do I secure the property on Estatein?</h3>
                    <p>Contact our team through the inquiry form or call us directly. We'll guide you through the process.</p>
                    <button class="read-more">Read More</button>
                </div>
                <div class="faq-item">
                    <h3>What documents do I need to verify property through Estatein?</h3>
                    <p>Standard documents include proof of identity, proof of income, and bank statements.</p>
                    <button class="read-more">Read More</button>
                </div>
                <div class="faq-item">
                    <h3>How can I contact an Estatein agent?</h3>
                    <p>You can reach us through the contact form, phone, or visit our office.</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="cta-content">
                <h2>Start Your Real Estate Journey Today</h2>
                <p>Your dream property is just a click away. Whether you're buying, selling, or exploring, we're here to guide you home.</p>
                <a href="#" class="button primary">Explore Properties</a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?> 