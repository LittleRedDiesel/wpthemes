<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title>Momentum Training - <?php wp_title( $sep = '', $display = true, $seplocation = 'right'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/4.1.0/conditionizr.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.js"></script>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header id="masthead" class="header clear" role="banner">
				<a id="responsive-menu-toggle" class="icon icon-menu"><span><?php _e( 'Menu', 'voidx' ); ?></span></a>

				<div class="site-branding">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></h1>
				</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" id="site-navigation" role="navigation">
						<div id="responsive-menu">
							<?php html5blank_nav(); ?>
						</div>
						<a href="/join-us/" class="button join-cta <?php if ( is_page( 'join-us' )) { echo 'page-active'; } ?>">Join us</a>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
