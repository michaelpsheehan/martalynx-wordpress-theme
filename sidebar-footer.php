<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marta_Lynx
 */

if ( ! is_active_sidebar( 'footer-widgets' ) ) {
	return;
}
?>

<aside id="footer-widget-area" class="widget-area footer-widgets">
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
</aside><!-- #secondary -->
