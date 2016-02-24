<?php
/**
 * For store widget hook action/filter.
 * 
 * @package bootstrap-basic
 */

if (!function_exists('basic_widgets_init')) {
	/**
	 * Register widget areas
	 */
	function basic_widgets_init() 
	{

		register_sidebar(array(
			'name'          => __('Sidebar Blog', 'webup'),
			'id'            => 'blog',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Sidebar Page', 'webup'),
			'id'            => 'page',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Sidebar Footer', 'webup'),
			'id'            => 'footer',
			'before_widget' => '<div class="col-md-4">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

	}
}
add_action('widgets_init', 'basic_widgets_init');