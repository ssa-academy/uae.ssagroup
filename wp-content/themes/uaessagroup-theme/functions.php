<?php

function uaessagroup_menus() {
    $locations = array(
        'primary' => 'Primary navbar'
    );
    register_nav_menus($locations);
}

add_action('init', 'uaessagroup_menus');

function uaessagroup_files() {
    // wp_enqueue_style('uaessagroup_main_styles', get_stylesheet_uri());

    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/src/output.css', array() );
    wp_enqueue_style('slick_carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array() );
    // wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null. true);
    wp_enqueue_script('sclick_js','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'uaessagroup_files');

function uaessagroup_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'uaessagroup_features');