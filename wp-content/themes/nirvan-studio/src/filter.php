<?php
add_filter('nav_menu_link_attributes', 'wp_menu_add_class', 10, 3);

function wp_menu_add_class($atts, $item, $args)
{
    $class = 'menu-link'; // or something based on $item

    $atts['class'] = $class;

    return $atts;
}
