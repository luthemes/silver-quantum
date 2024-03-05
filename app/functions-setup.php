<?php
/**
 * Theme Setup
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

/**
 * Define namespace
 */
namespace SilverQuantum;

use function Backdrop\Theme\is_classicpress;

/**
 * Setup Theme Support.
 *
 * This is where all the add_theme_support(); will happen.
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/add_theme_support/
 * @link   https://developer.wordpress.org/themes/basics/theme-functions/
 * @link   https://developer.wordpress.org/reference/functions/load_theme_textdomain/
 */
add_action( 'after_setup_theme', function() {

	// Automatically add the `<title>` tag.
	add_theme_support( 'title-tag' );

	// Automatically add feed links to `<head>`.
	add_theme_support( 'automatic-feed-links' );

	if ( ! is_classicpress() ) {
		// Outputs HTML5 markup for core features.
		add_theme_support( 'html5', [
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form'
		] );
	}

	// Adds featured image support.
	add_theme_support( 'post-thumbnails' );

	/**
	 * By add_image_size( 'silver-quantum-small-thumbnails', 324, 324, true );. This should be used for content in the home for blogs.
	 */
	add_image_size( 'silver-quantum-small-thumbnails', 324, 324, true );

	/**
	 * By add_image_size( 'silver-quantum-medium-thumbnails', 810, 396, true );. This should be used for content that has sidebars.
	 */
	add_image_size( 'silver-quantum-medium-thumbnails', 810, 396, true );

	/**
	 * By add_image_size( 'silver-quantum-large-thumbnails', 1170, 614, true );. This should be used for content that has no sidebars.
	 */
	add_image_size( 'silver-quantum-large-thumbnails', 1170, 614, true );



	/**
	 * Load theme translation.
	 */
	load_theme_textdomain( 'silver-quantum', get_parent_theme_file_path( '/languages ' ) );

	// Add custom logo support.
	add_theme_support( 'custom-logo', [
		'width'       => 1164,
		'height'      => 320,
		'flex-width'  => true,
		'flex-height' => true,
	] );
} );

/**
 * Register menus.
 *
 * @link   https://developer.wordpress.org/reference/functions/register_nav_menus/
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'init', function() {

	register_nav_menus( [
		'primary'	=> esc_html__( 'Primary Navigation', 'silver-quantum' ),
		'social' => esc_html__( 'Social Navigation', 'silver-quantum' )
	] );

}, 5 );

/**
 * Register sidebars.
 *
 * @link   https://developer.wordpress.org/reference/functions/register_sidebar/
 * @link   https://developer.wordpress.org/reference/functions/register_sidebars/
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'widgets_init', function() {

	$args = [
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	];

	$sidebars = [
		[
			'id' => 'primary',
			'name' => esc_html__( 'Primary', 'silver-quantum' )
		],
		[
			'id' => 'secondary',
			'name' => esc_html__( 'Secondary', 'silver-quantum' )
		],
		[
			'id' => 'custom',
			'name' => esc_html__( 'Custom', 'silver-quantum' )
		],
	];

	foreach ( $sidebars as $sidebar ) {
		register_sidebar( array_merge( $sidebar, $args ) );
	}
}, 5 );

/**
 * Add support for custom header.
 */
add_action( 'after_setup_theme', function() {
	add_theme_support( 'custom-header',
		[
			'default-text-color' => 'ffffff',
			'default-image'      => get_parent_theme_file_uri( '/public/images/header-image.jpg' ),
			'height'             => 320,
			'max-width'          => 1164,
			'width'              => 1164,
			'flex-height'        => false,
			'flex-width'         => false,
		]
	);

	register_default_headers( [
		'header-image' => [
			'url'           => '%s/public/images/header-image.jpg',
			'thumbnail_url' => '%s/public/images/header-image.jpg',
			'description'   => esc_html__( 'Header Image', 'silver-quantum' ),
		],
	] );
} );