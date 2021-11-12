<?php
/**
 * Register navigation menus for Appearance > Menus.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'register_nav_menu' ) ) {

	return;
}

	add_action(
		'after_setup_theme',
		'developry_menus'
	);

	/**
	 * Attach navigation menus to WP admin.
	 *
	 * @since 1.0.0
	 */
	function developry_menus() {

		// Theme main navigation used with wp_nav_menu().
		register_nav_menu(
			'main-nav',
			esc_html__( 'Main Navigation', 'developry-lite' )
		);

		// Theme main navigation used with wp_nav_menu().
		register_nav_menu(
			'social-nav',
			esc_html__( 'Social Nav', 'developry-lite' )
		);
	}
