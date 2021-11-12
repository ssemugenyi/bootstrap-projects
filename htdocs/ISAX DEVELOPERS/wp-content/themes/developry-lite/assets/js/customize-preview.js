/**
 * WP Customizer live preview area action.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

( function( $, api ) {

	api( 'developry_theme_options[sidebar]', function( setting ) {
		setting.bind( function( option ) {
			if ( 'no-sidebar' === option ) {
				$( '.sidebar' ).parent().hide();
				$( '.sidebar' ).parent().prev().attr( 'class', '' ).addClass( 'col-12' );
			} else {
				$( '.sidebar' ).parent().show();
				$( '.sidebar' ).parent().prev().attr( 'class', '' ).addClass( 'col-12 col-md-8' );
				if ( 'order-first' === option ) {
					$( '.sidebar' ).parent().removeClass( 'order-last' ).addClass( 'order-first' );
				} else {
					$( '.sidebar' ).parent().removeClass( 'order-first' ).addClass( 'order-last' );
				}
			}
		} );
	});

	api( 'developry_theme_options[container]', function( setting ) {
		setting.bind( function( option ) {
			if ( '-fluid' === option ) {
				$( '#body > div' ).attr( 'class', '' ).addClass( 'container' + option );
			} else {
				$( '#body > div' ).attr( 'class', '' ).addClass( 'container' );
			}
		} );
	});

	api( 'developry_theme_options[featured_image]', function( setting ) {
		setting.bind( function( option ) {
			if ( 'show' === option ) {
				$( '#cover-selector .cover' ).show();
				$( '#cover-selector' ).css( { 'min-height' : '100vh' } );
				$( '#body' ).attr( 'style', '' );
			} else {
				$( '#cover-selector' ).attr( 'style', '' );
				$( '#cover-selector .cover' ).hide();
				$( '#body' ).css( { 'margin' : '0' } );
			}
		} );
	});

}) ( jQuery, wp.customize );
