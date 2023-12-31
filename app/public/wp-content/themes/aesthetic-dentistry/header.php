<?php

?>

<!DOCTYPE html>
<html <?php language_attributes()?> dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dentist Bend, OR • Aesthetic Dentistry of Bend</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body <?php body_class(); ?> id="main-body">
    <div class="header-links container">
        <div class="row justify-content-end text-center">
            <a class="google-map" href="https://www.google.com/maps?ll=44.058217,-121.309362&z=16&t=m&hl=en-US&gl=US&mapclient=embed&cid=14197000700345033691" target="_blank"><i class="fa fa-map-marker pr-s"></i></a>
        
            <!--<a class="col-3" href="/request-an-appointment">Request an Appointment</a>-->

            <a class="phone" href="tel:541-389-1301"><i class="fa fa-phone"></i></a>
            <a class="yelp" href="https://www.yelp.com/biz/thomas-e-wold-dmd-aesthetic-dentistry-of-bend-bend" target="_blank"><i class="fa fa-yelp"></i></a>
            <a class="health-grades" href="https://www.healthgrades.com/dentist/dr-thomas-wold-xtwll" target="_blank"><img class="img-fluid" src="../../../wp-content/themes/aesthetic-dentistry/assets/img/healthgrades-logo.png"></a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="img-fluid logo" alt="logo" src="../../../wp-content/themes/aesthetic-dentistry/assets/img/aesthetic-dentistry-logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'depth'  => 2,
                        'container'  => 'div',
                        'container_class'  => 'collapse navbar-collapse',
                        'container_id'  => 'navbarSupportedContent',
                        'menu_class'  => 'navbar-nav mb-2 mb-lg-0',
                        'fallback_cb'  => false
                    )
                );
            ?>
        </div>
    </nav>

