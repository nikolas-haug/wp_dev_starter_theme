<?php

function wpdev_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'starter-content', array(
        // Place widgets in the desired locations (such as sidebar or footer).
        // Example widgets: archives, calendar, categories, meta, recent-comments, recent-posts, 
        //                  search, text_business_info, text_about
        'widgets'     => array( 'sidebar-1' => array( 'search', 'categories', 'meta'), ),
        // Specify pages to create, and optionally add custom thumbnails to them.
        // Note: For thumbnails, use attachment symbolic references in {{double-curly-braces}}.
        // Post options: post_type, post_title, post_excerpt, post_name (slug), post_content, 
        //               menu_order, comment_status, thumbnail (featured image ID), and template
        'posts'       => array( 'home', 'about', 'blog' => array( 'thumbnail' => '{{image-cafe}}' ), ),
        // Create custom image attachments used as post thumbnails for pages.
        // Note: You can reference these attachment IDs in the posts section above. Example: {{image-cafe}}
        'attachments' => array( 'image-cafe' => array( 'post_title' => 'Cafe', 'file' => 'assets/images/cafe.jpg' ), ),
        // Assign options defaults, such as front page settings.
        // The 'show_on_front' value can be 'page' to show a specified page, or 'posts' to show your latest posts.
        // Note: Use page ID symbolic references from the posts section above wrapped in {{double-curly-braces}}.
        'options'     => array( 'show_on_front'  => 'page', 'page_on_front' => '{{home}}', 'page_for_posts' => '{{blog}}', ),
        // Set the theme mods.
        'theme_mods'  => array( 'panel_1' => '{{about}}' ),
        // Set up nav menus.
        'nav_menus'   => array( 'top' => array( 'name' => 'Top Menu', 'items' => array( 'link_home', 'page_about', 'page_blog' )), ),
    ) );

    register_nav_menu( 'primary', __('Primary', 'wp_dev_theme') );
    register_nav_menu( 'secondary', __('Secondary', 'wp_dev_theme') );

    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'wp_dev_header', 'description' => 'WP Dev Header position') );
    }
}