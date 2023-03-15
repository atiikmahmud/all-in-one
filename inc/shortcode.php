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

# Shortcode with Custo Post
function service_shortcode($atts)
{
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'service',
        'post_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'title',
    ));
    if($query->have_posts())
    {
        ?>
            <section id="service_area">
                <div class="container">
                <div class="row">
                    <?php while($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-header h3">
                                <?php the_title(); ?>
                            </div>
                            <div class="card-body">
                            <?php echo the_post_thumbnail('service') ?>
                            <?php the_excerpt(  ); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                </div>
            </section>
        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode('service', 'service_shortcode');