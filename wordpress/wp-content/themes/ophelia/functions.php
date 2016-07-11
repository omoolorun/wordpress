<?php
/**
 * Ophelia functions and definitions
 *
 * @package Ophelia
 */
 
/*
 * Loads the Options Panel
 *
 */

/*----------------------------*/
/*	Adding customizer with kirki 
/*----------------------------*/ 
include_once( trailingslashit(get_template_directory()) . '/lib/customizer.php' );
include_once( trailingslashit(get_template_directory()) . '/lib/kirki/kirki.php' );

 
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @see http://developer.wordpress.com/themes/content-width/Enqueue
 */
 
if ( ! isset( $content_width ) ) {
	$content_width = 1135; /* pixels */
}

/**
 * Theme support and thumbnail sizes
*/
 
if( ! function_exists( 'ophelia_theme_setup' ) ) {

	function ophelia_theme_setup() {
	
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on BuildPress, use a find and replace
		 */
		 
		load_theme_textdomain( 'ophelia', get_template_directory() . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 			

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		 
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150, true );
		add_image_size( 'ophelia-news-box', 355, 240, true );
		add_image_size( 'ophelia-portfolio-box', 530, 356, true );

		// Menus
		add_theme_support( 'menus' );
		register_nav_menu( 'main-menu', _x( 'Main Menu', 'backend', 'ophelia' ) );

		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// add excerpt support for pages
		add_post_type_support( 'page', 'excerpt' );

		// Add CSS for the TinyMCE editor
		add_editor_style();
	}
	add_action( 'after_setup_theme', 'ophelia_theme_setup' );
}


/**
 * Enqueue CSS stylesheets
 */
 
if( ! function_exists( 'ophelia_enqueue_styles' ) ) {
	function ophelia_enqueue_styles() {
	
	    // main style
	
	    wp_enqueue_style( 'ophelia-style', get_stylesheet_uri() );	

		// owl theme
		wp_enqueue_style( 'ophelia-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0' );
		
		// transitions
		wp_enqueue_style( 'ophelia-owl-transitions-main', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0' ); 		
		
		// owl carousel
		wp_enqueue_style( 'ophelia-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0' );
		
		// font awesome
		wp_enqueue_style( 'ophelia-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0' );
		
		
	}
	add_action( 'wp_enqueue_scripts', 'ophelia_enqueue_styles' );
}

/**
 * Enqueue JS scripts
 */
 
if( ! function_exists( 'ophelia_enqueue_scripts' ) ) {
	function ophelia_enqueue_scripts() {	
		
		// OWL carousel for sliders
		wp_enqueue_script( 'ophelia-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), null );				
		
		// main for script js
		wp_enqueue_script( 'ophelia-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null );			
		
	
		// for nested comments
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'ophelia_enqueue_scripts' );
}

// load script for  IE9

function ophelia_ie_support_header() {
    echo '<!--[if lt IE 9]>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/assets/js/html5.js' ) . '"></script>'. "\n";
    echo '<![endif]-->'. "\n";
}

add_action( 'wp_head', 'ophelia_ie_support_header', 1 );


/**
 * Register sidebars for Ophelia
 *
 * @package Ophelia
 */

function ophelia_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => __( 'Blog Sidebar', "ophelia"),
		'id' => 'blog-sidebar',
		'description' => __( 'Sidebar on the blog layout.', "ophelia"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	
	// Footer Sidebar
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 1', "ophelia"),
		'id' => 'footer-widget-area-1',
		'description' => __( 'The footer widget area', "ophelia"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 2', "ophelia"),
		'id' => 'footer-widget-area-2',
		'description' => __( 'The footer widget area', "ophelia"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	

	register_sidebar(array(
		'name' => __( 'Footer Widget Area 3', "ophelia"),
		'id' => 'footer-widget-area-3',
		'description' => __( 'The footer widget area', "ophelia"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	

	register_sidebar(array(
		'name' => __( 'Footer Widget Area 4', "ophelia"),
		'id' => 'footer-widget-area-4',
		'description' => __( 'The footer widget area', "ophelia"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));		
}

add_action( 'widgets_init', 'ophelia_sidebars' );


// Create Function Credits

if ( ! function_exists( 'ophelia_credits' ) ) :
	function ophelia_credits() {
	
		$text = __( 'Theme created by', "ophelia").' <a href="'.esc_url('http://www.themestune.com/').'">'.__( 'Themes Tune', "ophelia").'</a>. '.__( 'Powered by', "ophelia").'<a href="'.esc_url('http://wordpress.org/').'"> '.__( 'WordPress.org', "ophelia").'</a>';
		
		echo apply_filters( 'ophelia_credits_text', $text) ;
		
	}
endif; 

add_action( 'ophelia_display_credits', 'ophelia_credits' );
?>