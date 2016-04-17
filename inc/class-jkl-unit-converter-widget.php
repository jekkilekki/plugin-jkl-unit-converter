<?php
/**
 * The class that creates the plugin Widget.
 * 
 * @since       0.0.1
 * 
 * @package     JKL_Unit_Converter
 * @subpackage  JKL_Unit_Converter/inc
 * @author      Aaron Snowberger <jekkilekki@gmail.com>
 */

/* Prevent direct access */
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'JKL_Unit_Converter_Widget' ) ) {
    
    class JKL_Unit_Converter_Widget extends WP_Widget {
        
        /**
         * Sets up the widget's name, etc
         * 
         * @see     WP_Widget::__construct()
         * @since   0.0.1
         */
        public function __construct() {
            
            $widget_ops = array(
                    'classname'     => 'jkl_unit_converter_widget',
                    'description'   => __( 'A Unit Converter Widget to easily convert between various units.', 'jkl-unit-converter' ),
            );
            parent::__construct(
                    'jkl_unit_converter_widget',                        // Base ID
                    __( 'JKL Unit Converter', 'jkl-unit-converter' ),   // Name
                    $widget_ops                                         // Args
            );
            
            $this->register();
            
        }
        
        /**
         * Register widget with WordPress
         * 
         * @since   0.0.1
         */
        protected function register() {
            
            add_action( 'widgets_init', function() {
                    register_widget( 'JKL_Unit_Converter_Widget' );
            });
        }
        
        /**
         * Front-end display of the content of the widget
         * 
         * @see     WP_Widget::widget()
         * @since   0.0.1
         * @param   array   $args       Widget arguments
         * @param   array   $instance   Saved values from database.
         */
        public function widget( $args, $instance ) {
            
            // Only allow this widget to show up on Posts/Pages WITHOUT the shortcode
            global $post;
            if ( ! has_shortcode( $post->post_content, 'jkluc' ) ) {
                
                // Outputs the content of the widget
                echo $args[ 'before_widget' ];
                if ( ! empty( $instance[ 'title' ] ) ) {
                    echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];
                }
                
                include 'view-jkl-timezones-form.php';
                
                echo $args[ 'after_widget' ];
                
            }
        }
        
        /**
         * Back-end display of the options form on admin
         * 
         * @see     WP_Widget::form()
         * @since   0.0.1
         * @param   array   $instance   Previously saved values from the database.
         */
        public function form( $instance ) {
            
            // Outputs the options form on admin
            $title = ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __( 'Unit Converter', 'jkl-unit-converter' );
            
            ?>

            <p>
                <label for="<?= $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'jkl-unit-converter' ); ?></label>
                <input class="widefat" id="<?= $this->get_field_id( 'title' ); ?>" name="<?= $this->get_field_name( 'title' ); ?>" type="text" value="<?= esc_attr( $title ); ?>">
            </p>

            <?php
            
        }
        
        /**
         * Processes & sanitizes widget options on save
         * 
         * @see     WP_Widget::update()
         * @since   0.0.1
         * @param   array   $new_instance   The new options to be saved
         * @param   array   $old_instance   The previously saved values from the database
         * 
         * @return  array   Updated safe values to be saved
         */
        public function update( $new_instance, $old_instance ) {
            
            // Processes widget options to be saved
            $instance = array();
            $instance[ 'title' ] = ( ! empty( $new_instance[ 'title' ] ) ) ? strip_tags( $new_instance[ 'title' ] ) : '';
            
            return $instance;
            
        }
        
    } // END class JKL_Unit_Converter_Widget
    
} // END if ( ! class_exists() )

