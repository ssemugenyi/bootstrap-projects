<?php
/**
 * Theme functions/classes with support to basic and custom WordPress components.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

	defined( 'ABSPATH' ) || exit;

	// Theme features files are included bellow.
	require_once get_template_directory() . '/inc/plugins/tgm-plugin-activation.php';

	require_once get_template_directory() . '/inc/theme-options.php';

	require_once get_template_directory() . '/inc/theme-plugins.php';
	
	require_once get_template_directory() . '/inc/theme-starter.php';
	
	require_once get_template_directory() . '/inc/theme-support.php';

	require_once get_template_directory() . '/inc/menus.php';
	
	require_once get_template_directory() . '/inc/scripts.php';
	
	require_once get_template_directory() . '/inc/sidebars.php';
	
	require_once get_template_directory() . '/inc/styles.php';

	$theme_options = get_theme_mod( 'developry_theme_options' );
