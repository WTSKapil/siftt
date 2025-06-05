<?php 
function solution_customizer_settings($wp_customize) 
{
    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'solution_section' , array(
        'title'      => 'Solution Section',
        'priority'   => 30,
        'panel'   => 'theme_options',
    ) );

    /********* Start Solution  Detail *********************/
    $wp_customize->add_setting('solution_main_title', array(
        'default'     => 'Ways to Assess Your ',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('solution_main_title', array(
        'label' => 'Main Title',
        'section' => 'solution_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('solution_highlight_title', array(
        'default'     => 'Industry',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('solution_highlight_title', array(
        'label' => 'Highlight Title',
        'section' => 'solution_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('solution_description', array(
        'default'     => "Siftt's assessment solutions are widely used across several sectors. To find the ideal candidates for training, speed up self-learning, recruit the right individuals, and deliver extremely secure assessments, use online tests and quizzes. With thousands of ready-to-use questions, professionally-designed skill tests, and configurable templates, our quiz library lets you get started right away.",
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('solution_description', array(
        'label' => 'Description',
        'section' => 'solution_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('industry_image_1', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/associations_nonprofit.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'industry_image_1', array(
        'label'    => 'Industry 1 Image',
        'section'  => 'solution_section',
        'settings' => 'industry_image_1',
    ))); 

    $wp_customize->add_setting('industry_1_title', array(
        'default'     => 'Groups and Non-Profit',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('industry_1_title', array(
        'label' => 'Industry 1 Title',
        'section' => 'solution_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('industry_image_2', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/automobile.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'industry_image_2', array(
        'label'    => 'Industry 2 Image',
        'section'  => 'solution_section',
        'settings' => 'industry_image_2',
    ))); 

    $wp_customize->add_setting('industry_2_title', array(
        'default'     => 'Vehicles',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('industry_2_title', array(
        'label' => 'Industry 2 Title',
        'section' => 'solution_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('industry_image_3', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/banking.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'industry_image_3', array(
        'label'    => 'Industry 3 Image',
        'section'  => 'solution_section',
        'settings' => 'industry_image_3',
    ))); 

    $wp_customize->add_setting('industry_3_title', array(
        'default'     => 'Investing',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('industry_3_title', array(
        'label' => 'Industry 3 Title',
        'section' => 'solution_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('industry_image_4', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/biotechnology.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'industry_image_4', array(
        'label'    => 'Industry 4 Image',
        'section'  => 'solution_section',
        'settings' => 'industry_image_4',
    ))); 

    $wp_customize->add_setting('industry_4_title', array(
        'default'     => 'Biotechnology',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('industry_4_title', array(
        'label' => 'Industry 4 Title',
        'section' => 'solution_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('industry_button_label', array(
        'default'     => 'View More',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('industry_button_label', array(
        'label' => 'Button Label',
        'section' => 'solution_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('industry_button_link', array(
        'default'     => '#',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('industry_button_link', array(
        'label' => 'Button Link',
        'section' => 'solution_section',
        'type' => 'text',
    ));
    
    /********* End Solution Detail *********************/  
    
}
add_action('customize_register', 'solution_customizer_settings');
?>