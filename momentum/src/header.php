<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="lightbox">
	<a href="#" class="icon icon-close"><span>Click to close</span></a>
	<div class="lightbox-content">
	</div>
  </div>
  <div id="page" class="hfeed site site-wrapper">
	<div id="wrap-header" class="wrap-header">
	  <header id="masthead" class="site-header" role="banner">
		<button id="responsive-menu-toggle" class="icon icon-menu"><span><?php _e( 'Menu', 'voidx' ); ?></span></button>
		<div class="site-branding">
		  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
		<nav role="navigation" id="site-navigation" class="site-navigation">
		  <a href="/join-us/" class="button join-cta <?php if ( is_page( 'join-us' )) { echo 'page-active'; } ?>">Join us</a>
		  <div id="responsive-menu"><?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) ); ?></div>
		</nav>
	  </header>
	</div>
	<div id="wrap-main" class="wrap-main">
