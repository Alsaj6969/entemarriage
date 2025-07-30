<?php
/**
 * EnteMarriage Theme Functions
 * Everything is editable through WordPress admin
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function kmtheme_setup() {
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
        'primary' => __('Primary Menu', 'entemarriage-theme'),
        'footer' => __('Footer Menu', 'entemarriage-theme'),
    ));
}
add_action('after_setup_theme', 'kmtheme_setup');

// Enqueue scripts and styles
function kmtheme_scripts() {
    wp_enqueue_style('kmtheme-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
    
    // Only enqueue tabs.js if the file exists
    $tabs_js_path = get_template_directory_uri() . '/js/tabs.js';
    if (file_exists(get_template_directory() . '/js/tabs.js')) {
        wp_enqueue_script('kmtheme-tabs', $tabs_js_path, array(), filemtime(get_template_directory() . '/js/tabs.js'), true);
    }
}
add_action('wp_enqueue_scripts', 'kmtheme_scripts');

// Register custom page templates
function kmtheme_register_page_templates($templates) {
    $templates['template-register.php'] = 'Registration Page';
    $templates['template-login.php'] = 'Login Page';
    $templates['template-dashboard.php'] = 'User Dashboard';
    $templates['template-profile.php'] = 'My Profile';
    $templates['template-view-profile.php'] = 'View Other Profile';
    $templates['template-matches.php'] = 'Matches';
    $templates['template-search.php'] = 'Search';
    $templates['template-notifications.php'] = 'Notifications';
    $templates['template-menu.php'] = 'Menu';
    $templates['template-admin.php'] = 'Admin Panel';
    return $templates;
}
add_filter('theme_page_templates', 'kmtheme_register_page_templates');

// Add comprehensive Customizer support for all editable content
function kmtheme_customize_register($wp_customize) {
    
    // Header Settings
    $wp_customize->add_section('kmtheme_header_section', array(
        'title' => __('Header Settings', 'entemarriage-theme'),
        'priority' => 20,
    ));
    
    // Top Bar Contact Info
    $wp_customize->add_setting('kmtheme_phone_number', array(
        'default' => '+91 9544146660',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_phone_number', array(
        'label' => __('Phone Number', 'entemarriage-theme'),
        'section' => 'kmtheme_header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('kmtheme_email', array(
        'default' => 'info@entemarriage.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('kmtheme_email', array(
        'label' => __('Email Address', 'entemarriage-theme'),
        'section' => 'kmtheme_header_section',
        'type' => 'email',
    ));
    
    // Logo and Branding
    $wp_customize->add_setting('kmtheme_site_logo', array(
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'kmtheme_site_logo', array(
        'label' => __('Site Logo', 'entemarriage-theme'),
        'section' => 'kmtheme_header_section',
        'settings' => 'kmtheme_site_logo',
    )));
    
    $wp_customize->add_setting('kmtheme_site_name', array(
        'default' => 'EnteMarriage',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_site_name', array(
        'label' => __('Site Name', 'entemarriage-theme'),
        'section' => 'kmtheme_header_section',
        'type' => 'text',
    ));
    
    // Hero Section Settings
    $wp_customize->add_section('kmtheme_hero_section', array(
        'title' => __('Hero Section', 'entemarriage-theme'),
        'priority' => 25,
    ));
    
    $wp_customize->add_setting('kmtheme_hero_title', array(
        'default' => 'Join the best Kerala Matrimonial – Find Your Perfect Match Today!',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_hero_title', array(
        'label' => __('Hero Title', 'entemarriage-theme'),
        'section' => 'kmtheme_hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('kmtheme_hero_subtitle', array(
        'default' => 'Make your aspirations a reality – register for free at EnteMarriage Matrimony.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('kmtheme_hero_subtitle', array(
        'label' => __('Hero Subtitle', 'entemarriage-theme'),
        'section' => 'kmtheme_hero_section',
        'type' => 'textarea',
    ));
    
    // About Section Settings
    $wp_customize->add_section('kmtheme_about_section', array(
        'title' => __('About Section', 'entemarriage-theme'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('kmtheme_about_title', array(
        'default' => 'EnteMarriage, An Exclusive Kerala Marriage Matrimony For You',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_about_title', array(
        'label' => __('About Title', 'entemarriage-theme'),
        'section' => 'kmtheme_about_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('kmtheme_about_content', array(
        'default' => 'Your Trusted Kerala Matrimony. ISO Certified, it\'s the No.1 choice for brides and grooms in Kerala for their way to marriage. With advanced web and mobile features, we assure profile genuineness through manual verification. Our dedicated support and Elite service make finding your partner forever easier.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('kmtheme_about_content', array(
        'label' => __('About Content', 'entemarriage-theme'),
        'section' => 'kmtheme_about_section',
        'type' => 'textarea',
    ));
    
    // Stats Settings
    $wp_customize->add_setting('kmtheme_active_users', array(
        'default' => '134,268',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_active_users', array(
        'label' => __('Active Users', 'entemarriage-theme'),
        'section' => 'kmtheme_about_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('kmtheme_success_stories', array(
        'default' => '10,614',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_success_stories', array(
        'label' => __('Success Stories', 'entemarriage-theme'),
        'section' => 'kmtheme_about_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('kmtheme_app_downloads', array(
        'default' => '100,000+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_app_downloads', array(
        'label' => __('App Downloads', 'entemarriage-theme'),
        'section' => 'kmtheme_about_section',
        'type' => 'text',
    ));
    
    // Footer Settings
    $wp_customize->add_section('kmtheme_footer_section', array(
        'title' => __('Footer Settings', 'entemarriage-theme'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('kmtheme_footer_description', array(
        'default' => 'EnteMarriage™: The ISO Certified Kerala matrimony platform for your perfect match. The trusted choice for brides and grooms in Kerala seeking their life partner, our profiles are 100% manually verified.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('kmtheme_footer_description', array(
        'label' => __('Footer Description', 'entemarriage-theme'),
        'section' => 'kmtheme_footer_section',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('kmtheme_footer_phone', array(
        'default' => '+91 9544146660',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kmtheme_footer_phone', array(
        'label' => __('Footer Phone', 'entemarriage-theme'),
        'section' => 'kmtheme_footer_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('kmtheme_footer_email', array(
        'default' => 'info@entemarriage.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('kmtheme_footer_email', array(
        'label' => __('Footer Email', 'entemarriage-theme'),
        'section' => 'kmtheme_footer_section',
        'type' => 'email',
    ));
    
    // Background Settings
    $wp_customize->add_section('kmtheme_bg_section', array(
        'title' => __('Background Settings', 'entemarriage-theme'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('kmtheme_bg_color', array(
        'default' => '#f8f9fa',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'kmtheme_bg_color', array(
        'label' => __('Background Color', 'entemarriage-theme'),
        'section' => 'kmtheme_bg_section',
        'settings' => 'kmtheme_bg_color',
    )));
    
    $wp_customize->add_setting('kmtheme_bg_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'kmtheme_bg_image', array(
        'label' => __('Background Image', 'entemarriage-theme'),
        'section' => 'kmtheme_bg_section',
        'settings' => 'kmtheme_bg_image',
    )));
    
    // Color Settings
    $wp_customize->add_section('kmtheme_colors_section', array(
        'title' => __('Color Settings', 'entemarriage-theme'),
        'priority' => 45,
    ));
    
    $wp_customize->add_setting('kmtheme_primary_color', array(
        'default' => '#e65100',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'kmtheme_primary_color', array(
        'label' => __('Primary Color', 'entemarriage-theme'),
        'section' => 'kmtheme_colors_section',
        'settings' => 'kmtheme_primary_color',
    )));
    
    $wp_customize->add_setting('kmtheme_secondary_color', array(
        'default' => '#28a745',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'kmtheme_secondary_color', array(
        'label' => __('Secondary Color', 'entemarriage-theme'),
        'section' => 'kmtheme_colors_section',
        'settings' => 'kmtheme_secondary_color',
    )));
}
add_action('customize_register', 'kmtheme_customize_register');

// Output custom CSS with editable colors and backgrounds
function kmtheme_custom_css() {
    $bg_color = get_theme_mod('kmtheme_bg_color', '#f8f9fa');
    $bg_image = get_theme_mod('kmtheme_bg_image');
    $primary_color = get_theme_mod('kmtheme_primary_color', '#e65100');
    $secondary_color = get_theme_mod('kmtheme_secondary_color', '#28a745');
    
    echo '<style>';
    if ($bg_image) {
        echo 'body { background: url(' . esc_url($bg_image) . ') no-repeat center center fixed; background-size: cover; }';
    } else {
        echo 'body { background: ' . esc_attr($bg_color) . '; }';
    }
    
    // Dynamic color variables
    echo ':root {';
    echo '--primary-color: ' . esc_attr($primary_color) . ';';
    echo '--secondary-color: ' . esc_attr($secondary_color) . ';';
    echo '}';
    
    // Apply colors to elements
    echo '.button, .login-btn, .tab-btn.active, .registration-form button { background: ' . esc_attr($primary_color) . '; }';
    echo '.profile-card .actions .contact-btn, .tab-btn.active { background: ' . esc_attr($secondary_color) . '; }';
    echo '.logo h1, footer h3, footer h4 { color: ' . esc_attr($primary_color) . '; }';
    echo '</style>';
}
add_action('wp_head', 'kmtheme_custom_css');

// Add ACF compatibility and options pages
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    
    acf_add_options_page(array(
        'page_title' => 'Home Page Content',
        'menu_title' => 'Home Page',
        'menu_slug' => 'home-page-content',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    
    acf_add_options_page(array(
        'page_title' => 'Profile Content',
        'menu_title' => 'Profile Content',
        'menu_slug' => 'profile-content',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// Helper function to get editable content with proper error handling
function get_editable_content($key, $default = '') {
    // Check if we're in a safe context
    if (!function_exists('get_theme_mod')) {
        return $default;
    }
    
    try {
        $customizer_value = get_theme_mod($key);
        
        // Check if ACF is available and get ACF value
        $acf_value = '';
        if (function_exists('get_field')) {
            $acf_value = get_field($key, 'option');
        }
        
        if ($customizer_value) {
            return $customizer_value;
        } elseif ($acf_value) {
            return $acf_value;
        } else {
            return $default;
        }
    } catch (Exception $e) {
        // Return default value if there's any error
        return $default;
    }
}