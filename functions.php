<?php
function silverquantum_setup() {

// Setup Content Width value based on the theme's design and stylesheet.
if (!isset($content_width))
	$content_width = 650;
	
//Header Menu Section
register_nav_menu('header-menu', __('Header Menu', 'silverquantum'));

load_theme_textdomain( 'silverquantum', get_template_directory() . '/languages' );

// This theme supports a variety of post formats.
add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
	
// This theme styles the visual editor with editor-styles.css to mach the theme style.
add_editor_style();

// Adds RSS feed links to <head> for post and comments.
add_theme_support('automatic-feed-links');

// This theme uses a custom image size for featured images, display on a "standard" posts.
add_theme_support('post-thumbnails');
set_post_thumbnail_size(624, 9999); 

// This theme does support custom background color.
add_theme_support('custom-background', array(
	'default-color'	=> 'cccccc',
	)); 
	
add_theme_support('title-tag');

}
add_action('after_setup_theme', 'silverquantum_setup');

// Add Support for Custom Header Image.
require(get_template_directory() . '/include/custom-header.php');

function silverquantum_widgets_init() {
	register_sidebar( array (
		'name' 				=> __('Main Sidebar', 'silverquantum'),
		'id'				=> 'sidebar-1',	
		'description' 		=>__('Appear on Posts Only'),
		'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 		=> '</aside>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 		=> '</h2>',
	));
	
	register_sidebar( array (
		'name' 				=> __('Secondary Sidebar', 'silverquantum'),
		'id'				=> 'sidebar-2',	
		'description' 		=>__('Appear on Pages Only'),
		'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 		=> '</aside>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 		=> '</h2>',
	));

	register_sidebar( array (
		'name' 				=> __('Custom Sidebar', 'silverquantum'),
		'id'				=> 'sidebar-3',	
		'description' 		=>__('Appear on Custom Pages Only'),
		'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 		=> '</aside>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 		=> '</h2>',
	));
}
add_action( 'widgets_init', 'silverquantum_widgets_init' );

// Scripts
function silverquantum_scripts_styles() {
	wp_enqueue_style('silverquantum-style', get_stylesheet_uri());	
	
	/* Google API for Ubuntu Font */
	wp_enqueue_style('silverquantum-font-google', 'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');
	
	if (is_singular() && comments_open() && get_option( 'thread_comments' ))
		wp_enqueue_script( 'comment-reply' );
}
add_action('wp_enqueue_scripts', 'silverquantum_scripts_styles');

function silverquantum_content_nav() {  
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
}
// END pagination
?>
