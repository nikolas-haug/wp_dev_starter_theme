<?php

// Setup
define('WPDEV_DEV_MODE', true); // defines dev or production mode

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ));
include( get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/custom-nav-walker.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));
include( get_theme_file_path( '/includes/theme-customizer.php' ));
include( get_theme_file_path( '/includes/customizer/social.php' ));
include( get_theme_file_path( '/includes/customizer/misc.php' ));
include( get_theme_file_path( '/includes/customizer/enqueue.php' ));

// Hooks - Plugin API
add_action( 'wp_enqueue_scripts', 'wpdev_enqueue' );
add_action( 'after_setup_theme', 'wpdev_setup_theme' );
add_action( 'widgets_init', 'wpdev_widgets' );
add_action( 'customize_register', 'wpdev_customize_register' );
add_action( 'customize_preview_init', 'wpdev_customize_preview_init' );

// Shortcodes