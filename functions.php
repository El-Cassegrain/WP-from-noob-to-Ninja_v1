<?php

function montheme_charger_assets(){
    wp_enqueue_style( 'Material Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], 0.1, false);
    wp_enqueue_style( 'Main style', get_template_directory_uri() . '/assets/css/style.css', [], 0.1, false);
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], 3, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], 5, true );
    wp_enqueue_script( 'GSAP', 'https://unpkg.co/gsap@3/dist/gsap.min.js', [], 3, true );
    wp_enqueue_script( 'mon-script', get_template_directory_uri() . '/assets/js/script.js', [], 3, true );
}

add_action('wp_enqueue_scripts', 'montheme_charger_assets');

function montheme_supports(){
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'montheme_supports');

show_admin_bar( false );

register_nav_menu('header', 'Menu header');

function montheme_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
});