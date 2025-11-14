<?php
// Theme setup
function essence_setup(){
    load_theme_textdomain('essence', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','gallery','caption'));
    add_theme_support('custom-logo');
    add_theme_support('post-formats', array('aside','image','video'));

    register_nav_menus(array(
        'main-menu' => __('Main Menu','essence'),
    ));
}
add_action('after_setup_theme','essence_setup');

// Enqueue styles & scripts
function essence_scripts(){
    wp_enqueue_style('essence-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('essence-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));

    wp_enqueue_script('essence-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('essence-main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts','essence_scripts');

// Widgets
function essence_widgets(){
    register_sidebar(array(
        'name'=>'Main Sidebar',
        'id'=>'main-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init','essence_widgets');

// Custom Post Type: product
function essence_cpt_product(){
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail','excerpt'),
        'show_in_rest' => true,
        'rewrite' => array('slug'=>'products'),
    );
    register_post_type('product',$args);
}
add_action('init','essence_cpt_product');

// Product taxonomy
function essence_product_tax(){
    register_taxonomy('product-category','product',array(
        'label'=>'Product Categories',
        'hierarchical'=>true,
        'rewrite'=>array('slug'=>'product-category'),
    ));
}
add_action('init','essence_product_tax');

// Search form customization
function essence_search_form($form){
    $form = '<form role="search" method="get" class="search-form" action="'.esc_url(home_url('/')).'">'
          . '<label><span class="screen-reader-text">'.esc_html__('Search for:','essence').'</span>'
          . '<input type="search" class="search-field" placeholder="'.esc_attr__('Search …','essence').'" value="'.get_search_query().'" name="s" /></label>'
          . '<button type="submit">'.esc_html__('Search','essence').'</button></form>';
    return $form;
}
add_filter('get_search_form','essence_search_form');

// Include customizer
if(file_exists(get_template_directory() . '/inc/customizer.php')){
    require get_template_directory() . '/inc/customizer.php';
}

// Excerpt helper
function essence_excerpt($length=20){
    $excerpt = wp_trim_words( get_the_excerpt(), $length );
    echo esc_html( $excerpt );
}
