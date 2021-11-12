<?php
/**
 * Template (part) displaying search form on header.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

	the_widget(
		'WP_Widget_Search',
		array(
			'title' => '',
		)
	);
