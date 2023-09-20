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
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lib/masonry.pkgd.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lib/imagesloaded.pkgd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/4.1.0/conditionizr.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.js?v=1.0"></script>
		<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBc4ePmRzjvngPriEIh2WWOVkizllZFShQ&#038;v=3.exp&#038;&#038;ver=3'></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modules/maps.js?v=1.0"></script>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175695776-1">
		</script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-175695776-1');
		</script>

	</head>
	<body <?php body_class(); ?>>
		<div class="lightbox">
		<a href="#" class="icon-close"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cross.png" /><span>Click to close</span></a>
		<div class="lightbox-content">
		</div>
	  </div>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header id="masthead" class="header clear" role="banner">
				<div class="mobile-menu">
					<a id="responsive-menu-toggle" class="menu-link">
						<img class="menu-img" alt="Menu icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu2.png" />
						<span><?php _e( 'Menu', 'voidx' ); ?></span>
					</a>
					<a class="mobile-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="Momentum Logo" class="logo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Mnmtm_Logo_01.gif" /></a>
				</div>
				<div class="site-branding">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></h1>
				</div>
					<!-- /logo -->
					<div class="nav-container">
						<!-- nav -->
						<nav class="nav" id="site-navigation" role="navigation">
							<a class="logo-img-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="Momentum Logo" class="logo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Mnmtm_Logo_01.gif" /></a>
							<div id="responsive-menu">
								<?php html5blank_nav(); ?>
							</div>
							<a href="/join-us/" class="button join-cta <?php if ( is_page( 'join-us' )) { echo 'page-active'; } ?>">Join us</a>
						</nav>
						<!-- /nav -->
					</div>

			</header>
			<!-- /header -->
