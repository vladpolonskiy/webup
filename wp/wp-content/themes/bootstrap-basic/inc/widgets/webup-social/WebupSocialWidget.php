<?php
/*
  Plugin Name: Social Icons Widget
  Plugin URI:
  Description: 
  Author: 
  Author 
 */
class Social_Icons extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
                'Social_Icons',
                __('Social Networks Profiles', 'webup'), // Name
                array('description' => __('Links to Author social media profile', 'webup'))
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        $links = Array();
        if(!empty($instance['vk'])) {
            $links['vk'] = '<li><a class="vk-label">Vkontakte</a> : <a class="vk" href="' . $instance['vk'] . '"></a></li>';
        }
        if(!empty($instance['fb'])) {
            $links['fb'] = '<li><a class="fb-label">Facebook</a> : <a class="fb" href="' . $instance['fb'] . '"></a></li>';
        }
        if(!empty($instance['youtube'])) {
            $links['youtube'] = '<li><a class="youtube-label">Youtube</a> : <a class="youtube" href="' . $instance['youtube'] . '"></a></li>';
        }
        if(!empty($instance['google'])) {
            $links['google'] = '<li><a class="google-label">Google +</a> : <a class="google" href="' . $instance['google'] . '"></a></li>';
        }
        ?>
        
        <?php   if(!empty($instance['title'])) {
                    $title = $args['before_title'] . $instance['title'] . $args['after_title'];
                    echo $title;
                }
        ?>
        <ul>
        <?php   for ($i = 0, $count = count($links); $i < $count; $i++) {
                    if (!empty($links[$i])) {
                        echo $links[$i];
                    }
                }
        ?>
        </ul>
        <?php
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        if(empty($instance)) {
            $instance['title'] = 'Социальные сети';
            $instance['vk'] = '#';
            $instance['fb'] = '#';
            $instance['youtube'] = '#';
            $instance['google'] = '#';
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
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['vk'] = (!empty($new_instance['vk']) ) ? strip_tags($new_instance['vk']) : '';
        $instance['fb'] = (!empty($new_instance['fb']) ) ? strip_tags($new_instance['fb']) : '';
        $instance['youtube'] = (!empty($new_instance['youtube']) ) ? strip_tags($new_instance['youtube']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';

        return $instance;
    }

}

// register Social_Icons widget
function register_social_profile() {
    register_widget('Social_Icons');
}

add_action('widgets_init', 'register_social_profile');

// enqueue css stylesheet
function social_icons_widget_css() {
    wp_enqueue_style('social-icons-widget', get_template_directory_uri() . '/inc/widgets/webup-social/css/widget.css');
}

add_action('wp_enqueue_scripts', 'social_icons_widget_css');