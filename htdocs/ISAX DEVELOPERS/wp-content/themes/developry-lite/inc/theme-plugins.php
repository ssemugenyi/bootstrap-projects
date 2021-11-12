<?php
/**
 * Using TGMPA plugin script reccommend to the user some plugins that go with the theme.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'tgmpa' ) ) {

	return;
}

	add_action(
		'tgmpa_register',
		'developry_required_plugins'
	);

	/**
	 * Configurate and attach plugins to Appearance > Install Plugins.
	 *
	 * @since 1.0.0
	 */
	function developry_required_plugins() {

		$plugins = array(
			array(
				'name'     => 'Contact Form 7',
				'slug'     => 'contact-form-7',
				'required' => false,
			),
			array(
				'name'     => 'Developry Google Fonts',
				'slug'     => 'developry-google-fonts',
				'required' => false,
			),
		);

		$config = array(
			'id'           => 'developry-lite',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'has_notices'  => true,
			'dismissable'  => false,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		);

		tgmpa( $plugins, $config );
	}
