<?php

// Load the Theme CSS
function theme_styles() {

	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'type', get_template_directory_uri() . '/css/type.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

	wp_register_style( 'homestyle', get_template_directory_uri() . '/css/style-home.css' );
	if ( is_page('home') ) {
		wp_enqueue_style('homestyle');
	}
}

// Load the Theme JS
function theme_js() {
	wp_register_script( 'unslider', get_template_directory_uri() . '/js/unslider.min.js', array('jquery'), '', true );
	if ( is_page('home') ) {
		wp_enqueue_script('unslider');
	}
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable custom menus
add_theme_support( 'menus' );

?>