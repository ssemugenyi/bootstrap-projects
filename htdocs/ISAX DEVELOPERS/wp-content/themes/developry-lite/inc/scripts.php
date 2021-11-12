<?php
/**
 * Load JS libraries for our theme's front-end.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wp_register_script' )
	|| ! function_exists( 'wp_enqueue_script' ) ) {

	return;
}

	add_action(
		'wp_enqueue_scripts',
		'developry_script'
	);

	/**
	 * Attach JS scripts.
	 *
	 * @since 1.0.0
	 */
	function developry_script() {

		// Register and enqueue the Popper library file from CDN.
		wp_register_script(
			'popper',
			get_stylesheet_directory_uri() . '/assets/js/popper.min.js',
			array( 'jquery' ),
			null,
			true
		);

		wp_enqueue_script( 'popper' );

		// Register and enqueue the Bootstrap library file from CDN.
		wp_register_script(
			'bootstrap',
			get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js',
			array( 'jquery', 'popper' ),
			null,
			true
		);

		wp_enqueue_script( 'bootstrap' );

		// Register and enqueue the Bootstrap classes and styling added via JQuery.
		wp_register_script(
			'boostrap-customizer',
			get_stylesheet_directory_uri() . '/assets/js/developry-lite.js',
			array( 'jquery', 'bootstrap' ),
			null,
			true
		);

		wp_enqueue_script( 'boostrap-customizer' );

		// Load comment reply custom JS scripts.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

			wp_enqueue_script( 'comment-reply' );
		}
	}
