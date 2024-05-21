<?php
/*
 * This is our functions file
 */
function egowebsite_theme_setup()
{

    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured', 680, 400, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'egowebsite')
        )
    );

    $args = array(
        'default-image' => get_template_directory_uri() . '/assets/img/header-1.jpg',
        'default-text-color' => '000',
        'width' => 1920,
        'height' => 400,
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support('custom-header', $args);
}
;
add_action('after_setup_theme', 'egowebsite_theme_setup');


function egowebsite_theme_scripts()
{

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');

}
add_action('wp_enqueue_scripts', 'egowebsite_theme_scripts');

function egowebsite_widgets_init()
{
    register_sidebar(
        array(
            'name' => __('Primary Sidebar', 'egowebsite'),
            'id' => 'sidebar-1',
            'description' => 'Main Sidebar on Right Side',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer Widget 1', 'egowebsite'),
            'id' => 'footer-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Footer Widget 2', 'egowebsite'),
            'id' => 'footer-2',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Footer Widget 3', 'egowebsite'),
            'id' => 'footer-3',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init', 'egowebsite_widgets_init');



function wpdocs_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

// Include Customizer
require get_template_directory() . '/inc/customizer.php';

// Include Service Area Section
require get_template_directory() . '/inc/services.php';