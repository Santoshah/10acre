<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('wpex_custom_favicon') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700|Kameron' rel='stylesheet' type='text/css'>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>

</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="container">
			<div class="col-md-3 logo">
				
					<?php
					// Outputs the site logo
					// See functions/logo.php
					wpex_logo(); ?>								
				
			</div>
			<!-- /.col-md-3 -->
			<div class="col-md-9">
				
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse">
					

						<?php
						// Display main menu
						wp_nav_menu( array(
							'theme_location'	=> 'main_menu',
							'container'       => '',
							'sort_column'		=> 'menu_order',
							'menu_class'		=> 'nav navbar-nav',
							'fallback_cb'		=> false,
							'walker'			=> new WPEX_Dropdown_Walker_Nav_Menu()
						) ); ?>

				</nav>

			</div>
			<!-- /.col-md-9 -->

		</div>
		<!-- /.container -->
	</header>



		<?php if(is_front_page() ) { echo do_shortcode('[image-carousel interval="12000"]' ); } else { ?>


	<section class="banner innerpage">
		<div class="slider">
			<div class="item_slide">
				<?php if ( has_post_thumbnail() && get_theme_mod( 'wpex_blog_entry_thumb', '1' ) == '1' ) { 
// the_post_thumbnail();
					?>
					 <img src="http://vanguardsdclients.com/10acre/wp-content/uploads/2015/05/inner-page-bg.jpg" alt="10acre">
					 
				<?php } else { ?>
					 <img src="http://vanguardsdclients.com/10acre/wp-content/uploads/2015/05/inner-page-bg.jpg" alt="10acre">
				<?php } ?>			
				<div class="banner_over_text">Small-Scale Rehab, Big-Scale Recovery</div>
				<div class="slide_text">
					<div class="phone_num">1-877-228-4679</div>
					<a href="" class="slide_button">check insurance</a>
				</div>
				<!-- /.slide_text -->
			</div>
			<!-- /.item_slide -->
		</div>
		<!-- /.slider -->
	</section>

<?php } ?>
			<section class="content">
		<?php if(! is_front_page() ) { ?>		<div class="container container1"> <?php } ?>
