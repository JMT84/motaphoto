<?php

//chargement du fichier CSS//
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'motaphoto-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css') );
}

//chargement du fichier JS//
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts() {
    wp_enqueue_script( 'motaphoto-script', get_stylesheet_directory_uri() . '/js/script.js', array(), true );
}

//intégration du menu header "principal"//
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( "main-menu", __( 'Menu principal', 'text-domain' ) );
}

//intégration du menu footer//
add_action('after_setup_theme', 'register_footer_menu');
function register_footer_menu() {
    register_nav_menu('footer-menu', __('Footer Menu', 'text-domain'));
}

?>