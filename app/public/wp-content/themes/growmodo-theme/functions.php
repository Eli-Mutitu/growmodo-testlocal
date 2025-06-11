<?php
/**
 * Estatein functions and definitions
 */

add_action('wp_head', 'estatein_debug_theme_path');
function estatein_debug_theme_path() {
    if (current_user_can('administrator')) {
        echo '<!-- Theme Directory: ' . get_template_directory() . ' -->';
        echo '<!-- Theme URI: ' . get_template_directory_uri() . ' -->';
        echo '<!-- Property Image Path: ' . get_template_directory_uri() . '/assets/images/properties/seaside-serenity.jpg -->';
    }
}

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

/**
 * Enqueue scripts and styles.
 */
function estatein_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('estatein-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap', array(), null);

    // Enqueue main stylesheet
    wp_enqueue_style('estatein-style', get_stylesheet_uri(), array(), _S_VERSION);

    // Add About page styles
    if (is_page_template('page-about.php')) {
        wp_enqueue_style('estatein-about', get_template_directory_uri() . '/assets/css/about.css');
    }

    // Enqueue custom scripts
    wp_enqueue_script('estatein-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'estatein_scripts');

/**
 * Register custom post types
 */
function estatein_register_post_types() {
    // Register Property post type
    register_post_type('property', array(
        'labels' => array(
            'name' => __('Properties', 'estatein'),
            'singular_name' => __('Property', 'estatein'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-building',
        'rewrite' => array('slug' => 'properties'),
    ));

    // Register Testimonial post type
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'estatein'),
            'singular_name' => __('Testimonial', 'estatein'),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    ));
}
add_action('init', 'estatein_register_post_types');

/**
 * Register custom taxonomies
 */
function estatein_register_taxonomies() {
    // Register Property Type taxonomy
    register_taxonomy('property_type', 'property', array(
        'labels' => array(
            'name' => __('Property Types', 'estatein'),
            'singular_name' => __('Property Type', 'estatein'),
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'property-type'),
    ));

    // Register Property Feature taxonomy
    register_taxonomy('property_feature', 'property', array(
        'labels' => array(
            'name' => __('Property Features', 'estatein'),
            'singular_name' => __('Property Feature', 'estatein'),
        ),
        'hierarchical' => false,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'property-feature'),
    ));
}
add_action('init', 'estatein_register_taxonomies');

/**
 * Add theme support
 */
function estatein_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'estatein'),
        'footer' => __('Footer Menu', 'estatein'),
    ));
}
add_action('after_setup_theme', 'estatein_setup');

/**
 * Add custom image sizes
 */
function estatein_add_image_sizes() {
    add_image_size('property-thumbnail', 400, 300, true);
    add_image_size('property-large', 800, 600, true);
    add_image_size('testimonial-avatar', 80, 80, true);
}
add_action('after_setup_theme', 'estatein_add_image_sizes');

/**
 * Add custom meta boxes for properties
 */
function estatein_add_property_meta_boxes() {
    add_meta_box(
        'property_details',
        __('Property Details', 'estatein'),
        'estatein_property_details_callback',
        'property',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'estatein_add_property_meta_boxes');

/**
 * Property details meta box callback
 */
function estatein_property_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('estatein_property_details', 'property_details_nonce');

    // Get existing values
    $price = get_post_meta($post->ID, '_property_price', true);
    $bedrooms = get_post_meta($post->ID, '_property_bedrooms', true);
    $bathrooms = get_post_meta($post->ID, '_property_bathrooms', true);
    $area = get_post_meta($post->ID, '_property_area', true);

    // Output form fields
    ?>
    <p>
        <label for="property_price"><?php _e('Price', 'estatein'); ?></label>
        <input type="number" id="property_price" name="property_price" value="<?php echo esc_attr($price); ?>">
    </p>
    <p>
        <label for="property_bedrooms"><?php _e('Bedrooms', 'estatein'); ?></label>
        <input type="number" id="property_bedrooms" name="property_bedrooms" value="<?php echo esc_attr($bedrooms); ?>">
    </p>
    <p>
        <label for="property_bathrooms"><?php _e('Bathrooms', 'estatein'); ?></label>
        <input type="number" id="property_bathrooms" name="property_bathrooms" value="<?php echo esc_attr($bathrooms); ?>">
    </p>
    <p>
        <label for="property_area"><?php _e('Area (sqft)', 'estatein'); ?></label>
        <input type="number" id="property_area" name="property_area" value="<?php echo esc_attr($area); ?>">
    </p>
    <?php
}

