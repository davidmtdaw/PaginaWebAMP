<?php
/**
 * WebFusion Digital - functions.php
 * Funciones y configuración del tema
 */

// Soporte de características del tema
function webfusion_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);

    // Menú de navegación
    register_nav_menus([
        'primary' => __('Menú Principal', 'webfusion'),
    ]);
}
add_action('after_setup_theme', 'webfusion_setup');

// Cargar estilos del tema
function webfusion_enqueue_styles() {
    wp_enqueue_style(
        'webfusion-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'webfusion_enqueue_styles');

// Eliminar la barra de administración en el frontend
add_filter('show_admin_bar', '__return_false');
