<?php

/**
 * Fungsi untuk enqueue style child theme.
 */
function hello_elementor_child_enqueue_styles() {
  wp_enqueue_style( 'hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-theme-style'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles' );

/**
 * Tambahkan fungsi-fungsi kustom Anda di sini.
 * Contoh:
 */

/**
 * 1. Mendaftarkan widget area baru.
 */
function hello_elementor_child_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Child Theme Sidebar', 'hello-elementor-child' ),
    'id'            => 'sidebar-child',
    'description'   => __( 'Sidebar untuk child theme.', 'hello-elementor-child' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'hello_elementor_child_widgets_init' );

/**
 * 2. Mengubah excerpt length.
 */
function hello_elementor_child_excerpt_length( $length ) {
  return 30; // Ubah angka 30 sesuai keinginan Anda.
}
add_filter( 'excerpt_length', 'hello_elementor_child_excerpt_length' );

/**
 * 3. Contoh fungsi lainnya:
 *    - Menambahkan custom post type.
 *    - Mengubah tampilan header atau footer.
 *    - Menambahkan shortcode.
 *    - Dan lain-lain.
 */

