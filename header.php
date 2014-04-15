<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Flameon
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="row hfeed site">
    <div id="page-container" class="small-12 medium-11 medium-centered large-10 columns">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
                        <div class="branding-text">
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                        </div>
                        <?php if(get_header_image() != '') : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image() ?>" alt="" /></a>
                        <?php endif; ?>
                </div>
		<nav id="site-navigation" class="main-navigation theme-primary-color" role="navigation">
			<div class="menu-toggle"><?php _e( 'Menu', 'flameon' ); ?></div>
			<?php wp_nav_menu( array( 
                            'theme_location' => 'primary',
                            'container_class' => 'menu-container'
                        ) ); ?>
                        <div class="menu-search"><?php get_search_form(); ?></div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="row site-content theme-secondary-color">
