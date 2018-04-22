<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function therideo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Default Blog Sidebar', 'therideo' ),
		'id'            => 'blog_sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'therideo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    //footer Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget One', 'therideo' ),
		'id'            => 'footer_one',
		'description'   => esc_html__( 'Add information, logo, your address.', 'therideo' ),
		'before_widget' => '<div class="top-left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 //footer Widget 2
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Two', 'therideo' ),
		'id'            => 'footer_two',
		'description'   => esc_html__( 'Add footer widget Style2 here.', 'therideo' ),
		'before_widget' => '<div class="footer-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    
     //footer Widget 3
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Three', 'therideo' ),
		'id'            => 'footer_three',
		'description'   => esc_html__( 'Add Footer Three.', 'therideo' ),
		'before_widget' => '<div class="top-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	     //footer Widget Four
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Four', 'therideo' ),
		'id'            => 'footer_four',
		'description'   => esc_html__( 'Add Footer Four.', 'therideo' ),
		'before_widget' => '<div class="top-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'therideo_widgets_init' );