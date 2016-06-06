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
				<h1><?php the_field('section_title'); ?></h1>
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
			<h2><?php the_field('copy-section-title'); ?></h2>
			<p><?php the_field('copy-section-subtitle'); ?></p>
			<h3><?php the_field('copy-section-secondary-title'); ?></h3>
			<div><?php the_field('copy-section-wysiwyg'); ?></div>
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
		<section>
			<h2>We cater for everyone and every goal</h1>
		</section>
		<section>
			<h2>Visit us</h1>
		</section>
		<section>
			<h2>Stay up to date</h1>
		</section>        
	</div>
</main>
<?php get_footer(); ?>