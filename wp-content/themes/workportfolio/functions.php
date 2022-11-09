<?php
function workportfolio_register_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_enqueue_style( 'fonts',  get_template_directory_uri() . '/assets/css/fonts.css');
}

add_action( 'wp_enqueue_scripts', 'workportfolio_register_styles' );

function workportfolio_register_scripts() {
    wp_enqueue_script( 'workportfolio-js', get_template_directory_uri() . '/assets/js/index.js');
}

add_action( 'wp_enqueue_scripts', 'workportfolio_register_scripts' );

function workportfolio_setup() {
    register_nav_menus(
        array (
            'header' => 'header Menu'
        )
    );
}

add_action('after_setup_theme', 'workportfolio_setup');


/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/assets/helpers/icons.php';

require get_template_directory() . '/inc/template-tags.php';
?>


