<?php
require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';

// Enqueue stylesheets and scripts
function custom_theme_enqueue_scripts() {
    wp_enqueue_style('custom-theme-style', get_stylesheet_uri());
    // Add your custom stylesheets and scripts here
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');

// Register menu
function custom_theme_register_menus() {
    register_nav_menu('horizontal-menu', 'Horizontal Menu');
}
add_action('after_setup_theme', 'custom_theme_register_menus');

// Add logo setting in the theme customization section
function custom_theme_customize_register($wp_customize) {
    // Add logo setting
    $wp_customize->add_setting('custom_theme_logo');

    // Add logo control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_theme_logo', array(
        'label' => 'Upload Logo',
        'section' => 'title_tagline',
        'settings' => 'custom_theme_logo',
    )));
}
add_action('customize_register', 'custom_theme_customize_register');

// Display logo in the header
function custom_theme_display_logo() {
    $custom_logo_url = get_theme_mod('custom_theme_logo');

    if ($custom_logo_url) {
        echo '<img src="' . esc_url($custom_logo_url) . '" alt="Logo">';
    } elseif (has_custom_logo()) {
        the_custom_logo();
    }
}
