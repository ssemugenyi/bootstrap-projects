/**
 * Add bootstrap classes with jQuery for quick customization.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

'use strict';

jQuery.noConflict();

( function( $ ) {

	$( window ).scroll( function() {

		var doc = document.documentElement;
		var top = ( window.pageYOffset || doc.scrollTop ) - ( doc.clientTop || 0 );

		// Scroll top toggler.
		if ( top > 360) {
			$( '.scrolltop' ).show();
		} else {
			$( '.scrolltop' ).hide();
		}
	} );

	$( function() {

		'use strict';

		$( 'body' ).animate( { opacity : 1, percent : 100 }, 400 );

		// Sub sub nav menu.
		$( '.sub-menu .menu-item-has-children > a' ).click( function( e ) {
			e.stopPropagation();
			e.preventDefault();
			$( this ).next( 'ul' ).toggle();
			return false;
		} );

		// Scrolling.
		$( document ).on( 'click', 'a[href="#scrolltop"]', function( e ) {
			$( 'html, body' ).animate( { scrollTop: 0 }, 'slow' );
			return false;
		});

		$( document ).on( 'click', 'a[href="#scrolldown"]', function( e ) {
			$( 'html, body' ).animate( {
				scrollTop: $( "#body" ).offset().top
			}, 'slow' );
			return false;
		});

		// Navbar.
		$( '.navbar-collapse div:first-child' ).addClass( 'navbar-nav mr-auto' );
		$( '.main-nav-menu, .main-nav-menu > ul' ).addClass( 'navbar-nav' );
		$( '.main-nav-menu ul > li, .main-nav-menu > li' ).addClass( 'nav-item' );
		$( '.main-nav-menu ul > li a, .main-nav-menu > li a' ).addClass( 'nav-link' );
		$( '.menu-item-has-children, .page_item_has_children' ).addClass( 'dropdown' );
		$( '.menu-item-has-children > a, .page_item_has_children > a' ).attr( 'aria-labelledby', $( '.menu-item-has-children' ).attr( 'id' ) );
		$( '.menu-item-has-children > a, .page_item_has_children > a' ).addClass( 'dropdown-toggle' );
		$( '.menu-item-has-children > a, .page_item_has_children > a' ).attr( 'href', '' );
		$( '.menu-item-has-children > a, .page_item_has_children > a' ).attr( 'data-toggle', 'dropdown' );
		$( '.sub-menu, .children' ).addClass( 'collapse dropdown-menu rounded-0 p' );
		$( '.sub-menu li, .children li' ).addClass( 'm-2' );
		$( '.sub-menu a, .children a' ).addClass( 'dropdown-item' );

		// Forms.
		$( 'select' ).addClass( 'custom-select' );
		$( 'input[type=text], input[type=search], input[type=email], input[type=url], textarea' ).addClass( 'form-control' );
		$( 'button, input[type=submit]' ).addClass( 'btn btn-dark' );

		// Gloabl.
		$( 'table' ).addClass( 'table table-striped table-light' );
		$( 'dl' ).addClass( 'row' );
		$( 'dt' ).addClass( '.col-12 col-sm-3' );
		$( 'dd' ).addClass( '.col-12 col-sm-9' );

		// Comments.
		$( '.comment-list' ).addClass( 'list-group mb-5' );
		$( '.comment-list > li' ).addClass( 'list-group-item list-group-item-action p-0' );
		$( '.comment-list .edit-link' ).addClass( 'ml-3' );
		$( '.comment-title' ).addClass( 'my-4' );
		$( '.comment-respond' ).addClass( 'p-5 mb-3 bg-light' );
		$( '.comment-respond textarea' ).addClass( 'form-control' );
		$( '.comment-meta' ).addClass( 'd-flex align-items-center justify-content-between bg-dark p-3 text-light' );
		$( '.comment-meta a' ).addClass( 'text-light text-uppercase' );
		$( '.comment-content' ).addClass( 'pt-4 px-4' );
		$( '.comment-body .reply' ).addClass( 'text-right' );
		$( '.comment-body .reply a' ).addClass( 'btn btn-sm' );
		$( '.pingback .comment-body' ).addClass( 'p-4' );

		// Other, miscellaneous, etc.
		$( '.nav-links' ).addClass( 'pagination mb-3' );
		$( '.nav-links .page-numbers' ).addClass( 'd-flex page-item page-link text-center w-100 align-items-center justify-content-center' );
	} );
} )( jQuery );
