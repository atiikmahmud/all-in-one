<?php

# Sidebar Register Function
function atik_widgets_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'all-in-one'),
        'id'   => 'sidebar-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'all-in-one'),
        'before_widget' => '<div class="child_sidebar">',
        'after_sidebar' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'atik_widgets_register');