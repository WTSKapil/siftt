<?php 
function about_customizer_settings($wp_customize) 
{
    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'about_section' , array(
        'title'      => 'About Section',
        'priority'   => 25,
        'panel'   => 'theme_options',
    ) );

    /********* Start About  Detail *********************/
    $wp_customize->add_setting('about_highlight_title', array(
        'default'     => 'About',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_highlight_title', array(
        'label' => 'Highlight Title',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_sub_title', array(
        'default'     => 'Siftt',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_sub_title', array(
        'label' => 'Sub Title',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_description', array(
        'default'     => 'Siftt is an easy-to-use platform that lets you construct your own online exams in seconds by picking from a robust question bank built by industry professionals, which includes a variety of candidate assessment question kinds and levels of complexity.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('about_description', array(
        'label' => 'Description',
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('about_counter_1', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/happy_client.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_counter_1', array(
        'label'    => 'Counter 1 Image',
        'section'  => 'about_section',
        'settings' => 'about_counter_1',
    ))); 

    $wp_customize->add_setting('counter_1_Number', array(
        'default'     => '450+',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_1_Number', array(
        'label' => 'Counter 1 Number',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('counter_1_title', array(
        'default'     => 'Content Customers',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_1_title', array(
        'label' => 'Counter 1 Title',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_counter_2', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/ready_question.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_counter_2', array(
        'label'    => 'Counter 2 Image',
        'section'  => 'about_section',
        'settings' => 'about_counter_2',
    ))); 

    $wp_customize->add_setting('counter_2_Number', array(
        'default'     => '5000+',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_2_Number', array(
        'label' => 'Counter 2 Number',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('counter_2_title', array(
        'default'     => 'All Set to Use Questions',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_2_title', array(
        'label' => 'Counter 2 Title',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_counter_3', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/annual_test.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_counter_3', array(
        'label'    => 'Counter 3 Image',
        'section'  => 'about_section',
        'settings' => 'about_counter_3',
    ))); 

    $wp_customize->add_setting('counter_3_Number', array(
        'default'     => '150+',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_3_Number', array(
        'label' => 'Counter 3 Number',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('counter_3_title', array(
        'default'     => 'Annual Examinations',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_3_title', array(
        'label' => 'Counter 3 Title',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_counter_4', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/paper_save.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_counter_4', array(
        'label'    => 'Counter 4 Image',
        'section'  => 'about_section',
        'settings' => 'about_counter_4',
    ))); 

    $wp_customize->add_setting('counter_4_Number', array(
        'default'     => '500+',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_4_Number', array(
        'label' => 'Counter 4 Number',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('counter_4_title', array(
        'default'     => 'Saved Paper Sheets',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('counter_4_title', array(
        'label' => 'Counter 4 Title',
        'section' => 'about_section',
        'type' => 'text',
    ));
    
    /********* End About Detail *********************/  
    
}
add_action('customize_register', 'about_customizer_settings');
?>