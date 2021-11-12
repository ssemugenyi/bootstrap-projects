<?php
/**
 * Load stylesheets for our theme's front-end.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wp_enqueue_style' ) ) {

	return;
}

	add_action(
		'wp_enqueue_scripts',
		'developry_styles'
	);

	/**
	 * Attach stylesheets.
	 *
	 * @since 1.0.0
	 */
	function developry_styles() {

		// Enqueue the Bootstrap library CSS file file from CDN.
		wp_enqueue_style(
			'bootstrap',
			get_template_directory_uri() . '/assets/css/bootstrap.min.css',
			array(),
			null
		);

		// Enqueue the Iconic font icons CSS file locally.
		wp_enqueue_style(
			'iconic',
			get_template_directory_uri() . '/assets/css/iconic.min.css',
			array(),
			null
		);

		// Enqueue the theme main style.css file.
		wp_enqueue_style(
			'developry-lite',
			get_stylesheet_uri(),
			array(),
			null
		);

		// Enqueue the theme Bootswatch (Bootstrap style variations) CSS file(s). Based on WP Customzier selection by user.
		$theme_options = get_theme_mod( 'developry_theme_options' );

		if ( ! empty( $theme_options['bootstrap_theme'] )
			&& 'skeleton' !== $theme_options['bootstrap_theme'] ) {

			wp_enqueue_style(
				'bootswatch',
				get_template_directory_uri() . '/assets/css/themes/' . $theme_options['bootstrap_theme'] . '.min.css',
				array(),
				null
			);
		}
	}
