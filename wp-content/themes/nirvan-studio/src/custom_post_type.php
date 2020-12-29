<?php
function my_custom_post_career()
{

    $labels = array(
        'name' => "Careers",
        'singular_name' => "career",
        'menu_name' => 'Career'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor','thumbnail'),
        'has_archive' => true,

    );
    register_post_type('career', $args);
}

add_action('init', 'my_custom_post_career');
