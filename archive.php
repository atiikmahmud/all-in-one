<?php 

# The tempalte for displaying archive pages
get_header(); 

?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="archive_title">
                    <?php  
                        the_archive_title('<h1 class="title">', '</h1>');
                        the_archive_description('<div class="description">', '</div>');
                    ?>
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