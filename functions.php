<?php

// Constant for version number
define( 'WPDT_VERSION', 1 );

// setup
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


// includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/front/nav.php' );
include( get_template_directory() . '/includes/widgets.php' );


// Action & Filter Hooks
add_action( 'wp_enqueue_scripts', 'wpdt_enqueue' );
add_action( 'after_setup_theme', 'wpdt_setup_theme' );
add_filter( 'nav_menu_css_class', 'wpdt_menuitem_classes', 10, 4 );
add_action( 'widgets_init', 'wpdt_widgets' );