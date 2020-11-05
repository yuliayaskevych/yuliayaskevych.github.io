<?php

add_action('wp_enqueue_scripts','style_theme');
add_action('wp_footer','script_theme');
add_action('after_setup_theme','menu');

function menu(){
    register_nav_menu('top','Primary menu');
}

function style_theme(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('styleVendor', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('styleVendorAll', get_template_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style('styleMin', get_template_directory_uri() . '/assets/css/clean-blog.min.css');

}
function script_theme(){
    wp_enqueue_script('scriptMin', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js');
    wp_enqueue_script('scriptMin2', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
    wp_enqueue_script('scriptMin3', get_template_directory_uri() . '/assets/js/clean-blog.min.js');

}
