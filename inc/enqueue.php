<?php
/**
 * Enqueue scripts and styles.
 */
function therideo_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'therideo-default-style', get_template_directory_uri().'/assets/css/default.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'therideo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '3.3.7', true );	
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '2.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}    
    
}
add_action( 'wp_enqueue_scripts', 'therideo_scripts' );
