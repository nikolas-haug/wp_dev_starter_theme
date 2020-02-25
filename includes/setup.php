<?php

function wpdev_setup_theme() {
    register_nav_menu( 'primary', __('Primary', 'wp_dev_theme') );
}