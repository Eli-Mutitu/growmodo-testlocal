<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<main class="contact-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Get in Touch with Estatein</h1>
            <p>Welcome to Estatein's Contact Us page. We're here to assist you with any inquiries, requests, or feedback you may have. Whether you're looking to buy or sell property, explore investment opportunities, or simply want to connect, we're just a message away. Reach out to us, and let's start a conversation.</p>
        </div>
    </section>

    <!-- Contact Info Grid -->
    <section class="contact-info-grid">
        <div class="container">
            <div class="info-cards">
                <div class="info-card">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <p>info@estatein.com</p>
                </div>
                <div class="info-card">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p>+1 (555) 555-7890</p>
                </div>
                <div class="info-card">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <p>Main Headquarters</p>
                </div>
                <div class="info-card social">
                    <div class="social-icons">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="section-header">
                <h2>Let's Connect</h2>
                <p>We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein. Whether you're a prospective client, partner, or simply curious about our services, we're here to answer your questions and provide the assistance you need.</p>
            </div>

            <form class="contact-form" id="contactForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="inquiryType">Inquiry Type</label>
                        <select id="inquiryType" name="inquiryType" required>
                            <option value="">Select Inquiry Type</option>
                            <option value="buy">Buy Property</option>
                            <option value="sell">Sell Property</option>
                            <option value="rent">Rent Property</option>
                            <option value="invest">Investment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hearAboutUs">How Did You Hear About Us?</label>
                        <select id="hearAboutUs" name="hearAboutUs">
                            <option value="">Select</option>
                            <option value="social">Social Media</option>
                            <option value="search">Search Engine</option>
                            <option value="referral">Referral</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter your Message here..." required></textarea>
                </div>

                <div class="form-footer">
                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree with Terms of Use and Privacy Policy</label>
                    </div>
                    <button type="submit" class="primary-button">Send Your Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Office Locations Section -->
    <section class="office-locations">
        <div class="container">
            <h2>Discover Our Office Locations</h2>
            <p>Estatein is here to serve you across multiple locations. Whether you're looking to meet our team, discuss real estate opportunities, or simply drop by for a chat - we have our doors open for you. Find the Estatein office nearest to you below.</p>

            <div class="location-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="regional">Regional</button>
                <button class="filter-btn" data-filter="international">International</button>
            </div>

            <div class="office-grid">
                <div class="office-card">
                    <h3>Main Headquarters</h3>
                    <p class="address">123 Estatein Plaza, City Center, Metropolis</p>
                    <p class="description">Our main headquarters serves as the heart of Estatein. Located in the bustling city center, this office houses our core team and serves as a central hub for all our operations and client meetings.</p>
                    <div class="contact-details">
                        <div class="detail">
                            <i class="fas fa-envelope"></i>
                            <span>info@estatein.com</span>
                        </div>
                        <div class="detail">
                            <i class="fas fa-phone"></i>
                            <span>+1 (555) 555-7890</span>
                        </div>
                        <div class="detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Metropolis</span>
                        </div>
                    </div>
                    <a href="#" class="primary-button">Get Direction</a>
                </div>

                <div class="office-card">
                    <h3>Regional Office</h3>
                    <p class="address">456 Urban Avenue, Downtown District, Metropolis</p>
                    <p class="description">Estatein's presence extends to multiple regions, each with its own dynamic real estate landscape. Our regional offices ensure we provide localized expertise while maintaining the Estatein standard of excellence.</p>
                    <div class="contact-details">
                        <div class="detail">
                            <i class="fas fa-envelope"></i>
                            <span>info@estatein.com</span>
                        </div>
                        <div class="detail">
                            <i class="fas fa-phone"></i>
                            <span>+1 (555) 555-7890</span>
                        </div>
                        <div class="detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Metropolis</span>
                        </div>
                    </div>
                    <a href="#" class="primary-button">Get Direction</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <section class="image-gallery">
        <div class="container">
            <div class="gallery-header">
                <h2>Explore Estatein's World</h2>
                <p>Step inside the world of Estatein, where professionalism meets warmth, and expertise meets innovation. Our gallery offers a glimpse into our workspaces, our team, and the Estatein experience.</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item wide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-1.jpg" alt="Estatein Office Space">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-1.jpg" alt="Estatein Team">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-2.jpg" alt="Estatein Team">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting.jpg" alt="Client Meeting">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Start Your Real Estate Journey Today</h2>
                <p>Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to help. Take the first step towards your real estate goals with us.</p>
                <a href="#" class="primary-button">Explore Properties</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 