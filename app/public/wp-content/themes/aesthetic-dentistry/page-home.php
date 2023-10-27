<?php
/*
    Template Name: Home Page
*/
?>

<?php
    $banner = get_field('home_banner_image');
    $dental_feature_1_title = get_field('dental_feature_1_title');
    $dental_feature_1_image = get_field('dental_feature_1_image');
    $dental_feature_2_title = get_field('dental_feature_2_title');
    $dental_feature_2_image = get_field('dental_feature_2_image');
    $dental_feature_3_title = get_field('dental_feature_3_title');
    $dental_feature_3_image = get_field('dental_feature_3_image');

    get_header();
?>


<div class="banner" style="background-image: url(<?php echo $banner;?>);">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php bloginfo('name');?> HOME</h1>
                <h3><?php bloginfo('description');?></h3>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<div class="dental-features">
    <div class="container">
        <div class="row">
            <div class="col-4"> <!-- ad links --> 
                <img src="<?php echo $dental_feature_1_image; ?>" height="200" width="200 "/>
                <h3><?php echo $dental_feature_1_title; ?></h3>
            </div>
            <div class="col-4">
                <img src="<?php echo $dental_feature_2_image; ?>" height="200" width="200 "/>
                <h3><?php echo $dental_feature_2_title; ?></h3>
            </div>
            <div class="col-4">
                <img src="<?php echo $dental_feature_3_image; ?>" height="200" width="200 "/>
                <h3><?php echo $dental_feature_3_title; ?></h3>
            </div>
        </div>
    </div>
</div>

<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>