<?php

function coding_school_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'coding_school_theme_support');

function coding_school_styles() {
    wp_enqueue_style('sadom-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style( 'owl-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl-carousel-theme-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
    wp_enqueue_style( 'font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css');
    wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');

}
add_action( 'wp_enqueue_scripts', 'coding_school_styles' );

function coding_school_scripts(){
    wp_enqueue_script('jquery-coding-school', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js');
    wp_enqueue_script('owl-carousel-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('vcs-js-script', get_template_directory_uri(). "/assets/js/script.js", array(), '1.0', 'true');
}
add_action('wp_enqueue_scripts','coding_school_scripts');

function coding_school_menus(){
    $locations = array(
        'primary' => "Desktop Primary top menu bar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'coding_school_menus');

function create_testimonials_post_type() {
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'new_item'           => 'New Testimonial',
        'view_item'          => 'View Testimonial',
        'search_items'       => 'Search Testimonials',
        'not_found'          => 'No testimonials found',
        'not_found_in_trash' => 'No testimonials found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Testimonials'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'testimonials' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => 20,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'           => 'dashicons-testimonial'
    );

    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'create_testimonials_post_type' );

function create_gallery_post_type() {
    $labels = array(
        'name'               => 'Gallery',
        'singular_name'      => 'Gallery',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Gallery',
        'edit_item'          => 'Edit Gallery',
        'new_item'           => 'New Gallery',
        'view_item'          => 'View Gallery',
        'search_items'       => 'Search Gallery',
        'not_found'          => 'No galleries found',
        'not_found_in_trash' => 'No galleries found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Gallery'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'gallery' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => 20,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'           => 'dashicons-images-alt2'
    );

    register_post_type( 'gallery', $args );
}
add_action( 'init', 'create_gallery_post_type' );


?>