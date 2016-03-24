<?php
// ADD IMAGE, TEXT, and URL (Heading, Subtext, Link) TO FIRST IMAGE IN SEQUENCE
function home_img_slider( $wp_customize ) {
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'static_front_page' );

    $wp_customize->add_section( 'home_img_carousel', array(
        'title' => 'Homepage Image Carousel',
        'description' => 'This section contains all settings for the home page image carousel',
        'priority' => 103,
    ));
// SLIDER 1
    $wp_customize->add_setting( 'slide_img_upload_1' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'slide_img_upload_1', array(
            'label'       => __( 'Slide 1', 'theme_slug' ),
            'section'     => 'home_img_carousel',
            'settings'    => 'slide_img_upload_1',
            'description' => 'Upload your first slider image here.'
        )
    ));
    $wp_customize->add_setting( 'slide_title_1', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_headline_1_text',
    )); 
    function sanitize_headline_1_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }
    $wp_customize->add_control( 'slide_title_1', array(
        'type'    => 'text',
        'label'   => __( 'Headline Text Here:', 'theme_slug' ),
        'section' => 'home_img_carousel'
    ));
    $wp_customize->add_setting( 'slide_text_1', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_slide_1_descriptive_text'
    ));
    function sanitize_slide_1_descriptive_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    } 
    $wp_customize->add_control( 'slide_text_1', array(
        'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_text_1',
        'type'     => 'text'
    ));
    $wp_customize->add_setting( 'slide_1_link', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_link_1_url',
    ));
    function sanitize_link_1_url( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'slide_1_link', array(
        'label'    => __( 'Slide 1 URL Here:', 'theme_slug' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_1_link',
        'type'     => 'text',
    ));

// SLIDER 2
    $wp_customize->add_setting( 'slide_img_upload_2_radio' );
$wp_customize->add_control(
    'slide_img_upload_2_radio', 
    array(
        'label'    => __( 'Show or Hide Slide 2', 'mytheme' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_img_upload_2_radio',
        'type'     => 'radio',
        'choices'  => array(
            'left'  => 'Show',
            'right' => 'Hide',
        ),
    )
);

    $wp_customize->add_setting( 'slide_img_upload_2' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'slide_img_upload_2', array(
            'label'       => __( 'Slide 2', 'theme_slug' ),
            'section'     => 'home_img_carousel',
            'settings'    => 'slide_img_upload_2',
            'description' => 'Upload your second slider image here.'
        )
    ));
    $wp_customize->add_setting( 'slide_title_2', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_headline_2_text',
    )); 
    function sanitize_headline_2_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }
    $wp_customize->add_control( 'slide_title_2', array(
        'type'    => 'text',
        'label'   => __( 'Headline Text Here:', 'theme_slug' ),
        'section' => 'home_img_carousel'
    ));
    $wp_customize->add_setting( 'slide_text_2', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_slide_2_descriptive_text'
    ));
    function sanitize_slide_2_descriptive_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    } 
    $wp_customize->add_control( 'slide_text_2', array(
        'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_text_2',
        'type'     => 'text'
    ));
    $wp_customize->add_setting( 'slide_2_link', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_link_2_url',
    ));
    function sanitize_link_2_url( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'slide_2_link', array(
        'label'    => __( 'Slide 2 URL Here:', 'theme_slug' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_2_link',
        'type'     => 'text',
    ));

// SLIDER 3
    $wp_customize->add_setting( 'slide_img_upload_3' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'slide_img_upload_3', array(
            'label'       => __( 'Slide 3', 'theme_slug' ),
            'section'     => 'home_img_carousel',
            'settings'    => 'slide_img_upload_3',
            'description' => 'Upload your third slider image here.'
        )
    ));
    $wp_customize->add_setting( 'slide_title_3', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_headline_3_text',
    )); 
    function sanitize_headline_3_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }
    $wp_customize->add_control( 'slide_title_3', array(
        'type'    => 'text',
        'label'   => __( 'Headline Text Here:', 'theme_slug' ),
        'section' => 'home_img_carousel'
    ));
    $wp_customize->add_setting( 'slide_text_3', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_slide_3_descriptive_text'
    ));
    function sanitize_slide_3_descriptive_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    } 
    $wp_customize->add_control( 'slide_text_3', array(
        'label'    => __( 'Descriptive Text Here:', 'theme_slug' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_text_3',
        'type'     => 'text'
    ));
    $wp_customize->add_setting( 'slide_3_link', array(
        'default'           => 'Optional',
        'sanitize_callback' => 'sanitize_link_3_url',
    ));
    function sanitize_link_3_url( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'slide_3_link', array(
        'label'    => __( 'Slide 3 URL Here:', 'theme_slug' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_3_link',
        'type'     => 'text',
    ));
}
add_action( 'customize_register', 'home_img_slider' );

?>