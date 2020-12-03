<?php
function setup_nirvan_studio()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'primary' => "primary Menu"
        )
    );
    add_image_size('category-thumb', 350, 197,true);
}
add_action('after_setup_theme', 'setup_nirvan_studio');


function register_scripts(){

    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('dark-style', get_template_directory_uri() . '/assets/css/dark.css');
    wp_enqueue_style('font-icons-style', get_template_directory_uri() . '/assets/css/font-icons.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/demos/freelancer/css/fonts.css');
    wp_enqueue_style('freelancer-style', get_template_directory_uri() . '/demos/freelancer/freelancer.css');

    if ( ! is_admin() ) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', [], 1.0, true);
    }
    wp_enqueue_script('plugins-script', get_template_directory_uri() . '/assets/js/plugins.min.js', [], 1.0, true);
    wp_enqueue_script('functions-script', get_template_directory_uri() . '/assets/js/functions.js', [], 1.0, true);
    wp_enqueue_script('functions-script', get_template_directory_uri() . '/assets/js/wow.min.js', [], 1.0, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', [], 1.0, true);
}
add_action('wp_enqueue_scripts', 'register_scripts');