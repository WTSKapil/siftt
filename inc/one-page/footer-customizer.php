<?php 
function footer_customizer_settings($wp_customize) 
{
    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'footer_section' , array(
        'title'      => 'Footer Section',
        'priority'   => 70,
        'panel'   => 'theme_options',
    ) );

    /********* Start Footer  Detail *********************/
    $wp_customize->add_setting('facebook_link', array(
        'default'     => 'https://www.facebook.com/',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('facebook_link', array(
        'label' => 'Facebook Link',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('twitter_link', array(
        'default'     => 'https://twitter.com/',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('twitter_link', array(
        'label' => 'Twitter Link',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('instgram_link', array(
        'default'     => 'https://www.instagram.com/',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('instgram_link', array(
        'label' => 'Instagram Link',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('linkedin_link', array(
        'default'     => 'https://www.linkedin.com/',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('linkedin_link', array(
        'label' => 'Linked Link',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('copyright_text', array(
        'default'     => '© 2025 Siftt. All Rights Reserved.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('copyright_text', array(
        'label' => 'Copyright Text',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('powerby_text', array(
        'default'     => "Powered by <a href='https://www.wingstechsolutions.com'>Wings Tech</a>",
        'transport'   => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('powerby_text', array(
        'label' => 'Power by Text',
        'section' => 'footer_section',
        'type' => 'textarea',
    ));
    
    /********* End Footer Detail *********************/  
    
}
add_action('customize_register', 'footer_customizer_settings');

?>