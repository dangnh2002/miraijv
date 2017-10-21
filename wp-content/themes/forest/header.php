<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package forest
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
		<div id="top-bar">
			<?php dynamic_sidebar('top-menu'); ?>
		</div>
	
	
	<header id="masthead" class="site-header" role="banner">
		<div class="container masthead-container">
			<div class="site-branding">
				<?php if ( forest_has_logo() ) : ?>
				<div id="site-logo">
					<?php forest_logo(); ?>
				</div>
				<?php endif; ?>
				<div id="text-title-desc">
				<h1 class="site-title title-font"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>	
			<div id="slickmenu"></div>
			<nav id="site-navigation" class="main-navigation" role="navigation" style="max-width:100%; padding: 0;">
					<?php $walker = new Forest_menu_with_Icon;
						if (!has_nav_menu('primary')) :
							$walker = '';
						endif;
					wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => '' ) ); //$walker?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	
	<?php 
	if(is_front_page()){
		echo do_shortcode("[huge_it_slider id='1']");
	} ?>
	<?php get_template_part('featured', 'showcase'); ?>
	
	<div class="mega-container">
		
		<?php if (class_exists('woocommerce')) : ?>	
		<?php get_template_part('coverflow', 'product'); ?>
		<?php get_template_part('featured', 'products'); ?>
		<?php endif; ?>
		<?php get_template_part('coverflow', 'posts'); ?>
		<?php get_template_part('featured', 'posts'); ?>
	
		<div id="content" class="site-content container">