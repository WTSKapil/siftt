<?php 
function faq_customizer_settings($wp_customize) {
    $wp_customize->add_panel( 'theme_options', array(
        'title' => __( 'Theme Options', 'siftt' ),
        'priority' => 10, // Mixed with top-level-section hierarchy.
      ) );

    $wp_customize->add_section( 'faq_section' , array(
        'title'      => 'FAQ Section',
        'priority'   => 45,
        'panel'   => 'theme_options',
    ) );

    /********* Start faq Detail *********************/
    $wp_customize->add_setting('faq_main_title', array(
        'default'     => 'Frequently Asked ',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_main_title', array(
        'label' => 'Main Title',
        'section' => 'faq_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('faq_highlight_title', array(
        'default'     => 'Questions',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_highlight_title', array(
        'label' => 'Highlight Title',
        'section' => 'faq_section',
        'type' => 'text',
    ));
   
    $wp_customize->add_setting('faq_question_1', array(
        'default'     => 'When someone takes my quiz, do I get notified right away?',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_question_1', array(
        'label' => 'FAQ Question 1',
        'section' => 'faq_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('faq_answer_1', array(
        'default'     => 'You can set or disable alerts according to your preferences.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_answer_1', array(
        'label' => 'FAQ Answer 1',
        'section' => 'faq_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('faq_question_2', array(
        'default'     => 'Is my data secure on Siftt?',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_question_2', array(
        'label' => 'FAQ Question 2',
        'section' => 'faq_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('faq_answer_2', array(
        'default'     => 'We take data privacy extremely seriously, so please be assured. Siftt does not disclose any of your data, including assessment taker or content data. We do not commercialize data it is not part of our business plan. Your information is yours, and only you may approach it. Unless you share it, no one else will be able to view it in its full or in part.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_answer_2', array(
        'label' => 'FAQ Answer 2',
        'section' => 'faq_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('faq_question_3', array(
        'default'     => 'Is there a restriction on the number of quizzes or attempts?',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_question_3', array(
        'label' => 'FAQ Question 3',
        'section' => 'faq_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('faq_answer_3', array(
        'default'     => 'Our subscriptions include an infinite number of quizzes and tries. There is no limit to the amount of quizzes that every quiz taker can take.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_answer_3', array(
        'label' => 'FAQ Answer 3',
        'section' => 'faq_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('faq_question_4', array(
        'default'     => 'Is this an online web application for competitive exams?',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_question_4', array(
        'label' => 'FAQ Question 4',
        'section' => 'faq_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('faq_answer_4', array(
        'default'     => 'Siftt may be used for every form of online test, making it the most adaptable and finest online exam web application accessible worldwide.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_answer_4', array(
        'label' => 'FAQ Answer 4',
        'section' => 'faq_section',
        'type' => 'textarea',
    ));

     $wp_customize->add_setting('faq_question_5', array(
        'default'     => 'What happens if I require the quiz in a different language?',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_question_5', array(
        'label' => 'FAQ Question 5',
        'section' => 'faq_section',
        'type' => 'text',
    ));    

    $wp_customize->add_setting('faq_answer_5', array(
        'default'     => 'Yes, you may build a quiz in any language, including English, but our question bank is only available in English.',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('faq_answer_5', array(
        'label' => 'FAQ Answer 5',
        'section' => 'faq_section',
        'type' => 'textarea',
    ));
    
    /********* End faq Detail *********************/  
    
}
add_action('customize_register', 'faq_customizer_settings');
?>