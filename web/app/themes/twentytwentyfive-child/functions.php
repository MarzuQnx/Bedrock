<?php

// Enqueue style child theme
function my_twentytwentyfive_child_styles() {
    wp_enqueue_style( 'twentytwentyfive-style', get_parent_theme_file_uri( 'style.css' ) ); // Style induk
    wp_enqueue_style( 'twentytwentyfive-child-style', get_stylesheet_directory_uri() . '/style.css', array('twentytwentyfive-style'), wp_get_theme()->get('Version') ); // Style child
}
add_action( 'wp_enqueue_scripts', 'my_twentytwentyfive_child_styles' );