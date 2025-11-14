<?php
/**
 * Essence Theme Functions
 * @package Essence
 */

// Load customizer
require get_template_directory() . '/inc/customizer.php';

/********** ENQUEUE STYLES & SCRIPTS **********/
function essence_load_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'essence-style',
        get_template_directory_uri() . "/style.css",
        array(),
        '1.1',
        'all'
    );

    // Main JS
    wp_enqueue_script(
        'essence-main',
        get_template_directory_uri() . "/js/main.js",
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'essence_load_scripts');

/********** THEME SETUP **********/
function essence_theme_setup() {

    // Register menus
    register_nav_menus(
        array(
            'essence_main_menu'   => __('Main Menu', 'essence'),
            'essence_footer_menu' => __('Footer Menu', 'essence'),
        )
    );

    // Custom header
    add_theme_support('custom-header', array(
        'height' => 225,
        'width'  => 1920,
    ));

    // Featured images
    add_theme_support('post-thumbnails');

    // Custom logo
    add_theme_support('custom-logo', array(
        'height'      => 110,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // RSS feeds
    add_theme_support('automatic-feed-links');

    // HTML5 support
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Dynamic title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'essence_theme_setup', 0);

/********** SIDEBARS / WIDGET AREAS **********/
function essence_register_sidebars() {

    // Blog Sidebar
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'essence'),
        'id'            => 'sidebar-blog',
        'description'   => __('Widgets in this area will appear on blog pages.', 'essence'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    // Service Areas
    for ($i = 1; $i <= 3; $i++) {
        register_sidebar(array(
            'name'          => sprintf(__('Service %d', 'essence'), $i),
            'id'            => "service-{$i}",
            'description'   => sprintf(__('Service area %d', 'essence'), $i),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ));
    }

}
add_action('widgets_init', 'essence_register_sidebars');
?>
