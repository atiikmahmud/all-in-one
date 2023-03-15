<?php

# Short code
function basic_shortcode()
{
    return "Wordpress First Shortcode";
}
add_shortcode('text', 'basic_shortcode');

function button_shortcode($atts, $content = null)
{
    $values = shortcode_atts(array(
        'url' => '#',
    ), $atts);
    return '<a class="btn btn-primary" href="'.esc_attr($values['url']).'">'. $content . '</a>';
}
add_shortcode('button', 'button_shortcode');