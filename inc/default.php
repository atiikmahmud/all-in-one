<?php

# Theme Title
add_theme_support('title-tag');

# Thumbnill Image Area
add_theme_support('post-thumbnails', array('page', 'post', 'service', 'slider'));
add_image_size('post-thumbnails', 970, 350, true);
add_image_size('service', 390, 250, true);
add_image_size('slider', 1920, 700, true);

# Except to 40 word
function atik_excerpt_more(){
    return '<br> <br> <a class="redmore" href="'.get_permalink() . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'atik_excerpt_more');

function atik_excerpt_length($length)
{
    return 40;
}
add_filter('excerpt_length', 'atik_excerpt_length', 999);

# Pagination function
function atik_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages ='';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Previous';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
      <div class="wp_pagenav">';
        if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span> of </span>' . $max . '</p>';
        echo $pages . paginate_links($args);
        if ($max > 1 ) echo '</div><pre>';
  }