/**
 * Save property details
 */
function estatein_save_property_details($post_id) {
    // Check if nonce is set
    if (!isset($_POST['property_details_nonce'])) {
        return;
    }

    // Verify nonce
    if (!wp_verify_nonce($_POST['property_details_nonce'], 'estatein_property_details')) {
        return;
    }

    // Save meta values
    if (isset($_POST['property_price'])) {
        update_post_meta($post_id, '_property_price', sanitize_text_field($_POST['property_price']));
    }
    if (isset($_POST['property_bedrooms'])) {
        update_post_meta($post_id, '_property_bedrooms', sanitize_text_field($_POST['property_bedrooms']));
    }
    if (isset($_POST['property_bathrooms'])) {
        update_post_meta($post_id, '_property_bathrooms', sanitize_text_field($_POST['property_bathrooms']));
    }
    if (isset($_POST['property_area'])) {
        update_post_meta($post_id, '_property_area', sanitize_text_field($_POST['property_area']));
    }
}
add_action('save_post_property', 'estatein_save_property_details');

function real_estate_dark_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'real-estate-dark'),
        'footer' => esc_html__('Footer Menu', 'real-estate-dark'),
    ));
}
add_action('after_setup_theme', 'real_estate_dark_setup');

function real_estate_dark_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('real-estate-dark-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);
    
    // Enqueue scripts
    wp_enqueue_script('real-estate-dark-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'real_estate_dark_enqueue_scripts');

// Enqueue Font Awesome
function estatein_enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4');
}
add_action('wp_enqueue_scripts', 'estatein_enqueue_font_awesome');

// Enqueue property gallery script
function estatein_enqueue_property_scripts() {
    if (is_singular('property')) {
        wp_enqueue_script('property-gallery', get_template_directory_uri() . '/js/property-gallery.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'estatein_enqueue_property_scripts');

// Handle property template redirect
function real_estate_dark_template_redirect() {
    if (is_post_type_archive('property') && isset($_GET['property'])) {
        include(get_template_directory() . '/single-property.php');
        exit();
    }
}
add_action('template_redirect', 'real_estate_dark_template_redirect');

// Enqueue scripts and styles
function real_estate_dark_scripts() {
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    
    // Enqueue contact.js only on contact page
    if (is_page_template('page-contact.php')) {
        wp_enqueue_script('real-estate-dark-contact', get_template_directory_uri() . '/js/contact.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'real_estate_dark_scripts');

class Custom_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if ($item->title === 'Contact Us') {
            return; // Skip the Contact Us menu item in the main navigation
        }
        
        $output .= '<li class="' . implode(' ', $item->classes) . '">';
        $output .= '<a href="' . $item->url . '">';
        $output .= $item->title;
        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        if ($item->title === 'Contact Us') {
            return; // Skip the Contact Us menu item in the main navigation
        }
        $output .= '</li>';
    }
}

// Add announcement bar close functionality
function add_announcement_bar_script() {
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.querySelector('.close-announcement');
            const announcementBar = document.querySelector('.announcement-bar');
            
            if (closeButton && announcementBar) {
                closeButton.addEventListener('click', function() {
                    announcementBar.style.display = 'none';
                });
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'add_announcement_bar_script');

// Add theme support for custom logo
function estatein_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 40,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'estatein_custom_logo_setup');

// Custom function to display the logo with site name
function estatein_logo() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $html = sprintf('<div class="logo-wrapper">');
    
    // Add the logo image
    if ($custom_logo_id) {
        $logo_image = wp_get_attachment_image($custom_logo_id, 'full', false, array(
            'class' => 'custom-logo',
            'alt'   => get_bloginfo('name'),
        ));
        $html .= $logo_image;
    } else {
        $html .= '<img src="' . get_template_directory_uri() . '/assets/images/estatein-logo.png" alt="Estatein Logo" class="custom-logo">';
    }
    
    // Add the site name
    $html .= '<span class="site-name">Estatein</span>';
    
    $html .= '</div>';
    return $html;
}

// Enqueue Google Fonts
function estatein_enqueue_fonts() {
    wp_enqueue_style(
        'urbanist',
        'https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'estatein_enqueue_fonts'); 