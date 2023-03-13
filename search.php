<?php 

# The tempalte for displaying seacrh result
get_header(); 

?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="search_title">
                    <h1 class="title"><?php printf(__('Search result for: %s', 'all-in-one'), get_search_query()); ?></h1>
                </div>
                <?php get_template_part('template/blog_setup'); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>