<?php
function he_child_enqueue_styles() {
    // Parent theme style
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . '/style.css'
    );

    // Your custom style for home
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/assets/home.css',
        array('hello-elementor-style'),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'he_child_enqueue_styles');
