<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/focechild.css',array(),time() );
    wp_enqueue_script( 'focechildjs', get_stylesheet_directory_uri() . '/assets/js/focechild.js', array(), time(), true );
    wp_enqueue_script( 'swipperjs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js', array(), time(), true );
    wp_enqueue_script( 'skrollrjs', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array(), time(), true );
}



// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}