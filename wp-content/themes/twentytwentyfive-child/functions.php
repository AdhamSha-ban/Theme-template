<?php
// Enqueue Tailwind CSS
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'child-theme-tailwind',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
});

// Add Tailwind to editor
add_theme_support('editor-styles');
add_editor_style('style.css');
// Add menu support
function ttf_child_theme_setup() {
    // Register navigation menus
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'twentytwentyfive-child' ),
            'footer'  => __( 'Footer Menu', 'twentytwentyfive-child' ),
        )
    );
}
add_action('after_setup_theme', function() {
    // Register menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'twentytwentyfive-child'),
        'footer'  => __('Footer Menu', 'twentytwentyfive-child')
    ]);

    // Add theme supports
    add_theme_support('title-tag');
    add_theme_support('html5', ['nav-menu']);
});
