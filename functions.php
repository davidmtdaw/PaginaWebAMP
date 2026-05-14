<?php
function webfusion_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'webfusion_setup');

function webfusion_scripts() {
    wp_enqueue_style('webfusion-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'webfusion_scripts');
