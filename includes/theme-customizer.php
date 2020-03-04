<?php

function wpdev_customize_register( $wp_customize ) {

    // echo '<pre>';
    // var_dump($wp_customize);
    // echo '</pre>';

    $wp_customize->get_section( 'title_tagline' )->title = 'General';

    $wp_customize->add_panel('wpdev', [
        'title' => __('WP Dev Theme Settings', 'wp_dev_theme'),
        'description' => '<p>WP Dev Theme Settings</p>',
        'priority' => 60
    ]);

    wpdev_social_customizer_section($wp_customize);
    wpdev_misc_customizer_section($wp_customize);
}