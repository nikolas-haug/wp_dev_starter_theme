<?php

function wpdev_misc_customizer_section($wp_customize) {
    $wp_customize->add_setting('wpdev_header_show_search', [
        'default' => 'yes',
        'transport' => 'postMessage'
    ]);
    $wp_customize->add_setting('wpdev_header_show_cart', [
        'default' => 'yes',
        'transport' => 'postMessage'
    ]);
    $wp_customize->add_setting('wpdev_footer_copyright_text', [
        'default' => 'Copyright &copy; 2020 All Rights Reserved'
    ]);
    $wp_customize->add_setting('wpdev_footer_tos_page', [
        'default' => 0
    ]);
    $wp_customize->add_setting('wpdev_footer_privacy_page', [
        'default' => 0
    ]);
    $wp_customize->add_setting('wpdev_show_header_popular_posts', [
        'default' => false
    ]);
    $wp_customize->add_setting('wpdev_popular_posts_widget_title', [
        'default' => 'Breaking News'
    ]);

    $wp_customize->add_section('wpdev_misc_section', [
        'title' => __('WP Dev Misc Settings', 'wp_dev_theme'),
        'priority' => 30,
        'panel' => 'wpdev'
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wpdev_show_search_input',
        array(
            'label' => __('Show Search Button in Header', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_header_show_search',
            'type' => 'checkbox',
            'choices' => [
                'yes' => 'Yes'
            ]
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wpdev_show_cart',
        array(
            'label' => __('Show Cart in Header', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_header_show_cart',
            'type' => 'checkbox',
            'choices' => [
                'yes' => 'Yes'
            ]
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wpdev_footer_copyright_text_input',
        array(
            'label' => __('Copyright text', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_footer_copyright_text',
            'type' => 'text'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wpdev_footer_tos_page_input',
        array(
            'label' => __('Footer TOS page', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_footer_tos_page',
            'type' => 'dropdown-pages'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wpdev_footer_privacy_page_input',
        array(
            'label' => __('Footer Privacy page', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_footer_privacy_page',
            'type' => 'dropdown-pages'
        )
    ));

    $wp_customize->add_setting('wpdev_read_more_color', [
        'default' => '#1ABC9C'
    ]);
    $wp_customize->add_setting('wpdev_report_file', [
        'default' => ''
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'wpdev_read_more_color_input',
        array(
            'label' => __('Read more link color', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_read_more_color'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control(
        $wp_customize,
        'wpdev_report_file_input',
        array(
            'label' => __('File report', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_report_file'
        )
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wpdev_show_header_popular_posts_widget_input',
        array(
            'label' => __('Show Header Popular Posts Widget', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_show_header_popular_posts',
            'type' => 'checkbox',
            'choices' => [
                'yes' => __('Yes', 'wp_dev_theme')
            ]
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wpdev_popular_posts_widget_title_input',
        array(
            'label' => __('Popular Posts Widget Title', 'wp_dev_theme'),
            'section' => 'wpdev_misc_section',
            'settings' => 'wpdev_popular_posts_widget_title'
        )
    ));
}