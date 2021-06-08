<?php
/**
 * Theme functions and definitions
 *
 * @package TheHopeBranchTheme
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function thb_custom_theme_enqueue_scripts() {
	wp_enqueue_style(
		'thb-custom-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'thb-custom-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'thb_custom_theme_enqueue_scripts', 20 );
