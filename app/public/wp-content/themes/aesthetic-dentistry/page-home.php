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


<div class="home-banner" style="background-image: url(<?php echo $banner;?>);">
</div>

<div class="dental-features">
    <div class="container">
        <div class="row gx-4">
            <div class="col-sm-4">
            <a href="/dental-services/#dental-implants">
                <img class="img-fluid" src="<?php echo $dental_feature_1_image; ?>"/>
                <h3><?php echo $dental_feature_1_title; ?></h3>
            </a>
            </div>
            <div class="col-sm-4">
                <a href="/cosmetic-dentistry/">
                    <img class="img-fluid" src="<?php echo $dental_feature_2_image; ?>"/>
                    <h3><?php echo $dental_feature_2_title; ?></h3>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/dental-services/#crowns-bridges">
                    <img class="img-fluid" src="<?php echo $dental_feature_3_image; ?>"/>
                    <h3><?php echo $dental_feature_3_title; ?></h3>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="content-area">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>