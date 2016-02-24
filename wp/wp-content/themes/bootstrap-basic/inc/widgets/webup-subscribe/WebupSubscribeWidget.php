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
		parent::__construct(
                'Subscribe',
                __('Subscribe', 'webup'), // Name
                array('description' => __('Subscribe to our news', 'webup'))
        );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        if(!empty($instance['button'])) {
	        echo $args['before_widget'];
		    if(!empty($instance['title'])) {
	            $title = $args['before_title'] . $instance['title'] . $args['after_title'];
	            echo $title;
	        }
	        ?>
	        <form class="form-subscribe">
	          <div class="form-group">
			    <label class="sr-only" for="exampleInputEmail3">Name</label>
			    <input type="text" class="form-control" id="subscriber-name" placeholder="Имя">
			  </div>
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputPassword3">Email</label>
			    <input type="email" class="form-control" id="subscriber-email" placeholder="E-mail">
			  </div>
			  <button type="submit" class="btn"><?php echo $instance['button']?></button>
			</form>
	        <?php
	        echo $args['after_widget'];
	    }
       
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		 if(empty($instance)) {
            $instance['title'] = 'Подписка';
            $instance['button'] = 'Подпишусь';
        }
        foreach($instance as $key => $value) {
            $id = $this->get_field_id($key);
            $name = $this->get_field_name($key);
            ?>
            <p>
                <label for="<?php echo $id; ?>"><?php echo ucfirst($key); ?></label> 
                <input class="widefat" id="<?php echo $id; ?>" name="<?php echo $name; ?>" type="text" value="<?php echo esc_attr($value); ?>">
            </p>
            <?php
        }
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['button'] = (!empty($new_instance['button']) ) ? strip_tags($new_instance['button']) : '';

        return $instance;
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