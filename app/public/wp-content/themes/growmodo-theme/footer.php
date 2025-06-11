<?php
/**
 * The template for displaying the footer
 */
?>
</div><!-- #content -->

<footer class="site-footer">
    <div class="footer-container">
        <!-- Top Section -->
        <div class="footer-top">
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/estatein-logo.svg" alt="Estatein Logo" />
                <span class="footer-logo-text">Estatein</span>
            </div>
            <div class="footer-subscribe">
                <input type="email" placeholder="Enter your email" class="footer-email-input" />
                <button type="submit" class="footer-submit-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/send-icon.svg" alt="Send" />
                </button>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="footer-nav">
            <div class="footer-nav-column">
                <h4>Properties</h4>
                <ul>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">New Listings</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Valuation History</a></li>
                </ul>
            </div>
            <div class="footer-nav-column">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Our Works</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>
            <div class="footer-nav-column">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-nav-column">
                <h4>Contact</h4>
                <ul>
                    <li><a href="#">Our Offices</a></li>
                    <li><a href="#">Online Form</a></li>
                    <li><a href="#">Negotiations</a></li>
                    <li><a href="#">Property Management</a></li>
                    <li><a href="#">Strategic Planning</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="footer-bottom">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> Estatein. All rights reserved.
            </div>
            <div class="social-links">
                <a href="#" class="social-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt="Facebook" />
                </a>
                <a href="#" class="social-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/linkedin.svg" alt="LinkedIn" />
                </a>
                <a href="#" class="social-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt="Twitter" />
                </a>
                <a href="#" class="social-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube.svg" alt="YouTube" />
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 