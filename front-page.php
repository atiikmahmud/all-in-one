<?php
/*
 * Theme Front Page 
*/


get_header(); ?>

  <section id="service_area">
    <div class="container">
      <div class="row">
        <?php 
        query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <?php the_title(); ?>
                </div>
                <div class="card-body">
                <?php echo the_post_thumbnail('service') ?>
                <?php the_excerpt(  ); ?>
                </div>
            </div>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>



<?php get_footer(); ?>