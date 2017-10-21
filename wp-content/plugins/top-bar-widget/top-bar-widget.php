<?php
/*
Plugin Name: top widget
Plugin URI:
Description:
Author:
Version: 1.0
Author URI:
*/
add_action( 'widgets_init', 'create_top_widget' );
function create_top_widget() {
        register_widget('Top_widget');
}
class Top_widget extends WP_Widget {
	function __construct() {
		parent::__construct (
			'top_widget', // id của widget
			'Top Widget', // tên của widget
			array('description' => 'widget tren dau trang')
		);
    }
    
	function form( $instance ) {
		parent::form( $instance );
        $default = array(
				'tel' => 'Số điện thoại',
				'add' => 'Địa chỉ'
        );
        $instance = wp_parse_args( (array) $instance, $default);
        $address = esc_attr( $instance['add'] );
		$tel = esc_attr($instance['tel']);
	?>
		<div>
			<label>Địa chỉ</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('add'); ?>' value='<?php echo $address; ?>' />
		</div>
		<div>
			<label>Số điện thoại</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('tel'); ?>' value='<?php echo $tel; ?>' />
		</div>
	<?php	
		
    }
    
    function update( $new_instance, $old_instance ) {
		parent::update( $new_instance, $old_instance );
		$instance = $old_instance;
		$instance['add'] = strip_tags($new_instance['add']);
		$instance['tel'] = strip_tags($new_instance['tel']);
		return $instance;
    }
    
    function widget( $args, $instance ) {
		extract( $args );
		$address = apply_filters( 'widget_title', $instance['add'] );
		$tel = apply_filters( 'widget_title', $instance['tel'] ); 
		?>
		<div class="top-bar-widget">
			<div class="top-address"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $address; ?></div>
			<div class="top-tel"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $tel; ?></div>
		</div>
		
		<?php
    }
 
}