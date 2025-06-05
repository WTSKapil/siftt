<?php 
function feature_customizer_settings($wp_customize) {
    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'feature_section' , array(
        'title'      => 'Feature Section',
        'priority'   => 35,
        'panel'   => 'theme_options',
    ) );

    /********* Start Feature Detail *********************/
    $wp_customize->add_setting('feature_main_title', array(
        'default'     => 'Important ',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_main_title', array(
        'label' => 'Main Title',
        'section' => 'feature_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('feature_highlight_title', array(
        'default'     => 'Elements',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_highlight_title', array(
        'label' => 'Highlight Title',
        'section' => 'feature_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('feature_description', array(
        'default'     => 'Our online quiz creator is straightforward and user-friendly. It has all the functionality you need to easily design quantitative, interesting tests that are tailored to your needs.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_description', array(
        'label' => 'Description',
        'section' => 'feature_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('feature_image_1', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/access_anywhere.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_1', array(
        'label'    => 'Feature Image 1',
        'section'  => 'feature_section',
        'settings' => 'feature_image_1',
    ))); 

    $wp_customize->add_setting('feature_title_1', array(
        'default'     => 'Access from Anywhere',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_title_1', array(
        'label' => 'Feature Title 1',
        'section' => 'feature_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('feature_content_1', array(
        'default'     => 'Your quizzes may be accessed, administered, and taken at any time and from any location since they are accessible online for both you and your responders.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_content_1', array(
        'label' => 'Feature Description 1',
        'section' => 'feature_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('feature_image_2', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/quiz_way.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_2', array(
        'label'    => 'Feature Image 2',
        'section'  => 'feature_section',
        'settings' => 'feature_image_2',
    ))); 

    $wp_customize->add_setting('feature_title_2', array(
        'default'     => 'Your Test, Your Way',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_title_2', array(
        'label' => 'Feature Title 2',
        'section' => 'feature_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('feature_content_2', array(
        'default'     => "Start from zero or make use of one of our beautiful templates. Use your company's logo to personalize your quiz so that it matches your website, marketing, and other materials.",
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_content_2', array(
        'label' => 'Feature Description 2',
        'section' => 'feature_section',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('feature_image_3', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/sight_sound.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_3', array(
        'label'    => 'Feature Image 3',
        'section'  => 'feature_section',
        'settings' => 'feature_image_3',
    ))); 

    $wp_customize->add_setting('feature_title_3', array(
        'default'     => 'Sounds and Visions',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_title_3', array(
        'label' => 'Feature Title 3',
        'section' => 'feature_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('feature_content_3', array(
        'default'     => 'Add extra media, such as pictures, videos, and audio files. Additionally, our quiz features offer media choices that increase participation and completion rates.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_content_3', array(
        'label' => 'Feature Description 3',
        'section' => 'feature_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('feature_image_4', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/quiz_device.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_4', array(
        'label'    => 'Feature Image 4',
        'section'  => 'feature_section',
        'settings' => 'feature_image_4',
    ))); 

    $wp_customize->add_setting('feature_title_4', array(
        'default'     => 'One Test, Every Device',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_title_4', array(
        'label' => 'Feature Title 4',
        'section' => 'feature_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('feature_content_4', array(
        'default'     => 'Every delivery platform—including desktop, laptop, tablet, and smartphone—has your test automatically simplified. Make once, then share everywhere.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_content_4', array(
        'label' => 'Feature Description 4',
        'section' => 'feature_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('feature_image_5', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/data_security.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_5', array(
        'label'    => 'Feature Image 5',
        'section'  => 'feature_section',
        'settings' => 'feature_image_5',
    ))); 

    $wp_customize->add_setting('feature_title_5', array(
        'default'     => 'Ensure the Security of the Quiz Data',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_title_5', array(
        'label' => 'Feature Title 5',
        'section' => 'feature_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('feature_content_5', array(
        'default'     => 'Data security is essential for any virtual community where privacy is involved. To give piece of mind, our assessment maker has top-notch, end-to-end security.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_content_5', array(
        'label' => 'Feature Description 5',
        'section' => 'feature_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('feature_image_6', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/instant_sights.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_6', array(
        'label'    => 'Feature Image 6',
        'section'  => 'feature_section',
        'settings' => 'feature_image_6',
    ))); 

    $wp_customize->add_setting('feature_title_6', array(
        'default'     => 'Quick Understanding',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_title_6', array(
        'label' => 'Feature Title 6',
        'section' => 'feature_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('feature_content_6', array(
        'default'     => 'Our quiz tool records participation in real time and calculates scores. For more focused insights, personalize links to each quiz taker and segment reports.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_content_6', array(
        'label' => 'Feature Description 6',
        'section' => 'feature_section',
        'type' => 'textarea',
    ));
    
    /********* End Feature Detail *********************/  
    
}
add_action('customize_register', 'feature_customizer_settings');
?>