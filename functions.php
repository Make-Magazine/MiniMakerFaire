<?php

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "MakerFaire";
    $developer_uri = "http://makermedia.com";
    $shortname = "mf";
    $version = '1.0';

////////////////////////////////////////////////////////////////////
// include Theme-options.php for Admin Theme settings
////////////////////////////////////////////////////////////////////

   include 'theme-options.php';

////////////////////////////////////////////////////////////////////
// Include shortcodes.php for Bootstrap Shortcodes
////////////////////////////////////////////////////////////////////

    include 'shortcodes.php';

////////////////////////////////////////////////////////////////////
// Include customizer.php for WP theme custom options
////////////////////////////////////////////////////////////////////

    include 'customizer.php';

////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_stylesheets()
    {
        wp_register_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all' );
        wp_enqueue_style( 'bootstrap.css');
        wp_enqueue_style( 'theme-css', get_stylesheet_directory_uri() . '/css/style.css' );
        wp_enqueue_style( 'font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', array(), null, 'all' );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_stylesheets');


////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////

    function devdmbootstrap3_theme_js()
    {
        wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/bootstrap.min.js',array( 'jquery' ),false,true );
        wp_enqueue_script('misc-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ),false,true );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_js');


////////////////////////////////////////////////////////////////////
// Add Title Tag Support with Regular Title Tag injection Fall back.
////////////////////////////////////////////////////////////////////

function devdmbootstrap3_title_tag() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'devdmbootstrap3_title_tag' );

if(!function_exists( '_wp_render_title_tag')) {

    function devdmbootstrap3_render_title() {
        ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
    }
    add_action( 'wp_head', 'devdmbootstrap3_render_title' );

}


////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker
////////////////////////////////////////////////////////////////////

    require_once('lib/wp_bootstrap_navwalker.php');


////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

    register_nav_menus(
        array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );


////////////////////////////////////////////////////////////////////
// Register the Sidebar
////////////////////////////////////////////////////////////////////

    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'right-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=> 'Page Widget Area 1',
        'id' => 'page_widget_area_1',
        'before_widget' => '<div class="container std-panel"><div class="row"><div class="col-xs-12 text-center">',
        'after_widget' => '</div></div></div>
                              <div class="container">
                                <div class="row">
                                  <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                                    <hr class="hr-half" />
                                  </div>
                                </div>
                              </div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(300,300, true);

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

    add_theme_support( 'automatic-feed-links' );


////////////////////////////////////////////////////////////////////
// Set Content Width
////////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 800;

?>