<?php

require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts() {
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap',
                      array(), null);              
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);                  
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts');


function wpdevs_config(){
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header', $args);

    //Adicionar suporte a post thumbnails
    add_theme_support('post-thumbnails');

    //adicionar logo custumizado no tema
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        //deixar a largura flexivel
        'flex-height' => true,
        'flex-width' => true
    ));

    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 
    'caption', 'style', 'script' ) );

    add_theme_support('title-tag');
    
}

add_action('after_setup_theme', 'wpdevs_config', 0);


function wpdevs_sidebars(){
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id'   => 'sidebar-blog',
            'description'   => 'this is the blod Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 1',
            'id'   => 'services-1',
            'description'   => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 2',
            'id'   => 'services-2',
            'description'   => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 3',
            'id'   => 'services-3',
            'description'   => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}

// Se a função body_open não existir no tema ele ira criar
if(!function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action('wp_body_open');
    }
}

add_action('widgets_init', 'wpdevs_sidebars');






    