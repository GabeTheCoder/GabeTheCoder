<?php

function gabethecoder_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js' );
}

add_action( 'wp_enqueue_scripts', 'gabethecoder_scripts' );
add_theme_support( 'post-thumbnails' );

function escape_p_tags($content) {
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter( 'the_content', 'escape_p_tags' );