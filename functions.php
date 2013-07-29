<?php

/** 
 *	Enable or disable multisite
 */
define('WP_ALLOW_MULTISITE', false);

/** 
 *	Theme Support
 */
add_action('init', 'register_my_menu');
add_action('admin_init', 'mytheme_add_init');

/** 
 *	Navigation Menu
 */
function register_my_menu() {
	// Primary Navigation used in the Top Bar (Generally)
	register_nav_menu('primary-menu', __('Primary Navigation'));
	// Sidebar Links
	register_nav_menu('colophon-menu', __('Colophon Links'));
	// Footer Links
	register_nav_menu('footer-menu', __('Footer Links'));
}

// change current-menu-item to active
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// remove unnnecessary classes
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('active', 'has-dropdown')) : '';
}

// include the top bar walker
require_once('functions/navbar_walker.php');

/**
 *	Top Bar Left Navigation
 */
function foundation_top_bar_left($theme_location = 'primary-menu') {
	wp_nav_menu(array(
		'container' => false,
		'container_class' => '',
		'menu' => '',
		'menu_class' => 'left',
		'menu_id' => '',
		'theme_location' =>  $theme_location,
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'depth' => 5,
		'fallback_cb' => false,
		'walker' => new top_bar_walker()
	));
}

/**
 *	Top Bar Right Navigation
 */
function foundation_top_bar_right($theme_location = null) {
	wp_nav_menu(array(
		'container' => false,
		'container_class' => '',
		'menu' => '',
		'menu_class' => 'right',
		'menu_id' => '',
		'theme_location' =>  $theme_location,
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'depth' => 5,
		'fallback_cb' => false,
		'walker' => new top_bar_walker()
	));
}

/** 
 *	Add Support for post thumbnails
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200, true);

/** 
 *	Widget enabled sidebar
 */
if (function_exists('register_sidebar')) {
	register_sidebar();
}

/** 
 *	Custom Background Support
 */
add_custom_background();

/** 
 *	Enable post and comment RSS feed links to head
 */
add_theme_support('automatic-feed-links');

/** 
 *	Initialize theme options
 */
include_once('functions/admin.php');
add_action('admin_menu', 'mytheme_add_admin');

/**
 *	Build a content css slug
 */
function content_slug() {
	global $post; 
	$slug = get_post( $post )->post_name;

	echo "page-{$slug}";
}

/**
 *	Credit where credit is due
 */
function get_credits($scheme = 'light') {
	echo "<span class=\"credits {$scheme}\">Created by <a href=\"http://kheitzman.com\">KH</a></span>";
}

/**
 *	Custom navbar
 */	
function get_navbar($slug = 'navbar', $name = null ) {
	get_template_part( $slug, $name );
}

/**
 *	Custom colophon
 */
function get_colophon($slug = 'colophon', $name = null ) {
	get_template_part( $slug, $name );
}

/**
 *	Custom Javascript
 */
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
function my_theme_scripts() {
	wp_deregister_script( 'jquery' );

	// header scripts
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/scripts/modernizr.min.js', false, '2.6.2', false );
	// footer scripts
	// wp_enqueue_script( 'zepto', get_template_directory_uri() . '/scripts/zepto.min.js', false, '1.0', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/scripts/jquery.min.js', false, '1.10.2', true );
  	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/scripts/foundation.min.js', array('jquery'), false, true );

  	//if ( is_front_page() ) {
    //	wp_enqueue_script('front');
  	//}
}