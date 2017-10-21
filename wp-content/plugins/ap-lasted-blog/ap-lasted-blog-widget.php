<?php
/**
 * Plugin Name: Ap Lasted Post Widget
 * Plugin URI: http://apollotheme.com
 * Description: Show list post with caitd
 * Author: thanhvn
 * Author URI: http://apollotheme.com
 * Version: 1.0
 * Text Domain: ap-lasted-blog-widget
 *
 * @package Ap_Lasted_Blog_Widget
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define.
define( 'AP_LASTED_BLOG_WIDGET_VERSION', '1.0' );
define( 'AP_LASTED_BLOG_WIDGET_SLUG', 'ap-lasted-blog-widget' );
define( 'AP_LASTED_BLOG_WIDGET_BASENAME', basename( dirname( __FILE__ ) ) );
define( 'AP_LASTED_BLOG_WIDGET_BASE_FILE', plugin_basename( __FILE__ ) );
define( 'AP_LASTED_BLOG_WIDGET_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'AP_LASTED_BLOG_WIDGET_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );

// Load widget.
require_once AP_LASTED_BLOG_WIDGET_DIR . '/inc/widget.php';

/**
 * Register widget.
 *
 * @since 1.0.0
 */
function ap_lasted_blog_widget_register() {

	register_widget( 'Ap_Lasted_Blog_Widget' );

}
add_action( 'widgets_init', 'ap_lasted_blog_widget_register' );

/**
 * Tasks in init.
 *
 * @since 1.0.0
 */
function ap_lasted_blog_widget_init() {

	// Make plugin translation ready.
	load_plugin_textdomain( 'ap-lasted-blog-widget' );

}

add_action( 'init', 'ap_lasted_blog_widget_init' );