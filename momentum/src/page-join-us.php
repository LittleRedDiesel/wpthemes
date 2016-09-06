<?php
/*
Template Name: Join us
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<section class="section-carousel">
		<div class="mt-carousel title-carousel">
				<?php 

					$carouselimage1 = get_field('carousel_image_1');

					if( !empty($carouselimage1) ): ?>
					<div><img src="<?php echo $carouselimage1['url']; ?>" alt="<?php echo $carouselimage1['alt']; ?>" />
						<h1><?php the_field('section_title'); ?></h1>
					</div>
					<?php endif; 

					$carouselimage2 = get_field('carousel_image_2');

					if( !empty($carouselimage2) ): ?>
					<div><img src="<?php echo $carouselimage2['url']; ?>" alt="<?php echo $carouselimage2['alt']; ?>" /></div>
					<?php endif; 

					$carouselimage3 = get_field('carousel_image_3');

					if( !empty($carouselimage3) ): ?>
					<div><img src="<?php echo $carouselimage3['url']; ?>" alt="<?php echo $carouselimage3['alt']; ?>" /></div>
					<?php endif; 

					$carouselimage4 = get_field('carousel_image_4');

					if( !empty($carouselimage4) ): ?>
					<div><img src="<?php echo $carouselimage4['url']; ?>" alt="<?php echo $carouselimage4['alt']; ?>" /></div>
					<?php endif; 

					$carouselimage5 = get_field('carousel_image_5');

					if( !empty($carouselimage5) ): ?>
					<div><img src="<?php echo $carouselimage5['url']; ?>" alt="<?php echo $carouselimage5['alt']; ?>" /></div>
					<?php endif; 

				?>
		</div>
	</section>
	<section class="bg-grey-section panel-section click-panels">
		<div class="section-content">
			<div class="panel-container primary-panels">
				<div class="panel panel-1 js-active">
					<a href="#panel1" class="js-switch-panel" data-panel="panel1"><h3><?php the_field('primary_panel_name_1'); ?></h3></a>
				</div>
				<div class="panel panel-2 right-panel">
					<a href="#panel2" class="js-switch-panel" data-panel="panel2"><h3><?php the_field('primary_panel_name_2'); ?></h3></a>
				</div>
			</div>
		</div>
		<section class="bg-white-section primary-panels-display panels-display">
			<div class="panel panel1 js-active">
				<?php the_field('primary_panel_1_content'); ?>
			</div>
			<div class="panel panel2">
				<div class="panel-container secondary-panels">
					<div class="panel panel-1 js-active">
						<a href="#" class="js-switch-panel" data-panel="panel3"><h4><?php the_field('secondary_panel_name_1'); ?></h4></a>
					</div>
					<div class="panel panel-2 right-panel">
						<a href="#" class="js-switch-panel" data-panel="panel4"><h4><?php the_field('secondary_panel_name_2'); ?></h4></a>
					</div>
				</div>
				<div class="panel-container tertiary-panels">
					<div class="panel panel3 js-active">
						<?php the_field('tertiary_panel_1_content'); ?>
						<a href="<?php the_field('tertiary_panel_1_button_link'); ?>" class="button"><?php the_field('tertiary_panel_1_button_text'); ?></a><br/>
					</div>
					<div class="panel panel4">
						<?php the_field('tertiary_panel_2_content'); ?>
						<a href="<?php the_field('tertiary_panel_2_button_link'); ?>" class="button"><?php the_field('tertiary_panel_2_button_text'); ?></a><br />
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="bg-blue-section">
		<div class="section-content padding-reduced">
			<h1 class="title-wide"><?php the_field('table_section_title'); ?></h1>
			<table>
				<?php the_field('desktop_layout'); ?>
			</table>

			<table class="mobile-price-table">
				<?php the_field('mobile_layout'); ?>
			</table>
		</div>
	</section>
	<section class="bg-grey-section">
		<div class="section-content padding-reduced">
			<h4 class="ellipsis-post"><?php the_field('timetable_mini_title'); ?></h4>
			<h1 class="title-wide"><?php the_field('timetable_section_heading'); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>

			<div class="feature-content">
				<iframe style="position: absolute; top: -9999em; visibility: hidden;" onload="this.style.position='static'; this.style.visibility='visible';" src="https://clients.mindbodyonline.com/classic/home?studioid=106685"></iframe>
			</div>
		</div>
	</section> 
</main>
<?php get_footer(); ?>