<?php function add_theme_scripts() {
    // Child theme styles. 
    wp_enqueue_style('child-theme', get_stylesheet_directory_uri() . '/style.css', array('parent-theme'));
//    wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/css/style.css');

    // enqueue parent styles
//    wp_enqueue_style('parent-theme', get_template_directory_uri() . '/style.css');
    //js labraries
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/fontawesome.io/assets/font-awesome/css/font-awesome.css');
   
   wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('owl-js', get_stylesheet_directory_uri() . '/js/owl.carousel.js');
    wp_enqueue_script('ziehharmonika-js', get_stylesheet_directory_uri() . '/js/ziehharmonika.js');
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
?>
<?php

/* * **************************Our FAQs.************************** */

function create_posttype() {

    register_post_type('FAQ', $args = array(
        'label' => _('FAQ'),
        'description' => _('FAQ'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('slider'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
            )
    );

    // Registering your Custom Post Type
    register_post_type('FAQ', $args);
}

add_action('init', 'create_posttype');
?>
<?php

function doctor_posttype() {

    register_post_type('About Doctor', $args = array(
        'label' => _('About Doctor'),
        'description' => _('Check Out'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('slider'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
            )
    );

    // Registering your Custom Post Type
    register_post_type('About Doctor', $args);
}

add_action('init', 'doctor_posttype');
?>
<?php

function custom_widget() {
    register_sidebar(
            array(
                'name' => __('Footer Logo', 'industry'),
                'id' => 'footer_logo',
                'description' => __('Add widgets here to appear in your blog.', 'industry'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h1 class="widget-title">',
                'after_title' => '</h1>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Address', 'industry'),
                'id' => 'address',
                'description' => __('Add widgets here to appear in your blog.', 'industry'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h1 class="widget-title">',
                'after_title' => '</h1>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Phone', 'industry'),
                'id' => 'phone',
                'description' => __('Add widgets here to appear in your blog.', 'industry'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h1 class="widget-title">',
                'after_title' => '</h1>',
            )
    );
}

add_action('init', 'custom_widget');
?>
<?php

function m1_customize_register($wp_customize) {
    $wp_customize->add_setting('m1_logo'); // Add setting for logo uploader
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'm1_logo', array(
        'label' => __('Upload Logo', 'm1'),
        'section' => 'title_tagline',
        'settings' => 'm1_logo',
    )));
    $wp_customize->add_setting('m2_logo'); // Add setting for logo uploader
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'm2_logo', array(
        'label' => __('Upload Logo', 'm2'),
        'section' => 'title_tagline',
        'settings' => 'm2_logo',
    )));
}

add_action('customize_register', 'm1_customize_register');
?>
<?php 
function header_theme_customizer($wp_customize) {
    $wp_customize->add_section('header_customize', array(
        'title' => __('Header Section', 'Header'),
        'priority' => 60,
        'description' => 'Customize your social links',
    ));
   
  $wp_customize->add_setting('email');
    $wp_customize->add_control('email', array(
        'label' => __('Email', 'header'),
        'type' => 'textbox',
        'section' => 'header_customize',
        'settings' => 'email',
        'transport' => 'postMessage'
    ));
     $wp_customize->add_setting('contact');
    $wp_customize->add_control('contact', array(
        'label' =>__('Contact', 'header'),
        'type' => 'textbox',
        'section' => 'header_customize',
        'settings' => 'contact',
        'transport' => 'postMessage'
    ));
	
	
	
    $wp_customize->add_setting('timing');
    $wp_customize->add_control('timing', array(
        'label' =>__('Timing', 'header'),
        'type' => 'textbox',
        'section' => 'header_customize',
        'settings' => 'timing',
        'transport' => 'postMessage'
    ));
 
 
   
}

add_action('customize_register', 'header_theme_customizer');
?>
