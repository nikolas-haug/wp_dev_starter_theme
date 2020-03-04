<?php

function wpdev_enqueue() {
    $uri = get_theme_file_uri( );
    
    // or: only get the version number associated with the main theme stylesheet (better for browser cacheing essential assets)
    $theme = wp_get_theme();
    define('THEME_VERSION', $theme->Version); // gets version written in your style.css
    
    // append query string to asset files depending on dev or production mode
    $ver = WPDEV_DEV_MODE ? time() : THEME_VERSION;

    wp_register_style( 'wpdev_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver );
    wp_register_style( 'wpdev_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver );
    wp_register_style( 'wpdev_style', $uri . '/assets/css/style.css', [], $ver );
    wp_register_style( 'wpdev_dark', $uri . '/assets/css/dark.css', [], $ver );
    wp_register_style( 'wpdev_font_icons', $uri . '/assets/css/font-icons.css', [], $ver );
    wp_register_style( 'wpdev_animate', $uri . '/assets/css/animate.css', [], $ver );
    wp_register_style( 'wpdev_magnific_popup', $uri . '/assets/css/magnific-popup.css', [], $ver );
    wp_register_style( 'wpdev_responsive', $uri . '/assets/css/responsive.css', [], $ver );
    wp_register_style( 'wpdev_custom', $uri . '/assets/css/custom.css', [], $ver );

    wp_enqueue_style( 'wpdev_bootstrap' );
    wp_enqueue_style( 'wpdev_style' );
    wp_enqueue_style( 'wpdev_dark' );
    wp_enqueue_style( 'wpdev_font_icons' );
    wp_enqueue_style( 'wpdev_animate' );
    wp_enqueue_style( 'wpdev_magnific_popup' );
    wp_enqueue_style( 'wpdev_responsive' );
    wp_enqueue_style( 'wpdev_custom' );

    $read_more_color = get_theme_mod( 'wpdev_read_more_color' );
    wp_add_inline_style('wpdev_custom', 'a.more-link{ color: ' . $read_more_color . '; border-color: ' . $read_more_color . '; }');

    wp_register_script( 'wpdev_plugins', $uri . '/assets/js/plugins.js', [], $ver, true );
    wp_register_script( 'wpdev_functions', $uri . '/assets/js/functions.js', [], $ver, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'wpdev_plugins' );
    wp_enqueue_script( 'wpdev_functions' );
}