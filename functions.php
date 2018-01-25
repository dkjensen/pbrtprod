<?php
/**
 * _s_child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s_child
 */


/**
 * Enqueue scripts and styles.
 */
function _s_child_scripts() {
    wp_enqueue_style( 'lato-font', '//fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i' );
    wp_enqueue_style( '_s_child-style', get_stylesheet_uri(), array( '_s-style' ) );
}
add_action( 'wp_enqueue_scripts', '_s_child_scripts' );