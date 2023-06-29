<?php
/**
 * Default assets functions
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

namespace SilverQuantum;
use function Backdrop\Mix\asset;

/**
 * Enqueue scripts/styles for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {

	// Rather than enqueue the main style.css stylesheet, we are going to enqueue screen.css.
	wp_enqueue_style( 'silver-quantum-screen', asset( 'assets/css/screen.css' ), null, null );

	// Enqueue theme scripts
	wp_enqueue_script( 'creativity-app', asset( 'assets/js/app.js' ), [ 'jquery' ], null, true );

	// Enqueue Navigation.
	wp_enqueue_script( 'silver-quantum-navigation', asset( 'assets/js/navigation.js' ), null, null, true );
	wp_localize_script( 'silver-quantum-navigation', 'silverQuantumScreenReaderText', [
		'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'creativity' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'creativity' ) . '</span>',
	] );

	// Loads ClassicPress' comment-reply script where appropriate.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );

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
