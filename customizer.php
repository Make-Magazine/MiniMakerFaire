<?php
// ADD IMAGE, TEXT, and URL (Heading, Subtext, Link) TO FIRST IMAGE IN SEQUENCE
function theme_slug_home_img_slide_1( $wp_customize ) {
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'static_front_page' );
  
    $wp_customize->add_section(
    'home_slide_img_one',
    array(
        'title' => 'Homepage Image Carousel',
        'description' => 'This section contains all settings for the home page image carousel',
        'priority' => 103,
    ));
    $wp_customize->add_setting( 'theme_slug_slide_img_upload_one' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize,
    'theme_slug_slide_img_upload_one', array(
        'label'    => __( 'Slide 1', 'theme_slug' ),
        'section' => 'home_slide_img_one',
        'settings' => 'theme_slug_slide_img_upload_one',
        'description' => 'Upload your first slider image here.'
    )));
    $wp_customize->add_setting( 'theme_slug_slide_title_1', array(
        'default' => 'Optional',
        'sanitize_callback' => 'sanitize_headline_one_text',
    )); 
    function sanitize_headline_one_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
    }
    $wp_customize->add_control( 'theme_slug_slide_title_1', array(
        'type' => 'text',
        'label'    => __( 'Headline Text Here:', 'theme_slug' ),
        'section' => 'home_slide_img_one'
    ));
    $wp_customize->add_setting( 'theme_slug_slide_text_1', array(
        'default' => 'Optional',
        'sanitize_callback' => 'sanitize_slide_one_descriptive_text'
    ));
    function sanitize_slide_one_descriptive_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
    } 
    $wp_customize->add_control( 'theme_slug_slide_text_1', array(
        'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
        'section'  => 'home_slide_img_one',
        'settings' => 'theme_slug_slide_text_1',
        'type'     => 'text'
    ));
    $wp_customize->add_setting( 'theme_slug_slide_one_link', array(
    'default' => 'Optional',
    'sanitize_callback' => 'sanitize_link_one_url',
    ));
    function sanitize_link_one_url( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'theme_slug_slide_one_link', array(
        'label'    => __( 'Slide 1 URL Here:', 'theme_slug' ),
        'section'  => 'home_slide_img_one',
        'settings' => 'theme_slug_slide_one_link',
        'type'     => 'text',
    ));       
} //Ends section
add_action( 'customize_register', 'theme_slug_home_img_slide_1' );

?>