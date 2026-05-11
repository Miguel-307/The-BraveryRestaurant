<?php
/**
 * Mi Tema Hijo - Functions and Definitions
 */

function mi_tema_hijo_enqueue_styles() {
    // Parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Child theme style
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), wp_get_theme()->get('Version'));
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@100..900&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
}
add_action('wp_enqueue_scripts', 'mi_tema_hijo_enqueue_styles');

function mi_tema_hijo_enqueue_scripts() {
    // Main JS
    wp_enqueue_script('mi-tema-main-js', get_stylesheet_directory_uri() . '/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mi_tema_hijo_enqueue_scripts');

// Add support for features
function mi_tema_hijo_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mi_tema_hijo_setup');

// Register Custom Post Type for Carousel
function mi_tema_hijo_register_carrusel() {
    $labels = array(
        'name'                  => 'Carrusel',
        'singular_name'         => 'Slide de Carrusel',
        'menu_name'             => 'Carrusel Hero',
        'add_new'               => 'Añadir Nuevo Slide',
        'add_new_item'          => 'Añadir Nuevo Slide al Carrusel',
        'edit_item'             => 'Editar Slide',
        'new_item'              => 'Nuevo Slide',
        'view_item'             => 'Ver Slide',
        'all_items'             => 'Todos los Slides',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'carrusel'),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-images-alt2',
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('carrusel', $args);
}
add_action('init', 'mi_tema_hijo_register_carrusel');
