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
    register_nav_menu('secondaryMenu', 'Secondary Menu');
    register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
}
add_action('after_setup_theme', 'mmgmodels_theme_setup');

// Enqueue styles and scripts
function mmdmodels_theme_scripts() {
    // wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    // wp_enqueue_style('tailwindcss', get_theme_file_uri('/assets/css/tailwind_output.css'));
    wp_enqueue_style('tailwindcss', get_theme_file_uri('/assets/css/tailwind.css'));
    wp_enqueue_script('mytheme-scripts', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
    
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style( 'lightgallery', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css' );
    wp_enqueue_script( 'lightgallery', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js', [], null, true );
}
add_action('wp_enqueue_scripts', 'mmdmodels_theme_scripts');


// Register Custom Post Type: Models
function mytheme_register_models_cpt() {

    $labels = array(
        'name'               => __( 'Models', 'textdomain' ),
        'singular_name'      => __( 'Model', 'textdomain' ),
        'menu_name'          => __( 'Models', 'textdomain' ),
        'name_admin_bar'     => __( 'Model', 'textdomain' ),
        'add_new'            => __( 'Add New', 'textdomain' ),
        'add_new_item'       => __( 'Add New Model', 'textdomain' ),
        'edit_item'          => __( 'Edit Model', 'textdomain' ),
        'new_item'           => __( 'New Model', 'textdomain' ),
        'view_item'          => __( 'View Model', 'textdomain' ),
        'search_items'       => __( 'Search Models', 'textdomain' ),
        'not_found'          => __( 'No models found', 'textdomain' ),
        'not_found_in_trash' => __( 'No models found in Trash', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true, // Enables /models/ archive page
        'menu_icon'          => 'dashicons-book', // WordPress Dashicon
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'rewrite'            => array( 'slug' => 'models' ), // URL slug
        'show_in_rest'       => true, // Enables Gutenberg + API
    );

    register_post_type( 'model', $args );
}
add_action( 'init', 'mytheme_register_models_cpt' );
