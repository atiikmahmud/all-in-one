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
        'taxonomies' => array('category'),
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

# Custom post show with catagories
function query_post_type($query)
{
    if(is_category())
    {
        $post_type = get_query_var('post_type');
        if($post_type)
        {
            $post_type = $post_type;
        } else {
            $post_type = array('post', 'service');
            $query->set('post_type', $post_type);
            return $query;
        }
    }
}
add_filter('pre_get_posts', 'query_post_type');