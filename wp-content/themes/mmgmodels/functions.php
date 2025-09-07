<?php
function mmgmodels_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus([
        'primary' => __('Primary Menu', 'mytheme')
    ]);
    register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
}
add_action('after_setup_theme', 'mmgmodels_theme_setup');

// Enqueue styles and scripts
function mmdmodels_theme_scripts() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_style('tailwindcss', get_theme_file_uri('/assets/css/tailwind_output.css'));
    wp_enqueue_script('mytheme-scripts', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'mmdmodels_theme_scripts');
