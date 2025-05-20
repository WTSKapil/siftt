<?php
/**
 * Template Name: Home Template 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package siftt
 */

get_header();
	while ( have_posts() ) :
		the_post();

		$hero_main_title = get_theme_mod( 'hero_main_title',"The Most Efficient Online" );
		$hero_highlight_title = get_theme_mod( 'hero_highlight_title',"Test" );
		$hero_sub_title = get_theme_mod( 'hero_sub_title',"Maker for finding the Right Talent" );
		$hero_description = get_theme_mod( 'hero_description',"Create and publish online exams with ease, and analyze replies in real time to properly discover the best prospects for your business." );
		$hero_btn_label = get_theme_mod( 'hero_btn_label',"Request a Demo" );
		$hero_screen_image = get_theme_mod( 'hero_screen_image', get_stylesheet_directory_uri()."/assets/images/screen.png" );
		$hero_screen_title_1 = get_theme_mod( 'hero_screen_title_1',"Simple to Utilize" );
		$hero_screen_title_2 = get_theme_mod( 'hero_screen_title_2',"Reliable" );
		$hero_screen_title_3 = get_theme_mod( 'hero_screen_title_3',"Safeguard" );

		$about_highlight_title = get_theme_mod( 'about_highlight_title',"About" );
		$about_sub_title = get_theme_mod( 'about_sub_title',"Siftt" );
		$about_description = get_theme_mod( 'about_description',"Siftt is an easy-to-use platform that lets you construct your own online exams in seconds by picking from a robust question bank built by industry professionals, which includes a variety of candidate assessment question kinds and levels of complexity" );

		$about_counter_1 = get_theme_mod( 'about_counter_1', get_stylesheet_directory_uri()."/assets/images/happy_client.svg" );
		$counter_1_Number = get_theme_mod( 'counter_1_Number',"450+" );
		$counter_1_title = get_theme_mod( 'counter_1_title',"Content Customers" );

		$about_counter_2 = get_theme_mod( 'about_counter_2', get_stylesheet_directory_uri()."/assets/images/ready_question.svg" );
		$counter_2_Number = get_theme_mod( 'counter_2_Number',"5000+" );
		$counter_2_title = get_theme_mod( 'counter_2_title',"All Set to Use Questions" );

		$about_counter_3 = get_theme_mod( 'about_counter_3', get_stylesheet_directory_uri()."/assets/images/annual_test.svg" );
		$counter_3_Number = get_theme_mod( 'counter_3_Number',"150+" );
		$counter_3_title = get_theme_mod( 'counter_3_title',"Annual Examinations" );

		$about_counter_4 = get_theme_mod( 'about_counter_4', get_stylesheet_directory_uri()."/assets/images/paper_save.svg" );
		$counter_4_Number = get_theme_mod( 'counter_4_Number',"500+" );
		$counter_4_title = get_theme_mod( 'counter_4_title',"Saved Paper Sheets" );

		$solution_main_title = get_theme_mod( 'solution_main_title',"Ways to Assess Your " );
		$solution_highlight_title = get_theme_mod( 'solution_highlight_title',"Industry" );
		$solution_description = get_theme_mod( 'solution_description',"Siftt's assessment solutions are widely used across several sectors. To find the ideal candidates for training, speed up self-learning, recruit the right individuals, and deliver extremely secure assessments, use online tests and quizzes. With thousands of ready-to-use questions, professionally-designed skill tests, and configurable templates, our quiz library lets you get started right away." );
		$industry_image_1 = get_theme_mod( 'industry_image_1', get_stylesheet_directory_uri()."/assets/images/associations_nonprofit.svg" );
		$industry_1_title = get_theme_mod( 'industry_1_title',"Groups and Non-Profit" );
		$industry_image_2 = get_theme_mod( 'industry_image_2', get_stylesheet_directory_uri()."/assets/images/automobile.svg" );
		$industry_2_title = get_theme_mod( 'industry_2_title',"Vehicles" );
		$industry_image_3 = get_theme_mod( 'industry_image_3', get_stylesheet_directory_uri()."/assets/images/banking.svg" );
		$industry_3_title = get_theme_mod( 'industry_3_title',"Investing" );
		$industry_image_4 = get_theme_mod( 'industry_image_4', get_stylesheet_directory_uri()."/assets/images/biotechnology.svg" );
		$industry_4_title = get_theme_mod( 'industry_4_title',"Biotechnology" );
		$industry_button_label = get_theme_mod( 'industry_button_label',"View More" );
		$industry_button_link = get_theme_mod( 'industry_button_link',"#" );

		$feature_main_title = get_theme_mod( 'feature_main_title',"Important " );
		$feature_highlight_title = get_theme_mod( 'feature_highlight_title',"Elements" );
		$feature_description = get_theme_mod( 'feature_description',"Our online quiz creator is straightforward and user-friendly. It has all the functionality you need to easily design quantitative, interesting tests that are tailored to your needs." );

		$feature_image_1 = get_theme_mod( 'feature_image_1', get_stylesheet_directory_uri()."/assets/images/access_anywhere.svg" );
		$feature_title_1 = get_theme_mod( 'feature_title_1',"Access from Anywhere" );
		$feature_content_1 = get_theme_mod( 'feature_content_1',"Your quizzes may be accessed, administered, and taken at any time and from any location since they are accessible online for both you and your responders." );

		$feature_image_2 = get_theme_mod( 'feature_image_2', get_stylesheet_directory_uri()."/assets/images/quiz_way.svg" );
		$feature_title_2 = get_theme_mod( 'feature_title_2',"Your Test, Your Way" );
		$feature_content_2 = get_theme_mod( 'feature_content_2',"Start from zero or make use of one of our beautiful templates. Use your company's logo to personalize your quiz so that it matches your website, marketing, and other materials." );

		$feature_image_3 = get_theme_mod( 'feature_image_3', get_stylesheet_directory_uri()."/assets/images/sight_sound.svg" );
		$feature_title_3 = get_theme_mod( 'feature_title_3',"Sounds and Visions" );
		$feature_content_3 = get_theme_mod( 'feature_content_3',"Add extra media, such as pictures, videos, and audio files. Additionally, our quiz features offer media choices that increase participation and completion rates." );

		$feature_image_4 = get_theme_mod( 'feature_image_4', get_stylesheet_directory_uri()."/assets/images/quiz_device.svg" );
		$feature_title_4 = get_theme_mod( 'feature_title_4',"One Test, Every Device" );
		$feature_content_4 = get_theme_mod( 'feature_content_4',"Every delivery platform—including desktop, laptop, tablet, and smartphone—has your test automatically simplified. Make once, then share everywhere." );

		$feature_image_5 = get_theme_mod( 'feature_image_5', get_stylesheet_directory_uri()."/assets/images/data_security.svg" );
		$feature_title_5 = get_theme_mod( 'feature_title_5',"Ensure the Security of the Quiz Data" );
		$feature_content_5 = get_theme_mod( 'feature_content_5',"Data security is essential for any virtual community where privacy is involved. To give piece of mind, our assessment maker has top-notch, end-to-end security." );

		$feature_image_6 = get_theme_mod( 'feature_image_6', get_stylesheet_directory_uri()."/assets/images/instant_sights.svg" );
		$feature_title_6 = get_theme_mod( 'feature_title_6',"Quick Understanding" );
		$feature_content_6 = get_theme_mod( 'feature_content_6',"Our quiz tool records participation in real time and calculates scores. For more focused insights, personalize links to each quiz taker and segment reports." );

		$testimonial_main_title = get_theme_mod( 'testimonial_main_title',"Customer " );
		$testimonial_highlight_title = get_theme_mod( 'testimonial_highlight_title',"References" );

		$testimonial_description_1 = get_theme_mod( 'testimonial_description_1',"I do not know of any other tool as nice as Siftt." );
		$testimonial_name_1 = get_theme_mod( 'testimonial_name_1',"George Connolly" );
		$testimonial_location_1 = get_theme_mod( 'testimonial_location_1',"USA" );

		$testimonial_description_2 = get_theme_mod( 'testimonial_description_2',"Siftt is incredibly interesting and allows me to provide rapid feedback, make changes to tests, and save a lot of time." );
		$testimonial_name_2 = get_theme_mod( 'testimonial_name_2',"Jazz Turgut" );
		$testimonial_location_2 = get_theme_mod( 'testimonial_location_2',"Germany" );

		$testimonial_description_3 = get_theme_mod( 'testimonial_description_3',"Because we cover a lot of real-life behavioral skills, I like to use photos as questions so that students who struggle with reading may rely on the visuals." );
		$testimonial_name_3 = get_theme_mod( 'testimonial_name_3',"Sienna Wolke" );
		$testimonial_location_3 = get_theme_mod( 'testimonial_location_3',"USA" );

		$testimonial_description_4 = get_theme_mod( 'testimonial_description_4',"The siftt crew has been exceptional. Their assistance and involvement in taking evaluations to the next level was crucial." );
		$testimonial_name_4 = get_theme_mod( 'testimonial_name_4',"Tapan Chopra" );
		$testimonial_location_4 = get_theme_mod( 'testimonial_location_4',"India" );

		$testimonial_description_5 = get_theme_mod( 'testimonial_description_5',"Siftt responded to our situation when we required a platform for computer-based testing in a hurry. Our examinees gave us wonderful reviews. We are quite satisfied with the service." );
		$testimonial_name_5 = get_theme_mod( 'testimonial_name_5',"Darius Wong" );
		$testimonial_location_5 = get_theme_mod( 'testimonial_location_5',"UK" );

		$testimonial_description_6 = get_theme_mod( 'testimonial_description_6',"We heartily suggest siftt to anybody looking to test the knowledge of exam takers or personnel in both small and large businesses." );
		$testimonial_name_6 = get_theme_mod( 'testimonial_name_6',"Venus Scpeter" );
		$testimonial_location_6 = get_theme_mod( 'testimonial_location_6',"France" );


		$faq_main_title = get_theme_mod( 'faq_main_title',"Frequently Asked " );
		$faq_highlight_title = get_theme_mod( 'faq_highlight_title',"Questions" );

		$faq_question_1 = get_theme_mod( 'faq_question_1',"When someone takes my quiz, do I get notified right away?" );
		$faq_answer_1 = get_theme_mod( 'faq_answer_1',"You can set or disable alerts according to your preferences." );

		$faq_question_2 = get_theme_mod( 'faq_question_2',"Is my data secure on Siftt?" );
		$faq_answer_2 = get_theme_mod( 'faq_answer_2',"We take data privacy extremely seriously, so please be assured. Siftt does not disclose any of your data, including assessment taker or content data. We do not commercialize data; it is not part of our business plan. Your information is yours, and only you may approach it. Unless you share it, no one else will be able to view it in its full or in part." );

		$faq_question_3 = get_theme_mod( 'faq_question_3',"Is there a restriction on the number of quizzes or attempts?" );
		$faq_answer_3 = get_theme_mod( 'faq_answer_3',"Our subscriptions include an infinite number of quizzes and tries. There is no limit to the amount of quizzes that every quiz taker can take." );

		$faq_question_4 = get_theme_mod( 'faq_question_4',"Is this an online web application for competitive exams?" );
		$faq_answer_4 = get_theme_mod( 'faq_answer_4',"Siftt may be used for every form of online test, making it the most adaptable and finest online exam web application accessible worldwide." );

		$faq_question_5 = get_theme_mod( 'faq_question_5',"What happens if I require the quiz in a different language?" );
		$faq_answer_5 = get_theme_mod( 'faq_answer_5',"Yes, you may build a quiz in any language, including English, but our question bank is only available in English." );
