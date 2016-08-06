<?php

// ENABLE CUSTOM MENUS //
add_theme_support( 'menus' );

// ENABLE POST THUMBNAILS // 
add_theme_support( 'post-thumbnails' );

// REGISTER MENU AREAS //

function register_theme_menus() {
	register_nav_menus( 
		array(
			'primary-menu' => __('Primary Menu')
		)
	 );
}

add_action( 'init', 'register_theme_menus' );

// STYLES //

function wpt_theme_styles() {
	// link up the css files google fonts, etc...
	wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
	// wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('fonts_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
// make it happen with wordpress hooks...
add_action('wp_enqueue_scripts', 'wpt_theme_styles');


// JAVASCRIPT //

function wpt_theme_js() {
	// link up the js files in order of dependency...
	wp_enqueue_script('modernizer_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
	wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true);
	wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);

}
// make it happen with wordpress hooks...
add_action( 'wp_enqueue_scripts', 'wpt_theme_js');

?>