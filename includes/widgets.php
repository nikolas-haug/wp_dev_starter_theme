<?php

function wpdev_widgets() {
    register_sidebar([
        'name' => __('WP Dev Theme Sidebar'),
        'id' => 'wpdev_sidebar',
        'description' => __('Sidebar for the WP Dev Theme'),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}