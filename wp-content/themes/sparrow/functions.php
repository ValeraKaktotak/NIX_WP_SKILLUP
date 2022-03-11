<?php

include 'inc/gutenberg-blocks/class-block-person.php';
new Sparrow\Blocks\PersonBlock\PersonBlock();

include 'inc/options/class-options.php';
new Sparrow\Options\MyOptions\Options();


add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'main_menu' );


function style_theme(){
    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    // регистрируем
    wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
    wp_register_script( 'jquery', false, array('jquery-core'), null, true );

    // подключаем
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js' );

    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css' );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
    wp_enqueue_style( 'my-style', get_stylesheet_uri() );
}

function scripts_theme(){
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js' );
    wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js' );
    wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/init.js' );
}

function main_menu(){
    register_nav_menu( 'top', 'Меню в шапке' );
    register_nav_menu( 'footer', 'Меню в подвале' );
}


