<?php
/**
 * Marta Lynx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Marta_Lynx
 */

if ( ! function_exists( 'martalynx_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function martalynx_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Marta Lynx, use a find and replace
		 * to change 'martalynx' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'martalynx', get_template_directory() . '/languages' );

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
        
        
		add_image_size( 'martalynx-full-bleed', 2000, 1200, true );
        add_image_size( 'martalynx-index-img', 1080, 730, true );
        add_image_size( 'martalynx-index-img-small', 540, 365, true );
        add_image_size( 'martalynx-index-book-cover', 300, 477, true );
        add_image_size( 'martalynx-archive-book-cover', 190, 302, true );
		
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'martalynx' ),
			'social' => esc_html__( 'Social Media Menu', 'martalynx' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'martalynx_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 1273,
			'width'       => 4000,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'martalynx_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function martalynx_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'martalynx_content_width', 640 );
}
add_action( 'after_setup_theme', 'martalynx_content_width', 0 );





/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @origin Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function martalynx_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 900 <= $width ) {
		$sizes = '(min-width: 900px) 700px, 900px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2' ) ) {
		$sizes = '(min-width: 900px) 600px, 900px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'martalynx_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @origin Twenty Seventeen 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function martalynx_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'martalynx_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @origin Twenty Seventeen 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function martalynx_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {

	if ( !is_singular() ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 900px) 90vw, 800px';
		} else {
			$attr['sizes'] = '(max-width: 1000px) 90vw, 1000px';
		}
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'martalynx_post_thumbnail_sizes_attr', 10, 3 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function martalynx_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'martalynx' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'martalynx' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'martalynx' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add widgets here.', 'martalynx' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );




}



add_action( 'widgets_init', 'martalynx_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function martalynx_scripts() {
    
    // Enqueue Google font s
    
    wp_enqueue_style('marta-lynx-fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700|Libre+Baskerville' );
      

    // function for header paralax
    
    
    //other bits
    
    wp_enqueue_style( 'martalynx-style', get_stylesheet_uri() );
    
   
    
    // ---------- jQuery scripts -----
    
        

// 	wp_enqueue_script('martalynx-jquery-scripts', get_template_directory_uri() . '/Resources/Js/script.js', array('jquery'), '20172910', true);
	
// wp_enqueue_script('martalynx-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20182310', true);
    




wp_enqueue_script('martalynx-javascript-scripts', get_template_directory_uri() . '/Resources/Js/script.js', array(), '20180910', true);
   
wp_enqueue_script('martalynx-functions', get_template_directory_uri() . '/js/functions.js', array(), '20180910', true);
    
    
    
    
    
    

	wp_enqueue_script( 'martalynx-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'martalynx-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'martalynx_scripts' );

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



/**
 * Load SVG icon functions
 */

require get_template_directory() . '/inc/icon-functions.php';





/**
 * create custom post types
 */


function martalynx_custom_posttypes() {
    
    // ---------------------- Books Post Type------------------
    $labels = array(
		'name'               => 'Books',
		'singular_name'      =>  'Book', 
		'menu_name'          => 'Books',
		'name_admin_bar'     => 'Book',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Book', 
		'new_item'           => 'New Book',
		'edit_item'          => 'Edit Book',
		'view_item'          => 'View Book',
		'all_items'          => 'All Books',
		'search_items'       => 'Search Books', 
		'parent_item_colon'  =>  'Parent Books:',
		'not_found'          => 'No books found.', 
		'not_found_in_trash' => 'No books found in Trash.', 
        'featured_image'     => 'book cover',
'set_featured_image'         => 'set book cover',
'remove_featured_image'      => 'remove book cover',
'use_featured_image'         =>  'use as book cover'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Description.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'books', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
        'menu_icon'          => 'dashicons-book',
		'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt', )
	);

    register_post_type('books', $args);
    
    
// -----------  Short Stories Post Type------------    
 $labels = array(
		'name'               => 'Short stories',
		'singular_name'      =>  'Short Story', 
		'menu_name'          => 'Short Stories',
		'name_admin_bar'     => 'Short Stories',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Short story', 
		'new_item'           => 'New Short Story',
		'edit_item'          => 'Edit Short Story',
		'view_item'          => 'View Short Stories',
		'all_items'          => 'All Short Stories',
		'search_items'       => 'Search Short stories', 
		'parent_item_colon'  =>  'Parent Short stories:',
		'not_found'          => 'No Short stories found.', 
		'not_found_in_trash' => 'No Short stories found in Trash.', 
        'featured_image'     => 'Short story cover',
'set_featured_image'         => 'set short story cover',
'remove_featured_image'      => 'remove short story cover',
'use_featured_image'         =>  'use as short story cover'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Description.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'short-stories', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
        'menu_icon'          => 'dashicons-book-alt',
		'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' )
	);

    register_post_type('short-stories', $args);
    






}


add_action('init', 'martalynx_custom_posttypes');

function my_rewrite_flush() {
    martalynx_custom_posttypes();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'my_rewrite_flush' );


//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="fb:admins" content="100004467887302"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="martalynx.com"/>';
		 echo '<meta property="fb:app_id" content="187885618505226"/>';
	 echo '<meta property="og:description" content=" ' . the_excerpt() . ' "/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image="http://www.martalynx.com/wp-content/themes/martalynx/images/book-bed2.jpg"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
