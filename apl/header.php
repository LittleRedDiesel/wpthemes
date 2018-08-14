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
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="/"><img class="primary-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apl-logo.jpg" /></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<?php wp_nav_menu( array( 'container'=> false, 'menu_class'=> 'navbar-nav mr-auto mt-2 mt-lg-0', 'menu_id'=> 'primaryNavTop' ) ); ?>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search">
	      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
</header>
