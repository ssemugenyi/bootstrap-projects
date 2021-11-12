<?php
/**
 * Template (part) displaying default and widgetized sidebar area on posts and pages.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( is_active_sidebar( 'sidebar-1' ) ) {

	dynamic_sidebar( 'sidebar-1' );

} else {

	the_widget( 'WP_Widget_Search' );
	the_widget( 'WP_Widget_Recent_Posts' );
	the_widget( 'WP_Widget_Recent_Comments' );
	the_widget( 'WP_Widget_Archives' );
	the_widget( 'WP_Widget_Meta' );
}
