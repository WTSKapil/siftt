<?php 
function cd_customizer_settings($wp_customize) {

    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'header_section' , array(
        'title'      => 'Header Section',
        'priority'   => 15,
        'panel'   => 'theme_options',
    ) );

    $wp_customize->add_setting('header_logo', array(
        'default'     => get_stylesheet_directory_uri() . '/assets/images/logo.svg',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_custom_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'    => 'Header Logo',
        'section'  => 'header_section',
        'settings' => 'header_logo',
    ))); 
    
    $wp_customize->add_setting('header_right_button_label', array(
        'default'     => 'FAQ',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_right_button_label', array(
        'label' => 'Right Button Label',
        'section' => 'header_section',
        'type' => 'text',
    ));
    
}
add_action('customize_register', 'cd_customizer_settings');
?>