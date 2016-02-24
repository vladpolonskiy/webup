<?php
/**
 * Theme support
 */
function bsc_theme_setup() {
	add_theme_support('menus');
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background' );
    add_theme_support('custom-thumbnails');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ));
    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );
}

add_action( 'after_setup_theme', 'bsc_theme_setup' );

/**
 * Rergistering new menu's locations
 */
function register_theme_menus() {
    register_nav_menus(array(
       'primary menu' => __('Primary Menu'), 
    ));
}

add_action('init', 'register_theme_menus');


/**
 * Setting up the length of the excerpt for the blog
 */
function bsc_excerpt_length($length) {
    return 50;
}

add_filter('excerpt_length', 'bsc_excerpt_length', 999);


