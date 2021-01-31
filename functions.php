<?php
require_once get_template_directory().'/inc/csf-options.php';
require_once get_template_directory().'/inc/halim_plugin_activetion.php';
function halim_theme_setup()
{
    load_theme_textdomain("meal", get_template_directory_uri() . "/languages");
    add_theme_support("title-tag");
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio'));

    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'halim'),
    ));
}
add_action("after_setup_theme", "halim_theme_setup");


function halim_assets()
{
    //Load CSS
    wp_enqueue_style('halim-fonts', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '1.0');
    wp_enqueue_style( 'fa5', '//use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, '1.0');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', null, '1.0');
    wp_enqueue_style('halim-style-css', get_template_directory_uri() . '/assets/css/style.css', null, '1.2');
    wp_enqueue_style('halim-css', get_stylesheet_uri(), null, '1.0');

    //Load JS
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('imageloaded-js', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('waypoint-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action("wp_enqueue_scripts", "halim_assets");


//Custom Posts
function halm_custom_post()
{
    //slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Slider', 'halim'),
            'singular_name' => __('Slider', 'halim'),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));


    //Services Custom Post
    register_post_type('Services', array(
        'labels' => array(
            'name' => __('Service', 'halim'),
            'singular_name' => __('Service', 'halim'),
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
    ));

    //Team Custom Post
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'halim'),
            'singular_name' => __('team', 'halim'),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
    ));

    //Testimonials Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' => __('testimonial', 'halim'),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
    ));

    //Gallery Custom Post
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Gallery', 'halim'),
            'singular_name' => __('Gallery', 'halim'),
        ),
        'public' => true,
        'supports' => array('title'),
    ));

    //Portfolio Custom Post
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolio', 'halim'),
            'singular_name' => __('Portfolio', 'halim'),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    //Portfolio Custom Taxonomy
    register_taxonomy('portfolio_cat', 'portfolio', array(
        'labels' => array(
            'name' => __('Categories', 'halim'),
            'singular_name' => __('Categories', 'halim'),
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
    ));
}
add_action('init', 'halm_custom_post');

///comment form fields
function halim_commment_form_fields($fields)
{
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];

    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['cookies']);
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}
add_filter('comment_form_fields', 'halim_commment_form_fields');

///===Widgets====///
function halim_widgets()
{
    //main sidebar 
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'halim'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown on blog single page.', 'halim'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

    //Footer widget -1
    register_sidebar(array(
        'name'          => __('Footer widget 1', 'halim'),
        'id'            => 'footer-widget-1',
        'description'   => __('Widgets in this area will be shown on footer', 'halim'),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    //Footer widget -2
    register_sidebar(array(
        'name'          => __('Footer widget 2', 'halim'),
        'id'            => 'footer-widget-2',
        'description'   => __('Widgets in this area will be shown on footer', 'halim'),
        'before_widget' => '<div class="single-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

    //Footer widget -3
    register_sidebar(array(
        'name'          => __('Footer widget 3', 'halim'),
        'id'            => 'footer-widget-3',
        'description'   => __('Widgets in this area will be shown on footer', 'halim'),
        'before_widget' => '<div class="single-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

    //Footer widget -4
    register_sidebar(array(
        'name'          => __('Footer widget 4', 'halim'),
        'id'            => 'footer-widget-4',
        'description'   => __('Widgets in this area will be shown on footer', 'halim'),
        'before_widget' => '<div class="single-footer contact-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'halim_widgets');
