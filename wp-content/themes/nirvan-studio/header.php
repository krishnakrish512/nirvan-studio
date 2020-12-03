<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Document Title
============================================= -->
    <title>Nirvan Studio</title>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Heebo:300,400,500,700,900" rel="stylesheet" type="text/css"/>
    <?php wp_head(); ?>
</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="border-bottom-0  transparent-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <?php

                        if (function_exists('the_custom_logo')) {

                            $custom_logo_id = get_theme_mod('custom_logo');

                            $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();

                        }

                        ?>

                        <a href="<?= get_home_url(); ?>" class="standard-logo"><img src="<?php echo $logo;?>"
                                                                        alt="Canvas Logo"></a>
                        <a href="<?= get_home_url(); ?>" class="retina-logo"><img src="<?php echo $logo;?>"
                                                                      alt="Canvas Logo"></a>

                    </div><!-- #logo end -->

                    <div class="header-misc d-none d-md-block">
                        <a href="#" class="button button-border rounded-pill" data-scrollto="#footer"
                           data-easing="easeInOutExpo" data-speed="1250" data-offset="-245">Get Quote</a>
                    </div>

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                    <!-- Primary Navigation
============================================= -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'menu_class' => 'menu-container',
                        'container_class' => 'primary-menu'
                    )); ?>

                </div>
            </div>
        </div>
    </header><!-- #header end -->
