<?php 

/* 
*	Including styles
*
*	@since 0.1
*/

function dukiAlex_register_styles() {

	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '', '' );

	wp_enqueue_style( 'style' );

};

add_action( 'wp_enqueue_scripts', 'dukiAlex_register_styles' );

/* 
*	Register 'sidebar-1'
*
*	Sidebar prints on all pages, including main.
*
*	@since     0.1
*/

function dukiAlex_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'dukiAlex' ),
		'id' => 'sidebar-1',
		'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'dukiAlex' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
};

add_action( 'widgets_init', 'dukiAlex_widgets_init' );

?>