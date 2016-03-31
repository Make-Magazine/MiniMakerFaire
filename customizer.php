<?php
// ADD IMAGE, TEXT, and URL (Heading, Subtext, Link) TO FIRST IMAGE IN SEQUENCE
function mmf_customizer_settings( $wp_customize ) {
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'static_front_page' );

////////////////////////////////////////////////////////////////////
// Date, time, and location for header
////////////////////////////////////////////////////////////////////
    $wp_customize->add_section( 'header_date_time', array(
        'title' => 'Header Date, Time, and Location',
        'description' => 'These are optional settings for displaying the date, time, and location in the top header area right next to the site logo.',
        'priority' => 99,
    ));
    // Hide checkbox
    $wp_customize->add_setting( 'header_date_time_checkbox', array(
        'default'        => false,
    ));
    $wp_customize->add_control(
        'header_date_time_checkbox', 
        array(
            'label'    => __( 'Check to hide these fields' ),
            'section'  => 'header_date_time',
            'settings' => 'header_date_time_checkbox',
            'type'     => 'checkbox',
        )
    );
    // Date and Time field
    $wp_customize->add_setting( 'header_date_time_field', array(
        'sanitize_callback' => 'sanitize_header_date_time_field'
    ));
    function sanitize_header_date_time_field( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    } 
    $wp_customize->add_control( 'header_date_time_field', array(
        'label'    => __( 'Enter date and time here like this: "Saturday, May 7, 2016 10AM – 4PM"' ),
        'section'  => 'header_date_time',
        'settings' => 'header_date_time_field',
        'type'     => 'text'
    ));
    // Location field
    $wp_customize->add_setting( 'header_location_field', array(
        'sanitize_callback' => 'sanitize_header_location_field'
    ));
    function sanitize_header_location_field( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }
    $wp_customize->add_control( 'header_location_field', array(
        'label'    => __( 'Enter location here like this: "Schurz High School, Chicago, IL"' ),
        'section'  => 'header_date_time',
        'settings' => 'header_location_field',
        'type'     => 'text'
    ));
    // Text color
    $wp_customize->add_setting( 'header_date_time_color' , array(
        'default' => '#333',
        'sanitize_callback' => 'sanitize_header_date_time_color',
    ));
    function sanitize_header_date_time_color( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
        'header_date_time_color', 
        array(
            'label'      => __( 'Date, time, location text Color' ),
            'section'    => 'header_date_time',
            'settings'   => 'header_date_time_color',
        ) ) 
    );

////////////////////////////////////////////////////////////////////
// Home page image carousel
////////////////////////////////////////////////////////////////////
    $wp_customize->add_section( 'home_img_carousel', array(
        'title' => 'Homepage Image Carousel',
        'description' => 'This section contains all settings for the home page image carousel',
        'priority' => 104,
    ));
    // Hide checkbox
    $wp_customize->add_setting( 'home_img_carousel_checkbox', array(
        'default'        => true,
    ));
    $wp_customize->add_control(
        'home_img_carousel_checkbox', 
        array(
            'label'    => __( 'Check to hide the image carousel' ),
            'section'  => 'home_img_carousel',
            'settings' => 'home_img_carousel_checkbox',
            'type'     => 'checkbox',
        )
    );
    // SLIDER 1
    $wp_customize->add_setting( 'slide_img_upload_1' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'slide_img_upload_1', array(
            'label'       => __( 'Slide 1' ),
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
        'label'   => __( 'Headline Text Here:' ),
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
        'label'    => __( 'Descriptive Text Here:' ),
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
        'label'    => __( 'Slide 1 URL Here:' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_1_link',
        'type'     => 'text',
    ));

    // SLIDER 2
    $wp_customize->add_setting( 'slide_img_upload_2_checkbox', array(
        'default'        => true,
    ));
    $wp_customize->add_control(
        'slide_img_upload_2_checkbox', 
        array(
            'label'    => __( 'Check to hide Slide 2' ),
            'section'  => 'home_img_carousel',
            'settings' => 'slide_img_upload_2_checkbox',
            'type'     => 'checkbox',
        )
    );
    $wp_customize->add_setting( 'slide_img_upload_2' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'slide_img_upload_2', array(
            'label'       => __( 'Slide 2' ),
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
        'label'   => __( 'Headline Text Here:' ),
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
        'label'    => __( 'Descriptive Text Here:' ),
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
        'label'    => __( 'Slide 2 URL Here:' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_2_link',
        'type'     => 'text',
    ));

    // SLIDER 3
    $wp_customize->add_setting( 'slide_img_upload_3_checkbox', array(
        'default'        => true,
    ));
    $wp_customize->add_control(
        'slide_img_upload_3_checkbox', 
        array(
            'label'    => __( 'Check to hide Slide 3' ),
            'section'  => 'home_img_carousel',
            'settings' => 'slide_img_upload_3_checkbox',
            'type'     => 'checkbox',
        )
    );
    $wp_customize->add_setting( 'slide_img_upload_3' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'slide_img_upload_3', array(
            'label'       => __( 'Slide 3' ),
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
        'label'   => __( 'Headline Text Here:' ),
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
        'label'    => __( 'Descriptive Text Here:' ),
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
        'label'    => __( 'Slide 3 URL Here:' ),
        'section'  => 'home_img_carousel',
        'settings' => 'slide_3_link',
        'type'     => 'text',
    ));

////////////////////////////////////////////////////////////////////
// Homapage "What is Maker Faire"
////////////////////////////////////////////////////////////////////
    $wp_customize->add_section( 'hompage_wimf', array(
        'title' => 'Homepage "What is Maker Faire"',
        'description' => 'This adds the preset intro about What is Maker Faire.',
        'priority' => 105,
    ));
    // Hide checkbox
    $wp_customize->add_setting( 'hompage_wimf_checkbox', array(
        'default'        => false,
    ));
    $wp_customize->add_control(
        'hompage_wimf_checkbox', 
        array(
            'label'    => __( 'Check to hide this section' ),
            'section'  => 'hompage_wimf',
            'settings' => 'hompage_wimf_checkbox',
            'type'     => 'checkbox',
        )
    );

}
add_action( 'customize_register', 'mmf_customizer_settings' );
?>
