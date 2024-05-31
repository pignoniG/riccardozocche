<?php
/**
 * Zocche functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zocche
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zocche_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Zocche, use a find and replace
		* to change 'zocche' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'zocche', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'zocche' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'zocche_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'zocche_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zocche_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zocche_content_width', 640 );
}
add_action( 'after_setup_theme', 'zocche_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zocche_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'zocche' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'zocche' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'zocche_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zocche_scripts() {
	wp_enqueue_style( 'zocche-style', get_stylesheet_uri(), array() );
	wp_enqueue_style( 'zocche-style-foundation', get_template_directory_uri() . '/css/foundation.css' );

	wp_enqueue_script( 'zocche-jquery', "https://code.jquery.com/jquery-3.7.1.slim.min.js" );

	wp_enqueue_style( 'zocche-style-typekit', 'https://use.typekit.net/new2xpo.css' );

	
	/** wp_enqueue_style( 'zocche-style-flickity', get_template_directory_uri() . '/css/flickity.css' ); */

	wp_style_add_data( 'zocche-style', 'rtl', 'replace' );

	wp_enqueue_script( 'zocche-navigation', get_template_directory_uri() . '/js/navigation.js', array(), true );
	
	wp_enqueue_script( 'zocche-customizer', get_template_directory_uri() . '/js/customizer.js', array(), true );
	
	/** wp_enqueue_script( 'zocche-flickity', get_template_directory_uri() . '/js/vendor/flickity.pkgd.js', array(), true ); */
	wp_enqueue_style( 'zocche-style-fundation_icons', get_template_directory_uri() . '/assets/foundation-icons/foundation-icons.css' );

	
	
	wp_enqueue_style( 'zocche-style-app', get_template_directory_uri() . '/css/app.css' );

	wp_enqueue_script( 'zocche-app', get_template_directory_uri() . '/js/app.js', array(), true );

	wp_enqueue_script( 'zocche-foundation', get_template_directory_uri() . '/js/vendor/foundation.js', array(), true );









	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zocche_scripts' );



function home_js(){
    if ( is_front_page()  ){
    	
    	wp_enqueue_script( 'zocche-isotope', get_template_directory_uri() . '/js/vendor/isotope.pkgd.min.js', array(), '1', true );
    	wp_enqueue_script( 'zocche-page-home', get_template_directory_uri() . '/js/page-home.js', array(), '1', true );
    }
}
add_action('wp_enqueue_scripts', 'home_js');

function works_js(){
    if ( is_page('works') or  is_page('progetti')){
    	
    	wp_enqueue_script( 'zocche-isotope', get_template_directory_uri() . '/js/vendor/isotope.pkgd.min.js', array(), '1', true );
    	wp_enqueue_script( 'zocche-page-works', get_template_directory_uri() . '/js/page-works.js', array(), '1', true );
    }
}
add_action('wp_enqueue_scripts', 'works_js');

function about_js(){
    if ( is_page('about')){
    	wp_enqueue_script( 'zocche-isotope', get_template_directory_uri() . '/js/vendor/isotope.pkgd.min.js', array(), '1', true );
    	wp_enqueue_script( 'zocche-page-about', get_template_directory_uri() . '/js/page-about.js', array(), '1', true );
    }
}
add_action('wp_enqueue_scripts', 'about_js');

function services_js(){
    if ( is_page('services') or  is_page('servizi')){
    	wp_enqueue_script( 'zocche-flickity', get_template_directory_uri() . '/js/vendor/flickity.pkgd.js', array(), true );
    	wp_enqueue_script( 'zocche-page-services', get_template_directory_uri() . '/js/page-services.js', array(), '1', true );
    	wp_enqueue_script( 'zocche-isotope', get_template_directory_uri() . '/js/vendor/isotope.pkgd.min.js', array(), '1', true );
    }
}
add_action('wp_enqueue_scripts', 'services_js');

function project_js(){
    if(is_singular( 'project' )){
    	wp_enqueue_script( 'zocche-flickity', get_template_directory_uri() . '/js/vendor/flickity.pkgd.js', array(), true );
    	
    	wp_enqueue_script( 'zocche-single-project', get_template_directory_uri() . '/js/single-project.js', array(), _S_VERSION, true );

    }
}
add_action('wp_enqueue_scripts', 'project_js');



function mytranslate($string)
{

	$arrayString=  explode(" | ", $string );
	$retval=$arrayString[0];
	if (ICL_LANGUAGE_CODE=="it") {
		if ($arrayString[1]) {
			$retval=$arrayString[1];
		}
	}
   
    return $retval;
}
function mytranslate_force($string,$lang)
{

	$arrayString=  explode(" | ", $string );
	$retval=$arrayString[0];
	if ($lang=="it") {
		if ($arrayString[1]) {
			$retval=$arrayString[1];
		}
		
	}
   
    return $retval;
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

