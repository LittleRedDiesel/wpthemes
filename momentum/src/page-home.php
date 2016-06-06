<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <div class="wrap-content">
  <section class="bg-img-section panel-section">
	<img src="<?php the_field('image_background'); ?>" class="banner-image" />
	<div class="section-content">
	  <h2><?php the_field('section_title'); ?></h1>
	  <div class="panel-container">
		<div class="panel panel-1">
		  <h3><?php the_field('incentive_title'); ?></h3>
		  <p><?php the_field('incentive_desc'); ?></p>
		  <a href="" class="button"><?php the_field('incentive_button_text'); ?></a>
		</div>
		<div class="panel panel-2">
		  <h3><?php the_field('incentive_title_2'); ?></h3>
		  <p><?php the_field('incentive_desc_2'); ?></p>
		  <a href="" class="button"><?php the_field('incentive_button_text_2'); ?></a>
		</div>
	  </div>
	  </div>
  </section>
  <section>
	<h2>Fitness for life</h1>
  </section>
  <section>
  Carousel
  </section>
  <section>
	<h2>Meet the team</h1>
  </section>
  <section>
	<h2>Read what our members say about us</h1>
  </section>        
  <section id="primary" class="content-area">
  
  <?php if ( have_posts() ) {
	while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
	<header class="entry-header">
	<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header>
	<footer class="entry-meta">
	<?php printf( __( 'Posted <time datetime="%1$s">%2$s</time> by %3$s. ', 'voidx' ), get_post_time('c'), get_the_date(), get_the_author() ); ?>
	<?php _e( 'Categories: ', 'voidx' ); the_category( ', ' ); echo '. '; ?>
	</footer>
	<div class="entry-content">
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
	</div>
	</article>
	<?php endwhile;
  } else { ?>
	<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
	<h1><?php _e( 'Not found', 'voidx' ); ?></h1>
	</header>
	<div class="entry-content">
	<p><?php _e( 'Sorry, but your request could not be completed.', 'voidx' ); ?></p>
	<?php get_search_form(); ?>
	</div>
	</article>
  <?php } ?>
  
  <?php voidx_post_navigation(); ?>
  </section>
  </div>
</main>
<?php get_footer(); ?>