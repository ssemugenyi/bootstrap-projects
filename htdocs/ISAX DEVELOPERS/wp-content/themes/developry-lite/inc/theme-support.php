<?php
/**
 * Add basic WP theme support components; customize exceprts.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'add_theme_support' ) ) {

	return;
}

	add_action(
		'after_setup_theme',
		'developry_theme_support'
	);

	/**
	 * Load all theme support features
	 *
	 * @since 1.0.0
	 */
	function developry_theme_support() {

		// Laoding theme text domain for translation.
		load_theme_textdomain( 'developry-lite' );

		// Theme default content width.
		if ( ! isset( $content_width ) ) {

			$content_width = 640;
		}

		// Theme editor styles based on the user selecton from the WP Customizer.
		$theme_options = get_theme_mod( 'developry_theme_options' );

		if ( ! empty( $theme_options['bootstrap_theme'] )
			&& 'skeleton' !== $theme_options['bootstrap_theme'] ) {

			add_editor_style( get_template_directory_uri() . '/assets/css/themes/' . $theme_options['bootstrap_theme'] . '.min.css' );

		} else {
			
			add_editor_style( get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
		}

		// Theme additional admin area styles.
		add_editor_style( get_template_directory_uri() . '/assets/css/admin.min.css' );

		// Widget sidebars can use selective refresh in the Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for custom logo.
		add_theme_support(
			'custom-logo', array(
				'width'       => 250,
				'height'      => 75,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);

		// Enable support for custom headers with default one loaded.
		add_theme_support( 'custom-header',
			array(
				'default-color' => '#f9f9f9',
				'default-image' => get_template_directory_uri() . '/assets/img/placeholder.jpg',
				'width'         => 2000,
				'height'        => 1200,
				'uploads'       => true,
				'flex-width'    => true,
				'flex-heigt'    => true,
			)
		);

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'custom-background',
			array(
				'default-color' => '#f9f9f9',
			)
		);

		// Enable support for Excerpts on pages.
		add_post_type_support( 'page', 'excerpt' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails',
			array(
				'post',
				'page',
			)
		);

		set_post_thumbnail_size( 2000, 1200, true );

		// Switch default core markup for search form, comment form, and comments.
		add_theme_support( 'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
	}

	add_action(
		'excerpt_length',
		'developry_excerpt_length',
		999
	);

	/**
	 * Change the default post/page exceprt length
	 *
	 * @since 1.0
	 * @param int $length WP default exceprt length.
	 */
	function developry_excerpt_length( $length ) {

		return 55;
	}

	add_action(
		'excerpt_more',
		'developry_excerpt_more'
	);

	/**
	 * Remove the [...] from excerpts, there's Continue reading... link added manually.
	 *
	 * @since 1.0
	 */
	function developry_excerpt_more() {

		return '';
	}
