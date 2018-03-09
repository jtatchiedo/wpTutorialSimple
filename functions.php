<?php

function myprefix_load_css_and_js() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'myprefix_load_css_and_js' );

function simple_theme_setup() {
    // Featured Image Support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simple_theme_setup');

function set_excerpt_length() {
    return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');
