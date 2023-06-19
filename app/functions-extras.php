<?php
/**
 * Default extras template
 *
 * @package   Creativity
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/creativity
 */

use function Backdrop\Font\enqueue;

/**
 * Changes the theme template path to the `public/views` folder.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
add_filter( 'backdrop/template/path', function() {

	return 'public/views';
} );

add_action( 'backdrop/templates/register', function( $templates ) {
	$templates->add(
		'template-custom-sidebar.php', [
			'label' => esc_html__( 'Custom Sidebar', 'silver-quantum' ),
			'post_types' => [ 'page' ]
		]
	);

	$templates->add(
		'template-left-sidebar.php', [
			'label' => esc_html__( 'Left Sidebar', 'silver-quantum' ),
			'post_types' => [ 'page' ]
		]
	);

	$templates->add(
		'template-right-sidebar.php', [
			'label' => esc_html__( 'Right Sidebar', 'silver-quantum' ),
			'post_types' => [ 'page' ]
		]
	);
} );

// Example usage
add_action( 'wp_enqueue_scripts', function() {

	array_map( function( $file ) {
		enqueue( $file );
	}, [
		'fira-sans',
		'merriweather',
		'tangerine'
	] );
} );