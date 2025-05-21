<?php 
function testimonial_customizer_settings($wp_customize) {
    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'testimonial_section' , array(
        'title'      => 'Testimonial Section',
        'priority'   => 40,
        'panel'   => 'theme_options',
    ) );

    /********* Start testimonial Detail *********************/
    $wp_customize->add_setting('testimonial_main_title', array(
        'default'     => 'Customer ',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_main_title', array(
        'label' => 'Main Title',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_highlight_title', array(
        'default'     => 'References',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_highlight_title', array(
        'label' => 'Highlight Title',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));
   
    $wp_customize->add_setting('testimonial_description_1', array(
        'default'     => 'I do not know of any other tool as nice as Siftt.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_description_1', array(
        'label' => 'Testimonial Description 1',
        'section' => 'testimonial_section',
        'type' => 'textarea',
    ));    

    $wp_customize->add_setting('testimonial_name_1', array(
        'default'     => 'George Connolly',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_name_1', array(
        'label' => 'Name 1',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_location_1', array(
        'default'     => 'USA',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_location_1', array(
        'label' => 'Location 1',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_description_2', array(
        'default'     => 'Siftt is incredibly interesting and allows me to provide rapid feedback, make changes to tests, and save a lot of time.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_description_2', array(
        'label' => 'Testimonial Description 2',
        'section' => 'testimonial_section',
        'type' => 'textarea',
    ));    

    $wp_customize->add_setting('testimonial_name_2', array(
        'default'     => 'Jazz Turgut',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_name_2', array(
        'label' => 'Name 2',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_location_2', array(
        'default'     => 'Germany',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_location_2', array(
        'label' => 'Location 2',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_description_3', array(
        'default'     => 'Because we cover a lot of real-life behavioral skills, I like to use photos as questions so that students who struggle with reading may rely on the visuals.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_description_3', array(
        'label' => 'Testimonial Description 3',
        'section' => 'testimonial_section',
        'type' => 'textarea',
    ));    

    $wp_customize->add_setting('testimonial_name_3', array(
        'default'     => 'Sienna Wolke',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_name_3', array(
        'label' => 'Name 3',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_location_3', array(
        'default'     => 'USA',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_location_3', array(
        'label' => 'Location 3',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_description_4', array(
        'default'     => 'The siftt crew has been exceptional. Their assistance and involvement in taking evaluations to the next level was crucial.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_description_4', array(
        'label' => 'Testimonial Description 4',
        'section' => 'testimonial_section',
        'type' => 'textarea',
    ));    

    $wp_customize->add_setting('testimonial_name_4', array(
        'default'     => 'Tapan Chopra',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_name_4', array(
        'label' => 'Name 1',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_location_4', array(
        'default'     => 'India',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_location_4', array(
        'label' => 'Location 4',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_description_5', array(
        'default'     => 'Questwing came to our emergency relief when we needed a platform for computer-based testing in a mad rush. Our examinees provided us with excellent feedback. We are very happy with the service.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_description_5', array(
        'label' => 'Testimonial Description 5',
        'section' => 'testimonial_section',
        'type' => 'textarea',
    ));    

    $wp_customize->add_setting('testimonial_name_5', array(
        'default'     => 'Darius Wong',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_name_5', array(
        'label' => 'Name 5',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_location_5', array(
        'default'     => 'UK',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_location_5', array(
        'label' => 'Location 5',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_description_6', array(
        'default'     => 'We heartily suggest siftt to anybody looking to test the knowledge of exam takers or personnel in both small and large businesses.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_description_6', array(
        'label' => 'Testimonial Description 6',
        'section' => 'testimonial_section',
        'type' => 'textarea',
    ));    

    $wp_customize->add_setting('testimonial_name_6', array(
        'default'     => 'Venus Scpeter',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_name_6', array(
        'label' => 'Name 6',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonial_location_6', array(
        'default'     => 'France',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control('testimonial_location_6', array(
        'label' => 'Location 6',
        'section' => 'testimonial_section',
        'type' => 'text',
    ));
    
    /********* End testimonial Detail *********************/  
    
}
add_action('customize_register', 'testimonial_customizer_settings');
?>