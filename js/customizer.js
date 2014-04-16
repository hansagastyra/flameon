/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-title a, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
        // Footer Text
        wp.customize( 'theme_footer_text', function( value ) {
                value.bind( function( to ) {
                        $( '.theme-footer-text' ).text( to );
                } );
        } );
        // Footer Text Color
        wp.customize( 'theme_footer_text_color', function( value ) {
                value.bind( function( to ) {
                        $( '.site-footer, .site-footer a' ).css( 'color', to );
                } );
        } );
        // Theme Primary Color
        wp.customize( 'theme_primary_color', function( value ) {
                value.bind( function( to ) {
                        $( '.theme-primary-color' ).css( 'background', to );
                        $( '.site-content a, .required' ).css( 'color', to );
                } );
        } );
        // Theme Secondary Color
        wp.customize( 'theme_secondary_color', function( value ) {
                value.bind( function( to ) {
                        $( '.theme-secondary-color' ).css( 'background', to );
                } );
        } );
        // Theme Text Color
        wp.customize( 'theme_text_color', function( value ) {
                value.bind( function( to ) {
                        $( 'body, .site-content h1, .site-content h2, .site-content h3, .site-content h4,\n\
                                .site-content h5, .site-content h6, .site-content blackquote, .site-content p, \n\
                                .site-content li, .entry-title a, .page-title a' ).css( 'color', to );
                } );
        } );
        // Theme Menu Text Color
        wp.customize( 'theme_menu_text_color', function( value ) {
                value.bind( function( to ) {
                        $( '.main-navigation li a' ).css( 'color', to );
                } );
        } );
} )( jQuery );