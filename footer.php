<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siftt
 */

?>
    <?php
        $facebook_link = get_theme_mod( 'facebook_link',"https://www.facebook.com/" );
		$twitter_link = get_theme_mod( 'twitter_link',"https://twitter.com/" );
        $instgram_link = get_theme_mod( 'instgram_link',"https://www.instagram.com/" );
		$linkedin_link = get_theme_mod( 'linkedin_link',"https://www.linkedin.com/" );
        $copyright_text = get_theme_mod( 'copyright_text',"© 2025 Siftt. All Rights Reserved." );
		$powerby_text = get_theme_mod( 'powerby_text',"Powered by&nbsp;<a href='https://wingstechsolutions.com'>Wings Tech</a>" );
    ?>
        <section class="social position-relative">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="600" data-aos-duration="500">
                    <div class="col-md-12">
                        <ul class="text-center social-list">
                            <li>
                                <a target="_blank" href="<?php echo $facebook_link; ?>"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php echo $twitter_link; ?>"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php echo $instgram_link; ?>"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php echo $linkedin_link; ?>"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                        <ul class="terms-privacy">
                            <?php 
                                $menu = 'footer-menu';
                                $args = array(
                                        'order'                  => 'ASC',
                                        'orderby'                => 'menu_order',
                                        'post_type'              => 'nav_menu_item',
                                        'post_status'            => 'publish',
                                        'output'                 => ARRAY_A,
                                        'output_key'             => 'menu_order',
                                        'nopaging'               => true,
                                        'update_post_term_cache' => false 
                                    );
                                $heitems = wp_get_nav_menu_items( $menu, $args ); 
                                //echo '<pre>'; print_r($heitems);

                                foreach ( $heitems as $hitemval ) {
                                    $title = $hitemval->title;
                                    $url = $hitemval->url;
                                    echo $he_menu_list = '<li><a href="'. $url .'" class="nav-link" >'. $title .'</a></li>';
                                }
                            ?>
                        </ul>
                        <p><?php echo $copyright_text; ?></p>
                        <p class="mt-1"><?php echo $powerby_text; ?></p>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-bg.svg" alt="" class="curvy-img" />
        </section>
    
	</div>
<?php wp_footer(); ?>

    
</body>
</html>