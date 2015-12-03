<?php
/*
  Plugin Name: Subscribe Widget
  Plugin URI:
  Description: 
  Author: 
  Author 
 */
class Subscribe_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

// register widget
function register_subscribe() {
    register_widget('Subscribe_Widget');
}

add_action('widgets_init', 'register_subscribe');

// enqueue css stylesheet
function subscribe_widget_css() {
    wp_enqueue_style('subscribe-widget', get_template_directory_uri() . '/inc/widgets/webup-subscribe/css/widget.css');
}

add_action('wp_enqueue_scripts', 'subscribe_widget_css');