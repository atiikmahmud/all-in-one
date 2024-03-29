<?php

# Theme CSS and jQuery File Calling
function atik_css_js_file_calling()
{
    # Style CSS 
    wp_enqueue_style( 'atik-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.2.3', 'all');
    wp_register_style('bxslider', get_template_directory_uri().'/css/bxslider.css', array(), '4.2.12', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bxslider');
    wp_enqueue_style('custom');

    # Style JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.2.3', 'true');
    wp_enqueue_script('bxslider', get_template_directory_uri().'/js/bxslider.js', array(), '4.2.12', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '5.2.3', 'true');
}
add_action('wp_enqueue_scripts', 'atik_css_js_file_calling');

# Google Font
function atik_add_google_fonts(){
    wp_enqueue_style('atik_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'atik_add_google_fonts');