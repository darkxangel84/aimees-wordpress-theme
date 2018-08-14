<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme Support
function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'aimee-theme' ),
    ) );
}
add_action('after_setup_theme', 'wpb_theme_setup');

function set_excerpt_length(){
    return 30;
}

add_filter('expert_length', 'set_excerpt_length');


// Widget Locations
function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="p-3 mb-3 bg-light rounded">',
        'after-widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');
?>