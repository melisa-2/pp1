<?php
/**
 * Customize the Essence theme copyright text via WordPress Customizer
 */

function essence_customizer($wp_customize) {

    // Add a new section for Copyright Settings
    $wp_customize->add_section(
        'essence_copyright_section',
        array(
            'title'       => __('Copyright Settings', 'essence'),
            'description' => __('Manage the copyright text displayed in the footer', 'essence'),
            'priority'    => 160,
        )
    );

    // Add a setting for the copyright text
    $wp_customize->add_setting(
        'essence_copyright_text',
        array(
            'type'              => 'theme_mod',
            'default'           => '© Essence - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Add a control (input field) to edit the copyright text
    $wp_customize->add_control(
        'essence_copyright_text',
        array(
            'label'       => __('Footer Copyright Text', 'essence'),
            'description' => __('Enter the text you want to display in the footer', 'essence'),
            'section'     => 'essence_copyright_section',
            'type'        => 'text',
        )
    );
}

// Hook into the WordPress Customizer
add_action('customize_register', 'essence_customizer');
?>
