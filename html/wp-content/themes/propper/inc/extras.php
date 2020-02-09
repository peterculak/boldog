<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package propper
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function propper_body_classes( $classes ) {	
	
	$classes[] = "has-loading-screen links-hover-effect";
	
	return $classes;
}
add_filter( 'body_class', 'propper_body_classes' );
