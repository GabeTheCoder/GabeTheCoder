<?php

function gabethecoder_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js' );
}

add_action( 'wp_enqueue_scripts', 'gabethecoder_scripts' );
add_theme_support( 'post-thumbnails' );
