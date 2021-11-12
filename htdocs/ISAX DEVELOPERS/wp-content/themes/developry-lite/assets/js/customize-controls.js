/**
 * WP Customizer control area actions.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

(function( $, api ) {

	api.sectionConstructor['developry_docs'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

}) ( jQuery, wp.customize );
