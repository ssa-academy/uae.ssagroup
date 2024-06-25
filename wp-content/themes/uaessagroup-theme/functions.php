<?php

function uaessagroup_files() {
    // wp_enqueue_style('uaessagroup_main_styles', get_stylesheet_uri());

    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/src/output.css', array() );
}

add_action('wp_enqueue_scripts', 'uaessagroup_files');