?>	

	<section class="hero position-relative highlight-background overflow-hidden">
		<div class="container">
			<div class="row align-items-center flex-column-reverse flex-lg-row justify-content-between">
				<div class="col-md-12 col-lg-5">
					<div class="hero-content">
						<h2 class="section-title  ml4 text-unset mb-0"><?php echo $hero_main_title; ?></h2>
						<h2 class="highlight-title spin-title d-inline"><?php echo $hero_highlight_title; ?></h2>
						<br>
						<h2 class="section-title ml4 text-unset"><?php echo $hero_sub_title; ?></h2>
						<p class="content"><?php echo $hero_description; ?></p>
						<a href="#contact" class="outline-btn"><?php echo $hero_btn_label; ?></a>
					</div>
				</div>
				<div class="col-10 col-md-10 col-lg-6 position-relative">
					<div class="hero-image position-relative">
						<img src="<?php echo $hero_screen_image; ?>" alt="Screen" class="img-fluid">						
						<div class="use-tabs">
							<span><?php echo $hero_screen_title_1; ?></span>
						</div>
						<div class="accurate-tabs">
							<span><?php echo $hero_screen_title_2; ?></span>
						</div>
						<div class="secure-tabs">
							<span><?php echo $hero_screen_title_3; ?></span>
						</div>
					</div>
					<div class="watermark-logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-logo.svg" alt="logo" />
					</div>
				</div>
			</div>
		</div>
		<div class="hero-clip"></div>
		<div class="curve-shape-block">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-lg.svg" alt="">
		</div>		

	</section>

	<!-- *****************************
		about section html start here
	***************************** -->
	<section class="about my-80 position-relative overflow-hidden" id="about">
		<div class="container">
			<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="600"
				data-aos-duration="500">
				<div class="col-md-10">
					<div class="section-title-content text-center">
						<h3 class="section-title"><span class="highlight-title"><?php echo $about_highlight_title; ?></span> <?php echo $about_sub_title; ?></h3>
						<p class="content"><?php echo $about_description; ?></p>
					</div>
				</div>
			</div>
			<div class="row about-row g-0 justify-content-center">
				<div class="col-sm-6 col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
					<div class="about-content-wrapper border-bottom-light text-center mb-md-0 pb-5 pb-lg-0">
						<div class="about-content-img">
							<img src="<?php echo $about_counter_1; ?>" alt="Siftt" />
						</div>
						<h4><?php echo $counter_1_Number; ?></h4>
						<span><?php echo $counter_1_title; ?></span>
					</div>
				</div>

				<div class="col-sm-6 col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
					<div
						class="about-content-wrapper border-bottom-light border-right-none text-center pb-5 pb-lg-0">
						<div class="about-content-img">
							<img src="<?php echo $about_counter_2; ?>" alt="Siftt" />
						</div>
						<h4><?php echo $counter_2_Number; ?></h4>
						<span><?php echo $counter_2_title; ?></span>
					</div>
				</div>
				<div class="col-sm-6 col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
					<div class="about-content-wrapper border-bottom-0 text-center pt-5 pt-lg-0">
						<div class="about-content-img">
							<img src="<?php echo $about_counter_3; ?>" alt="Siftt" />
						</div>
						<h4><?php echo $counter_3_Number; ?></h4>
						<span><?php echo $counter_3_title; ?></span>
					</div>
				</div>
				<div class="col-sm-6 col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600"
					data-aos-duration="500">
					<div class="about-content-wrapper border-bottom-0 border-end-0 text-center pt-5 pt-lg-0">
						<div class="about-content-img">
							<img src="<?php echo $about_counter_4; ?>" alt="Siftt" />
						</div>
						<h4><?php echo $counter_4_Number; ?></h4>
						<span><?php echo $counter_4_title; ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="left-pattern-box bottom-white-pattern">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-left.svg" alt="pattern" />
		</div>
		<div class="right-pattern-box">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-right.svg" alt="pattern" />
		</div>
	</section>
	<!-- *****************************
	about section html end here
	***************************** -->

	<!-- *****************************
	industries section html start here
	***************************** -->
	<section class="industries py-100 position-relative highlight-background overflow-hidden" id="industry">
		<div class="container">
			<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="600"
				data-aos-duration="500">
				<div class="col-md-10">
					<div class="section-title-content text-center">
						<h3 class="section-title"><?php echo $solution_main_title; ?><span class="highlight-title"> <?php echo $solution_highlight_title; ?><span></h3>
						<p class="content"><?php echo $solution_description; ?></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center g-4">
				<div class="col-md-4 col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600"
					data-aos-duration="500">
					<div class="indus-block">
						<div class="indus-img-block">
							<img src="<?php echo $industry_image_1; ?>" alt="<?php echo $industry_1_title; ?>" />
						</div>
						<h6> <?php echo $industry_1_title; ?></h6>
					</div>
				</div>
				<div class="col-md-4 col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600"
					data-aos-duration="500">
					<div class="indus-block">
						<div class="indus-img-block">
							<img src="<?php echo $industry_image_2; ?>" alt="<?php echo $industry_2_title; ?>" />
						</div>
						<h6><?php echo $industry_2_title; ?></h6>
					</div>
				</div>
				<div class="col-md-4 col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600"
					data-aos-duration="500">
					<div class="indus-block">
						<div class="indus-img-block">
							<img src="<?php echo $industry_image_3; ?>" alt="<?php echo $industry_3_title; ?>" />
						</div>
						<h6><?php echo $industry_3_title; ?></h6>
					</div>
				</div>
				<div class="col-md-4 col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600"
					data-aos-duration="500">
					<div class="indus-block">
						<div class="indus-img-block">
							<img src="<?php echo $industry_image_4; ?>" alt="<?php echo $industry_4_title; ?>" />
						</div>
						<h6><?php echo $industry_4_title; ?></h6>
					</div>
				</div>
			</div>
			<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="600"
				data-aos-duration="500">
				<div class="col-md-5">
					<div class="view-btn-block text-center">
						<a class="primary-btn view-btn" href="<?php echo $industry_button_link; ?>"><?php echo $industry_button_label; ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="left-pattern-box blue-left-pattern">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/industry-left.svg" alt="pattern" />
		</div>
		<div class="right-pattern-box blue-right-top">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/industry-right.svg" alt="pattern" />
		</div>
		<div class="curve-shape-block">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-lg.svg" alt="">
		</div>
		<div class="curve-upper-shape-block">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-lg.svg" alt="">
		</div>
	</section>
	<!-- *****************************
	industries section html end here
	***************************** -->

	<!-- *****************************
        features section html start here
        ***************************** -->
        <section class="features my-80 position-relative overflow-hidden" id="feature">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="600"
                    data-aos-duration="500">
                    <div class="col-md-10">
                        <div class="section-title-content text-center">
                            <h3 class="section-title"><?php echo $feature_main_title; ?><span class="highlight-title"><?php echo $feature_highlight_title; ?></span></h3>
                            <p class="content"><?php echo $feature_description; ?></p>
                        </div>
                    </div>
                </div>
                <div class="feature-wrapper">
                    <div class="row justify-content-center g-0">
                        <div class="col-md-6 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="600"
                            data-aos-duration="500">
                            <div class="feature-block">
                                <div class="feature-img-block">
                                    <img src="<?php echo $feature_image_1; ?>" alt="<?php echo $feature_title_1; ?>" />
                                </div>
                                <div>
                                    <h6><?php echo $feature_title_1; ?></h6>
                                    <p class="content"><?php echo $feature_content_1; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="600"
                            data-aos-duration="500">
                            <div class="feature-block">
                                <div class="feature-img-block">
                                    <img src="<?php echo $feature_image_2; ?>" alt="<?php echo $feature_title_2; ?>" />
                                </div>
                                <div>
                                    <h6><?php echo $feature_title_2; ?></h6>
                                    <p class="content"><?php echo $feature_content_2; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="600"
                            data-aos-duration="500">
                            <div class="feature-block">
                                <div class="feature-img-block">
                                    <img src="<?php echo $feature_image_3; ?>" alt="<?php echo $feature_title_3; ?>" />
                                </div>
                                <div>
                                    <h6><?php echo $feature_title_3; ?></h6>
                                    <p class="content"><?php echo $feature_content_3; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="600"
                            data-aos-duration="500">
                            <div class="feature-block">
                                <div class="feature-img-block">
                                    <img src="<?php echo $feature_image_4; ?>" alt="<?php echo $feature_title_4; ?>" />
                                </div>
                                <div>
                                    <h6><?php echo $feature_title_4; ?></h6>
                                    <p class="content"><?php echo $feature_content_4; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="600"
                            data-aos-duration="500">
                            <div class="feature-block mt-15">
                                <div class="feature-img-block">
                                    <img src="<?php echo $feature_image_5; ?>" alt="<?php echo $feature_title_5; ?>" />
                                </div>
                                <div>
                                    <h6><?php echo $feature_title_5; ?></h6>
                                    <p class="content"><?php echo $feature_content_5; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="600"
                            data-aos-duration="500">
                            <div class="feature-block mt-15">
                                <div class="feature-img-block">
                                    <img src="<?php echo $feature_image_6; ?>" alt="<?php echo $feature_title_6; ?>" />
                                </div>
                                <div>
                                    <h6><?php echo $feature_title_6; ?></h6>
                                    <p class="content"><?php echo $feature_content_6; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-pattern-box bottom-white-pattern">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature-left.svg" alt="pattern" />
            </div>
            <div class="right-pattern-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature-right.svg" alt="pattern" />
            </div>
        </section>
        <!-- *****************************
        features section html end here
        ***************************** -->

	    <!-- *******************************
        testimonials section html start here
        ******************************** -->
        <section class="testimonial py-100 position-relative highlight-background" id="testimonial">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                    <div class="col-md-10">
                        <div class="section-title-content text-center">
                            <h3 class="section-title"><?php echo $testimonial_main_title; ?><span class="highlight-title"> <?php echo $testimonial_highlight_title; ?></span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme client-slider">
                            <div class="client-card">
                                <div class="client-comments">
                                    <p><?php echo $testimonial_description_1; ?></p>
                                </div>
                                <div class="d-flex client-flex">                                    
                                    <div class="flex-grow-1 ms-0 client-title">
                                        <div>
                                            <h5><?php echo $testimonial_name_1; ?></h5>
                                            <span><?php echo $testimonial_location_1; ?></span>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comma.svg" alt="Siftt" />
                                    </div>
                                </div>
                            </div>
                            <div class="client-card">
                                <div class="client-comments">
                                    <p><?php echo $testimonial_description_2; ?></p>
                                </div>
                                <div class="d-flex client-flex">                                    
                                    <div class="flex-grow-1 ms-0 client-title">
                                        <div>
                                            <h5><?php echo $testimonial_name_2; ?></h5>
                                            <span><?php echo $testimonial_location_2; ?></span>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comma.svg" alt="Siftt" />
                                    </div>
                                </div>
                            </div>
                            <div class="client-card">
                                <div class="client-comments">
                                    <p><?php echo $testimonial_description_3; ?></p>
                                </div>
                                <div class="d-flex client-flex">
                                    <div class="flex-grow-1 ms-0 client-title">
                                        <div>
                                            <h5><?php echo $testimonial_name_3; ?></h5>
                                            <span><?php echo $testimonial_location_3; ?></span>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comma.svg" alt="Siftt" />
                                    </div>
                                </div>
                            </div>
                            <div class="client-card">
                                <div class="client-comments">
                                    <p><?php echo $testimonial_description_4; ?></p>
                                </div>
                                <div class="d-flex client-flex">
                                    <div class="flex-grow-1 ms-0 client-title">
                                        <div>
                                            <h5><?php echo $testimonial_name_4; ?></h5>
                                            <span><?php echo $testimonial_location_4; ?></span>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comma.svg" alt="Siftt" />
                                    </div>
                                </div>
                            </div>
                            <div class="client-card">
                                <div class="client-comments">
                                    <p><?php echo $testimonial_description_5; ?></p>
                                </div>
                                <div class="d-flex client-flex">
                                    <div class="flex-grow-1 ms-0 client-title">
                                        <div>
                                            <h5><?php echo $testimonial_name_5; ?></h5>
                                            <span><?php echo $testimonial_location_5; ?></span>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comma.svg" alt="Siftt" />
                                    </div>
                                </div>
                            </div>
                            <div class="client-card">
                                <div class="client-comments">
                                    <p><?php echo $testimonial_description_6; ?></p>
                                </div>
                                <div class="d-flex client-flex">
                                    <div class="flex-grow-1 ms-0 client-title">
                                        <div>
                                            <h5><?php echo $testimonial_name_6; ?></h5>
                                            <span><?php echo $testimonial_location_6; ?></span>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comma.svg" alt="Siftt" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>            
            <div class="right-pattern-box blue-right-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-right.svg" alt="pattern" />
            </div>
            <div class="curve-shape-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-lg.svg" alt="">
            </div>
            <div class="curve-upper-shape-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-lg.svg" alt="">
            </div>
        </section>
        <!-- *****************************
        testimonials section html end here
        *********************************-->

	    <!-- **********************
        FAQ section html start here
        ***************************-->
        <section class="faq my-80 position-relative overflow-hidden" id="faq">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="600"
                    data-aos-duration="500">
                    <div class="col-md-10">
                        <div class="section-title-content text-center">
                            <h3 class="section-title"><?php echo $faq_main_title; ?><span class="highlight-title"><?php echo $faq_highlight_title; ?></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion-block">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <p><?php echo $faq_question_1; ?></p>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="content"><?php echo $faq_answer_1; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <p><?php echo $faq_question_2; ?></p>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="content"><?php echo $faq_answer_2; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <p><?php echo $faq_question_3; ?></p>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="content"><?php echo $faq_answer_3; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <p><?php echo $faq_question_4; ?></p>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="content"><?php echo $faq_answer_4; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <p><?php echo $faq_question_5; ?></p>
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="content"><?php echo $faq_answer_5; ?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-pattern-box bottom-white-pattern">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-left.svg" alt="pattern" />
            </div>
            <div class="right-pattern-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-right.svg" alt="pattern" />
            </div>
        </section>
        <!-- ********************
        FAQ section html end here
        *************************-->

<?php
	endwhile;
get_footer();