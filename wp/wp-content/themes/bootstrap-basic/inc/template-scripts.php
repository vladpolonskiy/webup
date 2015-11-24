<?php
if (!function_exists('webupEnqueueScripts')) {
	/**
	 * Enqueue scripts & styles
	 */
	function webupEnqueueScripts() 
	{
		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
		wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');
		wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

		wp_enqueue_script('jquery');

		wp_register_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js', false, false, true);
		wp_enqueue_script('modernizr-script');

		wp_register_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js', false, false, true);
		wp_enqueue_script('respond-script');

		wp_register_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.js', false, false, true);
		wp_enqueue_script('html5-shiv-script');

		
		wp_register_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', false, false, true);
		wp_enqueue_script('bootstrap-script');

		wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', array(), false, false, true);
		wp_enqueue_script('main-script');

		wp_register_script('jquery.easing', get_template_directory_uri() . '/js/vendor/jquery.easing.min.js', array(), false, false, true);
		wp_enqueue_script('jquery.easing');

		wp_register_script('jquery.fittext', get_template_directory_uri() . '/js/vendor/jquery.fittext.js', array(), false, false, true);
		wp_enqueue_script('jquery.fittext');

		wp_register_script('wow.min', get_template_directory_uri() . '/js/vendor/wow.min.js', array(), false, false, true);
		wp_enqueue_script('wow.min');

		wp_register_script('creative.js', get_template_directory_uri() . '/js/vendor/creative.js', array(), false, false, true);
		wp_enqueue_script('creative.js');

		wp_enqueue_style('webup-style', get_stylesheet_uri());
	}
}
add_action('wp_enqueue_scripts', 'webupEnqueueScripts');