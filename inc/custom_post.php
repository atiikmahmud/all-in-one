<?php

# Custom Posts
function custom_service()
{
    register_post_type('service', 
    array(
        'labels' => array(
            'name' => ('Services'),
            'singular_name' => ('Service'),
            'add_new' => ('Add New Service'),
            'add_new_item' => ('Add New Service'),
            'edit_item' => ('Edit Service'),
            'new_item' => ('New Service'),
            'view_item' => ('View Service'),
            'not_found' => ('Sorry, we could not find the service you are looking for.')
        ),
        'menu_icon' => 'dashicons-screenoptions',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability' => 'post',
        'rewrite' => array('slug' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )); 
}
add_action('init', 'custom_service');

# Custom Sliders
function slider()
{
    register_post_type('slider', 
    array(
        'labels' => array(
            'name' => ('Slider'),
            'singular_name' => ('Slider'),
            'add_new' => ('Add New Slider'),
            'add_new_item' => ('Add New Slider'),
            'edit_item' => ('Edit Slider'),
            'new_item' => ('New Slider'),
            'view_item' => ('View Slider'),
            'not_found' => ('Sorry, we could not find the Slider you are looking for.')
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability' => 'post',
        'rewrite' => array('slug' => 'slider'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )); 
}
add_action('init', 'slider');