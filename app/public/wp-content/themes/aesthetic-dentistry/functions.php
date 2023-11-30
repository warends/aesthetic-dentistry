<?php

if (!function_exists('ad_setup')) {
    function ad_setup() {
        add_theme_support('title-tag');
        add_theme_support('posts-thumbnails');
        add_theme_support( 'block-templates' );
        add_theme_support('html5',
            array('search-form', 'comment-form', 'gallery', 'caption')
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive_embeds');
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'aesthetic-dentistry'),
                'header-tabs' => esc_html__('Header Tabs', 'aesthetic-dentistry')
            )
        );
    }
}

add_action('after_setup_theme', 'ad_setup');

function ad_assets() {
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Comfortaa&display=swap', array(), '1.0', 'all' );

    wp_enqueue_style( 'theme-styles', get_stylesheet_uri(), array(), 1.0, 'all' );

    wp_enqueue_script( 'theme-js', get_theme_file_uri('assets/js/main.js'), array(), '1.0', true);

    if(is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-repy');
    }
}

add_action('wp_enqueue_scripts', 'ad_assets');

require get_template_directory() . '/includes/customizer-ad.php';