<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siftt
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#02A1F5">	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$header_logo = get_theme_mod( 'header_logo', get_stylesheet_directory_uri()."/assets/images/logo.svg" );
	$header_right_button_label = get_theme_mod( 'header_right_button_label',"FAQ" );
?>

<div data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg custom-navbar">
						<a class="navbar-brand custom-navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_html( $header_logo ); ?>" alt="Logo">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
							aria-label="Toggle navigation">
							<div class="menu btn12" data-menu="12">
								<div class="icon"></div>
							</div>
						</button>
						<div class="collapse navbar-collapse custom-collapse" id="navbarNav">
							<ul class="navbar-nav custom-navbar ms-auto">
								<?php 
									$menu = 'main-menu';
									$args = array(
										'order'                  => 'ASC',
										'orderby'                => 'menu_order',
										'post_type'              => 'nav_menu_item',
										'post_status'            => 'publish',
										'output'                 =>  ARRAY_A,
										'output_key'             => 'menu_order',
										'nopaging'               => true,
										'update_post_term_cache' => false 
									);
									$heitems = wp_get_nav_menu_items( $menu, $args ); 
									//echo '<pre>'; print_r($heitems);

									foreach ( $heitems as $hitemval ) {
										$title = $hitemval->title;
										$url = $hitemval->url;
										echo $he_menu_list = '<li class="nav-item"><a href="'. $url .'" class="nav-link" >'. $title .'</a></li>';
									}
								?> 
								<a class="primary-btn contact-btn nav-link" href="#faq"><?php echo $header_right_button_label; ?></a>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>