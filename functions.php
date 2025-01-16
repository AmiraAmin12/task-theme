<?php
function tawazun_enqueue_assets() {
    wp_enqueue_style('task-theme-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    $carousel_js_path = get_template_directory() . '/js/carousel.js';
    if (file_exists($carousel_js_path)) {
        wp_enqueue_script(
            'carousel-script',
            get_template_directory_uri() . '/js/carousel.js',
            array(),
            filemtime($carousel_js_path),
            true 
        );
    } else {
        error_log('carousel.js file not found at: ' . $carousel_js_path); 
    }
}
add_action('wp_enqueue_scripts', 'tawazun_enqueue_assets');

// Register navigation menus
function tawazun_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tawazun-theme')
    ));
}
add_action('after_setup_theme', 'tawazun_register_menus');

// Add theme support for a custom logo
function tawazuntheme_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'tawazuntheme_custom_logo_setup');

// Add theme support for post thumbnails
function tawazun_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'tawazun_theme_setup');

// Register the 'logo' custom post type
function create_logo_post_type() {
    $labels = array(
        'name' => __('Logos'),
        'singular_name' => __('Logo')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-image',
    );

    register_post_type('logo', $args);
    error_log('Logo post type registered'); // Debug message
}
add_action('init', 'create_logo_post_type');

// Register the 'features' custom post type
function create_features_post_type() {
    $labels = array(
        'name' => _x('Features', 'post type general name', 'task-cpt'),
        'singular_name' => _x('Feature', 'post type singular name', 'task-cpt'),
        'menu_name' => _x('Features', 'admin menu', 'task-cpt'),
        'name_admin_bar' => _x('Feature', 'add new on admin bar', 'task-cpt'),
        'add_new' => _x('Add New', 'feature', 'task-cpt'),
        'add_new_item' => __('Add New Feature', 'task-cpt'),
        'new_item' => __('New Feature', 'task-cpt'),
        'edit_item' => __('Edit Feature', 'task-cpt'),
        'view_item' => __('View Feature', 'task-cpt'),
        'all_items' => __('All Features', 'task-cpt'),
        'search_items' => __('Search Features', 'task-cpt'),
        'parent_item_colon' => __('Parent Feature:', 'task-cpt'),
        'not_found' => __('No features found.', 'task-cpt'),
        'not_found_in_trash' => __('No features found in Trash.', 'task-cpt')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-star-filled',
        'query_var' => true,
        'rewrite' => array('slug' => 'features'),
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('features', $args);
    error_log('Features post type registered'); // Debug message
}
add_action('init', 'create_features_post_type');