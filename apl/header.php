<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<nav class="navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="/"><img class="primary-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apl-logo.jpg" /></a>
		<!--?php	$downloadimg = get_field('lp_download'); if( !empty($downloadimg) ): ?>
			<a href="<!--?php the_field('lp_download'); ?>/assets/ArcadiaSOP.pdf" download class="download-link"><img src="<!--?php echo get_stylesheet_directory_uri(); ?>/assets/img/download.png" /></a>
		<!--?php endif; ? -->

		<a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ArcadiaSOP.pdf" download class="download-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/download.png" /></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<?php wp_nav_menu( array( 'menu'=> 'nav-primary', 'container'=> false, 'menu_class'=> 'navbar-nav mr-auto', 'menu_id'=> 'primaryNavTop' ) );  ?>
			<form role="search" method="get" id="searchform" class="searchform form-inline my-2 my-lg-0"  action="<?php bloginfo('home'); ?>/">
				<input class="form-control mr-sm-2" placeholder="Search site..."  type="text" value="<?php get_search_query(); ?>" name="s" id="s" />
				<input type="hidden" name="search-type" value="normal" />
				<input class="btn btn-outline-light" name="submit" id="searchsubmit" type="submit" value="Search" />
			</form>

	  </div>
	</nav>
</header>
