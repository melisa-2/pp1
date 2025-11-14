<?php
function essence_customize_register($wp_customize){
    $wp_customize->add_section('essence_header', array(
        'title' => __('Header','essence'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('essence_logo', array('sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'essence_logo', array(
        'label' => 'Logo',
        'section' => 'essence_header',
        'settings' => 'essence_logo'
    )));
}
add_action('customize_register','essence_customize_register');
