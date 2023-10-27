<?php
/*
    Template Name: About Page
*/
?>

<?php
    get_header();
?>


<div class="content-area">
    <div class="container">
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php $loop = new WP_Query( array ( 'post_type' => 'employees', 'orderby' => 'post_id', 'order' => 'ASC' ) ) ?>

            <?php while($loop->have_posts()) : $loop->the_post(); ?>
                <div class="row">
                    <div class="col-3">
                        <p><?php echo get_the_post_thumbnail(get_the_ID())?></p>
                    </div>
                    <div class="col-9">
                        <h3><?php echo the_title()?></h3>
                        <p><?php echo the_content()?></p>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
</div>

<?php get_footer(); ?>