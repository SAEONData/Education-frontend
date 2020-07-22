<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
	<header class="edu-header" role="banner">

		<nav id="cssmenu" role="navigation">
		<div class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png " /><a href="./"><strong><?php bloginfo( 'title' ); ?></strong><br /><?php bloginfo( 'description' ); ?></a></div>
		<div id="head-mobile"></div>
		<div class="button"></div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'depth'           => 2,
					'container'           => false
				)
			);
			?>
		</nav><!-- #site-navigation -->
        

	</header><!-- #masthead -->


