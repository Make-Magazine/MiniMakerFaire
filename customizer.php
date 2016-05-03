<?php
// ADD IMAGE, TEXT, and URL (Heading, Subtext, Link) TO FIRST IMAGE IN SEQUENCE
function mmf_customizer_settings( $wp_customize ) {
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_control( 'header_image' );
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_panel( 'widgets' );

////////////////////////////////////////////////////////////////////
// Header Logo and CTA
////////////////////////////////////////////////////////////////////
    $wp_customize->add_section( 'header_controls', array(
        'title' => 'Header Logo and CTA',
        'priority' => 20,
    ));
    // LOGO
    $wp_customize->add_setting( 'header_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'header_logo', array(
            'label'       => __( 'Faire Logo' ),
            'section'     => 'header_controls',
            'settings'    => 'header_logo',
            'description' => 'Make sure to use a large enough logo of at least 350px width.'
        )
    ));

    // BUTTON TEXT
    $wp_customize->add_setting('header_cta_radio', array(
        'default'        => 'value2',
    ));
 
    $wp_customize->add_control('header_cta_radio', array(
        'label'      => 'Call to action button',
        'section'    => 'header_controls',
        'description'   => 'Adds a button in the header to the right of the navigation.<br /><img src="../wp-content/themes/MiniMakerFaire/img/header-with-cta-admin-example.png" class="wp-admin-photo" />',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Show',
            'value2' => 'Hide',
        ),
    ));

    $wp_customize->add_setting( 'header_cta_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_header_cta_text'
    ));
    function sanitize_header_cta_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    } 
    $wp_customize->add_control( 'header_cta_text', array(
        'label'         => __( 'Button text' ),
        'section'       => 'header_controls',
        'settings'      => 'header_cta_text',
        'type'          => 'text'
    ));
    // BUTTON LINK
    $wp_customize->add_setting( 'header_cta_link', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_header_cta_link',
    ));
    function sanitize_header_cta_link( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'header_cta_link', array(
        'label'    => __( 'Button URL' ),
        'section'  => 'header_controls',
        'settings' => 'header_cta_link',
        'type'     => 'text',
    ));


////////////////////////////////////////////////////////////////////
// Footer Social Media Links
////////////////////////////////////////////////////////////////////
    $wp_customize->add_section( 'footer_social_media', array(
        'title' => 'Footer Social Media Links',
        'description'   => 'Enter your social media URL\'s to show the icons in the footer. Leave blank to not show the icons.',
        'priority' => 200,
    ));
    // FACEBOOK LINK
    $wp_customize->add_setting( 'facebook_link', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_facebook_link',
    ));
    function sanitize_facebook_link( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'facebook_link', array(
        'label'    => __( 'Facebook URL' ),
        'section'  => 'footer_social_media',
        'settings' => 'facebook_link',
        'type'     => 'url',
    ));
    // TWITTER LINK
    $wp_customize->add_setting( 'twitter_link', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_twitter_link',
    ));
    function sanitize_twitter_link( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'twitter_link', array(
        'label'    => __( 'Twitter URL' ),
        'section'  => 'footer_social_media',
        'settings' => 'twitter_link',
        'type'     => 'url',
    ));
    // INSTAGRAM LINK
    // $wp_customize->add_setting( 'instagram_link', array(
    //     'default'           => '',
    //     'sanitize_callback' => 'sanitize_instagram_link',
    // ));
    // function sanitize_instagram_link( $input ) {
    //     return wp_kses_post( force_balance_tags( $input ) );
    // }  
    // $wp_customize->add_control( 'instagram_link', array(
    //     'label'    => __( 'Instagram URL' ),
    //     'section'  => 'footer_social_media',
    //     'settings' => 'instagram_link',
    //     'type'     => 'url',
    // ));
    // PINTREST LINK
    $wp_customize->add_setting( 'pintrest_link', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_pintrest_link',
    ));
    function sanitize_pintrest_link( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'pintrest_link', array(
        'label'    => __( 'Pintrest URL' ),
        'section'  => 'footer_social_media',
        'settings' => 'pintrest_link',
        'type'     => 'url',
    ));
    // GOOGLE+ LINK
    $wp_customize->add_setting( 'google_plus_link', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_google_plus_link',
    ));
    function sanitize_google_plus_link( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }  
    $wp_customize->add_control( 'google_plus_link', array(
        'label'    => __( 'Google+ URL' ),
        'section'  => 'footer_social_media',
        'settings' => 'google_plus_link',
        'type'     => 'url',
    ));
}
add_action( 'customize_register', 'mmf_customizer_settings' );
?>
