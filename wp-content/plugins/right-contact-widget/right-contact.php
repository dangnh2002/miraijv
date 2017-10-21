<?php
/*
Plugin Name: right contact
Plugin URI:
Description:
Author:
Version: 1.0
Author URI:
*/
add_action( 'widgets_init', 'create_right_contact' );
function create_right_contact() {
        register_widget('Right_Contact');
}
class Right_Contact extends WP_Widget {
	function __construct() {
		parent::__construct (
			'right_contact', // id của widget
			'Right Contact', // tên của widget
			array('description' => 'thông tin liên hệ ở bên phải')
		);
    }
    
	function form( $instance ) {
		parent::form( $instance );
        $default = array(
				'title' => 'Tiêu đề',
				'tel' => 'Số điện thoại',			
				'hotline1' => 'Hotline1',
				'hotline2' => 'Hotline2',
				'facebook' => 'Facebook',
				'skype1' => 'Skype1',
				'skype2' => 'Skype2',
				'gmail' => 'Gmail'
        );
        $instance = wp_parse_args( (array) $instance, $default);
		$title = esc_attr($instance['title']);
		$tel = esc_attr($instance['tel']);
		$facebook = esc_attr($instance['facebook']);
		$hotline1 = esc_attr($instance['hotline1']);
		$hotline2 = esc_attr($instance['hotline2']);
		$skype1 = esc_attr($instance['skype1']);
		$skype2 = esc_attr($instance['skype2']);
		$gmail = esc_attr($instance['gmail']);
	?>
		<div>
			<label>Tiêu đề</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('title'); ?>' value='<?php echo $title; ?>' />
		</div>
		<div>
			<label>Số điện thoại</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('tel'); ?>' value='<?php echo $tel; ?>' />
		</div>
		<div>
			<label>Facebook</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('facebook'); ?>' value='<?php echo $facebook; ?>' />
		</div>
		<div>
			<label>Hotline1</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('hotline1'); ?>' value='<?php echo $hotline1; ?>' />
		</div>
		<div>
			<label>Skype1</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('skype1'); ?>' value='<?php echo $skype; ?>' />
		</div>
		<div>
			<label>Hotline2</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('hotline2'); ?>' value='<?php echo $hotline1; ?>' />
		</div>
		<div>
			<label>Skype2</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('skype2'); ?>' value='<?php echo $skype; ?>' />
		</div>
		<div>
			<label>Gmail</label>
			<input class='widefat' type='text' name='<?php echo $this->get_field_name('gmail'); ?>' value='<?php echo $gmail; ?>' />
		</div>
	<?php	
		
    }
    
    function update( $new_instance, $old_instance ) {
		parent::update( $new_instance, $old_instance );
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['tel'] = strip_tags($new_instance['tel']);
		$instance['facebook'] = strip_tags($new_instance['facebook']);
		$instance['hotline1'] = strip_tags($new_instance['hotline1']);
		$instance['skype1'] = strip_tags($new_instance['skype1']);
		$instance['hotline2'] = strip_tags($new_instance['hotline2']);
		$instance['skype2'] = strip_tags($new_instance['skype2']);
		$instance['gmail'] = strip_tags($new_instance['gmail']);
		return $instance;
    }
    
    function widget( $args, $instance ) {
		extract( $args );		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$tel = apply_filters( 'widget_title', $instance['tel'] );
		$facebook = apply_filters( 'widget_title', $instance['facebook'] );
		$hotline1 = apply_filters( 'widget_title', $instance['hotline1'] );
		$skype1 = apply_filters( 'widget_title', $instance['skype1'] );
		$hotline2 = apply_filters( 'widget_title', $instance['hotline2'] );
		$skype2 = apply_filters( 'widget_title', $instance['skype2'] );
		$gmail = apply_filters( 'widget_title', $instance['gmail'] );		
		?>
		<div class="right-contact-widget">
			<div class="right-contact-title"><h2><?php echo $title;?></h2></div>
			<div class="wi-tel"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $tel; ?></div>			
			<div class="wi-mobile"><i class="fa fa-mobile" aria-hidden="true"></i><?php echo $hotline1; ?></div>
			<div class="wi-mobile"><i class="fa fa-mobile" aria-hidden="true"></i><?php echo $hotline2; ?></div>
			<div class="wi-facebook"><i class="fa fa-facebook" aria-hidden="true"></i><a href="<?php echo $facebook; ?>"><?php echo $facebook; ?></a></div>			
			<div class="wi-skype"><i class="fa fa-skype" aria-hidden="true"></i><?php echo $skype1; ?></div>
			<div class="wi-skype"><i class="fa fa-skype" aria-hidden="true"></i><?php echo $skype2; ?></div>
			<div class="wi-gmail"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $gmail; ?></div>
		</div>
		
		<?php
    }
 
}