<?php
/**
 * Register sidebars for Appearance > Widgets.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'register_sidebar' ) ) {

	return;
}

	add_action(
		'widgets_init',
		'developry_sidebars'
	);

	/**
	 * Attach sidebars to WP admin.
	 *
	 * @since 1.0.0
	 */
	function developry_sidebars() {

		// Register widget area for the sidebar.
		register_sidebar(
			array(
				'name' 			=> sprintf( esc_html__( 'Sidebar', 'developry-lite' ) ),
				'id'   		 	=> 'sidebar-1',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);

		// Register widget area for the footer (left columns).
		register_sidebar(
			array(
				'name' 			=> sprintf( esc_html__( 'Footer 1', 'developry-lite' ) ),
				'id'   			=> 'footer-1',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);

		// Register widget area for the footer (middle column).
		register_sidebar(
			array(
				'name' 			=> sprintf( esc_html__( 'Footer 2', 'developry-lite' ) ),
				'id'   			=> 'footer-2',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);

		// Register widget area for the footer (right column).
		register_sidebar(
			array(
				'name'			=> sprintf( esc_html__( 'Footer 3', 'developry-lite' ) ),
				'id'   			=> 'footer-3',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);

		// Register widget area for the for copyright (change the layout and remove the default state).
		register_sidebar(
			array(
				'name'			=> sprintf( esc_html__( 'Copyright', 'developry-lite' ) ),
				'id'   			=> 'copyright-1',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);
	}
