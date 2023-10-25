<?php

function aesthetic_assets() {
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Comfortaa&display=swap', array(), '1.0', 'all' );

    wp_enqueue_style( 'theme-styles', get_stylesheet_uri(), array(), 1.0, 'all' );

    wp_enqueue_script( 'theme-js', get_theme_file_uri('assets/js/main.js'), array(), '1.0', true);

    if(is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-repy');
    }
}

add_action('wp_enqueue_scripts', 'aesthetic_assets');