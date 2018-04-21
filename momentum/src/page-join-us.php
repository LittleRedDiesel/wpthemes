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
						<div class="sister-buttons">
							<a href="<?php the_field('tertiary_panel_1_button_link'); ?>" class="button"><?php the_field('tertiary_panel_1_button_text'); ?></a>
							<a href="<?php the_field('tertiary_panel_1_button_link_2'); ?>" class="button"><?php the_field('tertiary_panel_1_button_text_2'); ?></a>
						</div>
					</div>
					<div class="panel panel4">
						<?php the_field('tertiary_panel_2_content'); ?>
						<div class="sister-buttons">
							<a href="<?php the_field('tertiary_panel_2_button_link'); ?>" class="button"><?php the_field('tertiary_panel_2_button_text'); ?></a>
							<a href="<?php the_field('tertiary_panel_2_button_link_2'); ?>" class="button"><?php the_field('tertiary_panel_2_button_text_2'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="bg-blue-section" id="Prices">
		<div class="section-content">
			<h1 class="title-med"><?php the_field('prices_title'); ?></h1>


				<?php $loop = new WP_Query( array( 'post_type' => 'prices', 'posts_per_page' => -1 , 'orderby' => 'date', 'order' => 'ASC', 'meta_key' => 'price_type',
	'meta_value'	=> 'Regular membership' ) ); ?>
				<div class="prices-section regular-membership">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="price-slide">
						<span class="classes-primary small-font caps"><?php the_field('price_classes'); ?></span>
						<span class="contract caps small-font"><?php the_field('price_contract'); ?></span>
						<span class="price large-font blue"><?php the_field('price_price'); ?></span>
						<span class="pps medium-bold"><?php the_field('price_per_session'); ?></span>
						<span class="classes-secondary caps med-font"><?php the_field('price_frequency'); ?></span>
						<span class="spm blue medium-bold"><?php the_field('sessions_per_month'); ?></span>
						<div class="sister-buttons">
							<a href="<?php the_field('price_button_1_link'); ?>" class="button"><?php the_field('price_button_1_text'); ?></a>
							<a href="<?php the_field('price_button_2_link'); ?>" class="button"><?php the_field('price_button_2_text'); ?></a>
						</div>
					</div>

				<?php endwhile; ?>

				</div>
				<?php wp_reset_query(); ?>


				<?php $loop = new WP_Query( array( 'post_type' => 'prices', 'posts_per_page' => -1 , 'orderby' => 'date', 'order' => 'ASC', 'meta_key' => 'price_type',
	'meta_value'	=> 'Class pack' ) ); ?>
				<div class="prices-section class-pack">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="price-slide">
						<span class="classes-primary small-font caps"><?php the_field('price_classes'); ?></span>
						<span class="contract caps small-font"><?php the_field('price_contract'); ?></span>
						<span class="price large-font blue"><?php the_field('price_price'); ?></span>
						<span class="pps medium-bold"><?php the_field('price_per_session'); ?></span>
						<span class="classes-secondary caps med-font"><?php the_field('price_frequency'); ?></span>
						<span class="spm blue medium-bold"><?php the_field('sessions_per_month'); ?></span>
						<div class="sister-buttons">
							<a href="<?php the_field('price_button_1_link'); ?>" class="button"><?php the_field('price_button_1_text'); ?></a>
							<a href="<?php the_field('price_button_2_link'); ?>" class="button"><?php the_field('price_button_2_text'); ?></a>
						</div>
					</div>

				<?php endwhile; ?>

				</div>
				<?php wp_reset_query(); ?>


			<div class="carousel-footer">
				<?php the_field('prices_section_footer'); ?>
			</div>
		</div>
	</section>
	<section class="bg-grey-section">
		<div class="section-content padding-reduced">
			<h4 class="ellipsis-post"><?php the_field('timetable_mini_title'); ?></h4>
			<h1 class="title-med"><?php the_field('timetable_section_heading'); ?></h1>
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
