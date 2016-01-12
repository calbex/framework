<?php
/**
 * Framework functions.
 *
 * @package framework
 */

if ( ! function_exists( 'framework_setup' ) ) :
/**
 * Theme setup
 *
 * Sets theme defaults and initalises WordPress features.
 */
function framework_setup() {

	// Translate theme into multiple languages.
	// load_theme_textdomain( 'framework', get_template_directory() . '/languages' );

	// Adds posts and comments feeds into wp_head().
	add_theme_support( 'automatic-feed-links' );

	// WordPress generates our <title> tag.
	add_theme_support( 'title-tag' );

	// Enable post thumbnails.
	// add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'framework' ),
	) );

	// Use valid HTML5 markup instead of the core markup.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Enable post formats.
	/* add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link'
	) );

	// Custom backgrounds.
	add_theme_support( 'custom-background', array(
		'default-color' => 'fff',
		'default-image' => ''
	) ); */

}
add_action( 'after_setup_theme', 'framework_setup' );
endif; // framework_setup

/**
 * Set content width.
 */
function framework_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'framework_content_width', 680 );

}
add_action( 'after_setup_theme', 'framework_content_width', 0 );

/**
 * Widget areas.
 */
function framework_widgets() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'framework' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'framework_widgets' );

/**
 * Enqueue scripts and styles.
 */
function framework_scripts() {

	// Styles.
	wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '1' );

	// Scripts.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/framework.js', array(), '1', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'framework_scripts' );

/**
 * Custom template tags.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * JetPack.
 */
// require get_template_directory() . '/inc/jetpack.php';
