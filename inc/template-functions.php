<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Marta_Lynx
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function martalynx_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
		$classes[] = 'archive-view';
        
	}

// add a class telling us if it is sidebar   
if( is_active_sidebar('sidebar-1')) {
    $classes[] = 'has-sidebar';
} else {
    $classes[] = 'no-sidebar';
}
    
    
if( is_front_page() ) {
    $classes[] = 'is-home-page';
} 
    
if ( is_post_type_archive(array('books', 'short-stories'))) {
    $classes[] = 'archive-book-page';
}
    
    
	return $classes;
}
add_filter( 'body_class', 'martalynx_body_classes' );









/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function martalynx_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'martalynx_pingback_header' );

