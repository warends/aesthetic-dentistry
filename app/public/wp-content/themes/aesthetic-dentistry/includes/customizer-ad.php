<?php

    if (! class_exists('Kirki')) {
        return;
    }

    new \Kirki\Panel(
        'ad_theme_option_panel',
        [
            'priority'    => 10,
            'title'       => esc_html__( 'Aesthetic Dentistry Options', 'aesthetic-dentistry' ),
            'description' => esc_html__( 'Use this to customize the theme', 'aesthetic-dentistry' ),
        ]
    );

    new \Kirki\Section(
        'ad_subscribe',
        [
            'title'       => esc_html__( 'Subscribe', 'aesthetic-dentistry' ),
            'description' => esc_html__( 'My Section Description.', 'aesthetic-dentistry' ),
            'panel'       => 'ad_theme_option_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'subscribe_text',
            'label'       => esc_html__( 'Textarea Control', 'aesthetic-dentistry' ),
            'section'     => 'ad_subscribe',
            'default'     => esc_html__( 'This is a default value', 'aesthetic-dentistry' ),
        ]
    );

