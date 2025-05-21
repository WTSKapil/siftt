<?php 
function hero_customizer_settings($wp_customize) 
{
    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'hero_section' , array(
        'title'      => 'Hero Section',
        'priority'   => 20,
        'panel'   => 'theme_options',
    ) );

    /********* Start Hero Detail *********************/
    $wp_customize->add_setting('hero_main_title', array(
        'default'     => 'The Most Efficient Online',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_main_title', array(
        'label' => 'Main Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_highlight_title', array(
        'default'     => 'Test',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_highlight_title', array(
        'label' => 'Highlight Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_sub_title', array(
        'default'     => 'Maker for finding the Right Talent',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_sub_title', array(
        'label' => 'Sub Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_description', array(
        'default'     => 'Create and publish online exams with ease, and analyze replies in real time to properly discover the best prospects for your business.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => 'Description',
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('hero_btn_label', array(
        'default'     => 'Request a Demo',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_btn_label', array(
        'label' => 'Button Label',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_screen_image', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/screen.png',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_screen_image', array(
        'label'    => 'Screen Image',
        'section'  => 'hero_section',
        'settings' => 'hero_screen_image',
    ))); 

    $wp_customize->add_setting('hero_screen_title_1', array(
        'default'     => 'Simple to Utilize',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_screen_title_1', array(
        'label' => 'Screen Image Title 1',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_screen_title_2', array(
        'default'     => 'Reliable',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_screen_title_2', array(
        'label' => 'Screen Image Title 2',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_screen_title_3', array(
        'default'     => 'Safeguard',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('hero_screen_title_3', array(
        'label' => 'Screen Image Title 3',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    /********* End Hero Detail *********************/  
    
}
add_action('customize_register', 'hero_customizer_settings');

?>