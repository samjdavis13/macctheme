<?php

// Load the Theme CSS
function theme_styles() {

	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'type', get_template_directory_uri() . '/css/type.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

	wp_register_style( 'homestyle', get_template_directory_uri() . '/css/style-home.css' );
	if ( is_page_template('front-page.php') ) {
		wp_enqueue_style('homestyle');
	}
}

// Load the Theme JS
function theme_js() {
	wp_register_script( 'unslider', get_template_directory_uri() . '/js/unslider.min.js', array('jquery'), '', true );
	//if ( is_page('home') || is_page('design-an-ad') ) {
	if (is_page_template('front-page.php') || get_setting('always_show_slider') ) {
		wp_enqueue_script('unslider');
	}
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js?ver=2.0', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable custom menus
add_theme_support( 'menus' );

// Hide admin abr
show_admin_bar(false);

// Enable widgets
function create_widget( $name, $id, $description ) {
	$args = array (
	'name'			=> __( $name ),
	'id' 			=> $id,
	'description' 	=> $description,
	'before_widget' => '',
	'after_widget' 	=> '',
	'before_title' 	=> '<h5>',
	'after_title' 	=> '</h5>'
	);
	register_sidebar( $args );
}

create_widget( 'Left Footer', 'footer_left', 'Displays in the left of the footer.' );
create_widget( 'Middle Footer', 'footer_middle', 'Displays in the middle of the footer.' );
create_widget( 'Right Footer', 'footer_right', 'Displays in the right of the footer.' );

// Enable searching of custom post types.
add_filter( 'pre_get_posts', 'tgm_cpt_search' );
/**
 * This function modifies the main WordPress query to include an array of post types instead of the default 'post' post type.
 *
 * @param mixed $query The original query
 * @return $query The amended query
 */
function tgm_cpt_search( $query ) {
    if ( $query->is_search )
		$query->set( 'post_type', array( 'post', 'movies', 'products', 'portfolio', 'home-post', 'page' ) );
    return $query;
};

// Shortcodes
function closeDiv_shortcode( $atts, $content = null ) {
  return '</div>';
}
add_shortcode( 'close-div', 'closeDiv_shortcode' );

function openDiv_shortcode( $atts, $content = null ) {
  return '<div class="fullspan article">';
}
add_shortcode( 'open-div', 'openDiv_shortcode' );

function closeArticle_shortcode( $atts, $content = null ) {
  return '</article>';
}
add_shortcode( 'close-article', 'closeArticle_shortcode' );

function openArticle_shortcode( $atts, $content = null ) {
  return '<article class="container_12">';
}
add_shortcode( 'open-article', 'openArticle_shortcode' );

function newArticle_shortcode( $atts, $content = null ) {
  return '</div></article> <div class="fullspan article"> <article class="container_12">';
}
add_shortcode( 'new-article', 'newArticle_shortcode' );

function hideTitle_shortcode( $atts, $content = null ) {
	return '<style> #post-title { display: none; } </style>';
}
add_shortcode ( 'hide-title', 'hideTitle_shortcode' );

?>
