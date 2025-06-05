 <?php
/**
 * siftt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package siftt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function siftt_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on siftt, use a find and replace
		* to change 'siftt' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'siftt', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'siftt' ),
		)
	);
	/*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'siftt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'siftt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function siftt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'siftt_content_width', 640 );
}
add_action( 'after_setup_theme', 'siftt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function siftt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'siftt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'siftt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'siftt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function siftt_scripts() {
	wp_enqueue_style( 'siftt-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'siftt-style', 'rtl', 'replace' );

	wp_enqueue_script( 'siftt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'siftt_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function theme_enqueue_styles() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
	
    // AOS Animation Library
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');

    // Font Awesome
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() .'/assets/css/all.min.css', array(), '6.2.1');

    // Slick Slider
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), null);

    // Owl Carousel
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null);
    wp_enqueue_style('owl-theme', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), null);

    // Bootstrap
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);

    // Main Style
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), null);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function my_theme_enqueue_scripts() {
    // Register scripts
    wp_register_script('jquery-3.6.2', get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.2.min.js', array(), '3.6.2', true);
    wp_register_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery-3.6.2'), '2.3.4', true);
    wp_register_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery-3.6.2'), '1.8.1', true);
    wp_register_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_register_script('typed', get_stylesheet_directory_uri() . '/assets/js/typed.min.js', array('jquery-3.6.2'), '2.0.12', true);
    wp_register_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array(), '2.10.2', true);
    wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery-3.6.2', 'popper'), '4.6.0', true);

    // Enqueue scripts
    wp_enqueue_script('jquery-3.6.2');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('slick');
    wp_enqueue_script('aos');
    wp_enqueue_script('typed');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');

    // Add inline script for initialization
    wp_add_inline_script('aos', 'AOS.init();');
    wp_add_inline_script('owl-carousel', '
        jQuery(document).ready(function($) {
            $(".client-slider").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 20,
                nav: true,
                navText: [\'<span class="fa-solid fa-angle-left client-left-arrow fa-2x"></span>\', \'<span class="fa-solid client-right-arrow fa-angle-right fa-2x"></span>\'],
                dots: false,
                center: true,
                items: 4.5,
                autoplayTimeout: 4000,
                smartSpeed: 400,
                responsive: {
                    0: { items: 1 },
                    380: { items: 1 },
                    700: { items: 2 },
                    800: { items: 2 },
                    1000: { items: 3 },
                    1200: { items: 4.5 }
                }
            });

            // Nav link click behavior
            $(".nav-link").click(function() {
                $(".menu").removeClass("open");
                $(".custom-collapse").removeClass("menu-on");
                $(".custom-collapse").removeClass("show");
                $(".nav-link").removeClass("active");
                $(this).addClass("active");
            });

            // Menu toggle behavior
            $(".menu").click(function() {
                $(this).toggleClass("open");
                $(".custom-collapse").toggleClass("menu-on menu-off");
            });

            // Scroll spy
            $("body").scrollspy({ target: "#scroll-nav", offset: 200 });
        });
    ');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function sanitize_custom_url( $url ) {
    return esc_url_raw( $url );
}

require get_template_directory() . '/inc/one-page/header-customizer.php';
require get_template_directory() . '/inc/one-page/hero-customizer.php';
require get_template_directory() . '/inc/one-page/about-customizer.php';
require get_template_directory() . '/inc/one-page/solution-customizer.php';
require get_template_directory() . '/inc/one-page/feature-customizer.php';
require get_template_directory() . '/inc/one-page/testimonial-customizer.php';
require get_template_directory() . '/inc/one-page/faq-customizer.php';
require get_template_directory() . '/inc/one-page/footer-customizer.php'; 

function siftt_theme_supports() {
    // Enable support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enable support for wide alignment.
    add_theme_support( 'align-wide' );

    // Enable support for responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Add editor style.
    add_editor_style( 'style-editor.css' );
}
add_action( 'after_setup_theme', 'siftt_theme_supports' );

function siftt_register_blocks() {
    // Register custom block styles.
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'custom-paragraph-style',
            'label' => __( 'Custom Paragraph Style', 'siftt' ),
            'inline_style' => '.is-style-custom-paragraph-style { color: red; }'
        )
    );

    // Register custom block patterns.
    register_block_pattern(
        'siftt/custom-pattern',
        array(
            'title'       => __( 'Custom Pattern', 'siftt' ),
            'description' => _x( 'A custom block pattern for the siftt theme', 'Block pattern description', 'siftt' ),
            'content'     => '<!-- wp:paragraph --><p>' . __( 'This is a custom block pattern.', 'siftt' ) . '</p><!-- /wp:paragraph -->',
        )
    );
}
add_action( 'init', 'siftt_register_blocks' );