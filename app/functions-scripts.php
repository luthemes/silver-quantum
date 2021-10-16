<?php
/**
 * Silver Quantum ( functions-scripts.php )
 *
 * @package   Silver Quantum
 * @copyright Copyright (C) 2014-2020. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace SilverQuantum;

/**
 * Enqueue Scripts and Styles
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		/**
		 * Rather than enqueue the main stylesheet, we are going to enqueue sceen.css since all of the styles will
		 * go here. We only need parse the information for the Theme in style.css so that it can be activated.
		 */
		wp_enqueue_style( 'silver-quantum-screen', get_parent_theme_file_uri( 'public/assets/css/screen.css' ), array(), '1.0.0' );

		/**
		 * This allows users to comment by clicking on reply so that it gets nested.
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
);

add_action( 'wp_enqueue_scripts', function() {
	$text_color = get_header_textcolor();
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $text_color ) {
		return;
	}
	$value      = display_header_text() ? sprintf( 'color: #%s', esc_html( $text_color ) ) : 'display: none;';
	
	$custom_css = "
		.site-header .site-branding .site-title a,
		.site-header .site-branding .site-description {
			{$value}
		}
	";
	wp_add_inline_style( 'silver-quantum-screen', $custom_css );
} );

add_action( 'wp_enqueue_scripts', function() {
	$custom_image = esc_url( get_theme_mod( 'header_image', get_parent_theme_file_uri( '/public/images/header-image.jpg' ) ) );
	
	$custom_css = "      
		.site-header.header-image {
			background: url({$custom_image});
			background-attachment: fixed;
			background-position: center;
		}
		
		@media screen and (max-width: 30em) {
			.site-header {
				padding-top: 10em;
			}
		}

		@media screen and ( min-width: 30.063em ) and ( max-width: 37.5em ) {
			.site-header {
				padding-top: 15em;
			}
		}
	";
	wp_add_inline_style( 'silver-quantum-screen', $custom_css );
} );