<?php 

# The template for displaying pages
get_header(); 

?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php get_template_part('template/post_setup'); ?>

                <div id="comments_area">
                    <?php if(comments_open()) : ?>
                        <?php comments_template() ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<section id="page_info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-danger">Template: Single.php</h3>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>