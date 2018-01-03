<?php


function _s_child_scripts() {
    wp_enqueue_style( '_s-child-style', get_stylesheet_uri(), array( '_s-style' ) );
}
add_action( 'wp_enqueue_scripts', '_s_child_scripts' );