<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package draft-portfolio
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'draft-portfolio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
	    	<div class="grid grid-pad head-overflow">
			<div class="site-branding">
                
    				<hgroup>
       					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
    				</hgroup>

            </div><!-- site-branding -->

			<div class="navigation-container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
                
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
                    
				</nav><!-- #site-navigation -->
        	</div><!-- navigation-container -->
        
        </div><!-- grid -->
    </header><!-- #masthead -->

    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
		<h3><?php _e( 'Menu', 'draft-portfolio' ); ?></h3> 
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
	</nav>

	<div id="content" class="site-content">
	<div class=" grid grid-pad">