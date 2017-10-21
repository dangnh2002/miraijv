<?php
/**
 * Plugin widgets.
 *
 * @package Ap_Lasted_Blog_Widget
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Ap_Lasted_Blog_Widget.
 *
 * @since 1.0.0
 */
class Ap_Lasted_Blog_Widget extends WP_Widget {

	/**
	 * Sets up a new widget instance.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		// Widget options.
		$opts = array(
			'classname'                   => 'ap_lasted_blog_widget',
			'description'                 => __( 'AP Lasted Blog', 'ap-lasted-blog-widget' ),
			'customize_selective_refresh' => true,
		);

		parent::__construct( 'ap-lasted-blog-widget', __( 'AP Lasted Blog', 'ap-lasted-blog-widget' ), $opts );

	}

	/**
	 * Outputs the content for the current widget instance.
	 *
	 * @since 1.0.0
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance Settings for the current widget instance.
	 */
	function widget( $args, $instance ) {

		$title 		= apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$ids		= ! empty( $instance['ids'] ) ? $instance['ids'] : '';
		$count		= ! empty( $instance['count'] ) ? $instance['count'] : 20;
		$is_slick	= ! empty( $instance['is_slick'] ) ? $instance['is_slick'] : false;
		$description = ! empty( $instance['description'] ) ? $instance['description'] : '';

		require_once AP_LASTED_BLOG_WIDGET_DIR . '/template/template.php';
		

	}

	/**
	 * Handles updating settings for the current widget instance.
	 *
	 * @since 1.0.0
	 *
	 * @param array $new_instance New settings for this instance as input by the user.
	 * @param array $old_instance Old settings for this instance.
	 * @return array Settings to save or bool false to cancel saving.
	 */
	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title']		= sanitize_text_field( $new_instance['title'] );
		$instance['ids']		= esc_attr( $new_instance['ids'] );
		$instance['count']		= esc_attr( $new_instance['count'] );
		$instance['is_slick']	= isset( $new_instance['is_slick'] );
		if ( current_user_can( 'unfiltered_html' ) ) {
			$instance['description'] = $new_instance['description'];
		} else {
			$instance['description'] = wp_kses_post( $new_instance['description'] );
		}

		return $instance;

	}

	/**
	 * Outputs the widget settings form.
	 *
	 * @since 1.0.0
	 *
	 * @param array $instance Current settings.
	 */
	function form( $instance ) {

		// Defaults.
		$instance = wp_parse_args( (array) $instance, array(
			'title'			=> '',
			'ids'			=> '',
			'count'			=> '',
			'is_slick'		=> '',
			'description'		=> '',
			) );
		?>
	    <p>
	        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title', 'ap-lasted-blog-widget' ); ?>:</label>
	        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
	    </p>

	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'ids' ) ); ?>"><?php _e( 'List Category ID', 'ap-lasted-blog-widget' ); ?>:</label>
	        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'ids' ) ); ?>"
	        name="<?php echo esc_attr( $this->get_field_name( 'ids' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['ids'] ); ?>" />
	    </p>
	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php _e( 'Number display', 'ap-lasted-blog-widget' ); ?>:</label>
	        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"
	        name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['count'] ); ?>" />
	    </p>
	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'is_slick' ) ); ?>"><?php _e( 'Using Slick Slide', 'ap-lasted-blog-widget' ); ?>:</label>
	      <input id="<?php echo esc_attr( $this->get_field_id( 'is_slick' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'is_slick' ) ); ?>" type="checkbox" <?php checked( isset( $instance['is_slick'] ) ? $instance['is_slick'] : 0 ); ?> />
	    </p>
	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php _e( 'Description', 'ap-lasted-blog-widget' ); ?>:</label>
	      <textarea class="widefat" rows="3" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>"><?php echo esc_textarea( $instance['description'] ); ?></textarea>
	    </p>
		<?php
	}
}
