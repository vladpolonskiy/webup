<?php
/**
 * Loading theme main styles and scripts
 */
function bsc_theme_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap.theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css');
}

add_action('wp_enqueue_scripts', 'bsc_theme_styles');

function bsc_theme_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery', 'bootstrap.js'), '', true);
}

add_action('wp_enqueue_scripts', 'bsc_theme_scripts');

