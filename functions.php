<?php
//css
function load_styles() {
    wp_register_style('app', get_template_directory_uri().'/css/app.css', [], 1);
    wp_enqueue_style('app');
}

add_action('wp_enqueue_scripts', 'load_styles');

//register navbar menu

register_nav_menus(array(
    'primary' => __( 'Primary Menu', 'Ria_Theme'),
));

//load javascript
function load_scripts(){
    wp_enqueue_script('nav', get_template_directory_uri().'/scripts/nav.js',array('jquery'), 1);
}
add_action('wp_enqueue_scripts', 'load_scripts');

//register sidebar
function sidebar_archive(){
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the left on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'sidebar_archive' );
 
    
 


// remove logged in header bar
add_filter( 'show_admin_bar', '__return_false' );


