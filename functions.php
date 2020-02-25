<?php

// Setup
define('WPDEV_DEV_MODE', true);

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ));
include( get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/custom-nav-walker.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));

// Hooks - Plugin API
add_action( 'wp_enqueue_scripts', 'wpdev_enqueue' );
add_action( 'after_setup_theme', 'wpdev_setup_theme' );
add_action( 'widgets_init', 'wpdev_widgets' );


// Shortcodes