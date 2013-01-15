<?php

/** Enable or disable multisite
 */
define('WP_ALLOW_MULTISITE', false);

/** Add Support for custom menus
 */
add_action('init', 'register_my_menu');

/** Navigation Menu
 */
function register_my_menu() {
	// Primary Navigation used in the Top Bar (Generally)
	register_nav_menu('primary-menu', __('Primary Navigation'));
	// Sidebar Links
	register_nav_menu('colophon-menu', __('Colophon Links'));
	// Footer Links
	register_nav_menu('footer-menu', __('Footer Links'));
}
add_action('admin_init', 'mytheme_add_init');

/** Add Support for post thumbnails
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200, true);

/** Widget enabled sidebar
 */
if (function_exists('register_sidebar')) {
	register_sidebar();
}

/** Custom Background Support
 */
add_custom_background();

/** Enable post and comment RSS feed links to head
 */
add_theme_support('automatic-feed-links');

/** Initialize theme options
 */
include_once('functions/admin.php');
add_action('admin_menu', 'mytheme_add_admin');


/** Various Theme Helpers
 */

function content_slug() {
	global $post; 
	$slug = get_post( $post )->post_name;

	echo "page-{$slug}";
}