<?php
/*
Template Name: Join us
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<div class="help-<?php echo $post->ID ?>">
		<div class="lightbox-columns">
			<h3><?php the_field('columns_title'); ?></h3>
			<p class="subtitle ellipsis-post"><?php the_field('columns_subtitle'); ?></p>
			<div class="panel-container lightbox-panel">
				<div class="panel panel-1">
					<h4 class="ellipsis-post"><?php the_field('lhs-title'); ?></h4>
					<p class="column-intro"><?php the_field('lhs-description'); ?></p>
					<span class="intro-cost"><?php the_field('lhs-cost'); ?></span>
					<span class="class-duration horizonal-division"><?php the_field('lhs-duration'); ?></span>
					<span class="zigzag-post"><?php the_field('lhs-zigzag-title-1'); ?></span>
					<span class="column-division-title"><?php the_field('lhs_div_1_motivation'); ?></span>
					<p><?php the_field('lhs_div_1_explanation'); ?></p>
					<ul>
						<li>
							<?php 
								$lhs_div_1_img = get_field('lhs_div_1_img');
								if( !empty($lhs_div_1_img) ): ?>
									<img src="<?php echo $lhs_div_1_img['url']; ?>" alt="<?php echo $lhs_div_1_img['alt']; ?>" />
							<?php endif; ?>
							<span class="class-name"><?php the_field('lhs_div_1_title'); ?></span>
							<span class="class-duration"><?php the_field('lhs_div_1_duration'); ?></span>
						</li>
					</ul>
					<a href="#" class="button blue"><?php the_field('lhs_div_1_button_text'); ?></a>
				</div>
				<div class="panel panel-2">
					<h4 class="ellipsis-post"><?php the_field('rhs_title'); ?></h4>
					<p class="column-intro"><?php the_field('rhs_description'); ?></p>
					<span class="intro-cost"><?php the_field('rhs_cost'); ?></span>
					<span class="class-duration horizonal-division"><?php the_field('rhs_duration'); ?></span>
					<span class="zigzag-post"><?php the_field('rhs_zigzag_title_1'); ?></span>
					<span class="column-division-title"><?php the_field('rhs_div_1_movitation'); ?></span>
					<p><?php the_field('rhs_div_1_explanation'); ?></p>
					<ul class="horizonal-division">
						<li class="double">
							<?php 
								$rhs_div_1_img_1 = get_field('rhs_div_1_img_1');
								if( !empty($rhs_div_1_img_1) ): ?>
									<img src="<?php echo $rhs_div_1_img_1['url']; ?>" alt="<?php echo $rhs_div_1_img_1['alt']; ?>" />
							<?php endif; ?>
							<span class="class-name"><?php the_field('rhs_div_1_title_1'); ?></span>
							<span class="class-duration"><?php the_field('rhs_div_1_duration_1'); ?></span>
						</li>
						<li class="double">
							<?php 
								$rhs_div_1_img_2 = get_field('rhs_div_1_img_2');
								if( !empty($rhs_div_1_img_2) ): ?>
									<img src="<?php echo $rhs_div_1_img_2['url']; ?>" alt="<?php echo $rhs_div_1_img_2['alt']; ?>" />
							<?php endif; ?>
							<span class="class-name"><?php the_field('rhs_div_1_title_2'); ?></span>
							<span class="class-duration"><?php the_field('rhs_div_1_duration_2'); ?></span>
						</li>
					</ul>
					<span class="zigzag-post"><?php the_field('rhs_zigzag_title_2'); ?></span>
					<span class="column-division-title"><?php the_field('rhs_div_2_movitation'); ?></span>
					<p><?php the_field('rhs_div_2_explanation'); ?></p>
					<ul class="horizonal-division">
						<li>
							<?php 
								$rhs_div_1_img_1 = get_field('rhs_div_2_img_1');
								if( !empty($rhs_div_2_img_1) ): ?>
									<img src="<?php echo $rhs_div_2_img_1['url']; ?>" alt="<?php echo $rhs_div_2_img_1['alt']; ?>" />
							<?php endif; ?>
							<span class="class-name"><?php the_field('rhs_div_2_title_1'); ?></span>
							<span class="class-duration"><?php the_field('rhs_div_2_duration_1'); ?></span>
						</li>
						<li>
							<?php 
								$rhs_div_2_img_2 = get_field('rhs_div_2_img_2');
								if( !empty($rhs_div_2_img_2) ): ?>
									<img src="<?php echo $rhs_div_2_img_2['url']; ?>" alt="<?php echo $rhs_div_2_img_2['alt']; ?>" />
							<?php endif; ?>
							<span class="class-name"><?php the_field('rhs_div_2_title_2'); ?></span>
							<span class="class-duration"><?php the_field('rhs_div_2_duration_2'); ?></span>
						</li>
						<li>
							<?php 
								$rhs_div_2_img_3 = get_field('rhs_div_2_img_3');
								if( !empty($rhs_div_2_img_3) ): ?>
									<img src="<?php echo $rhs_div_2_img_3['url']; ?>" alt="<?php echo $rhs_div_2_img_3['alt']; ?>" />
							<?php endif; ?>
							<span class="class-name"><?php the_field('rhs_div_2_title_3'); ?></span>
							<span class="class-duration"><?php the_field('rhs_div_2_duration_3'); ?></span>
						</li>
						<li>
							<?php 
								$rhs_div_2_img_4 = get_field('rhs_div_2_img_4');
								if( !empty($rhs_div_2_img_4) ): ?>
									<img src="<?php echo $rhs_div_2_img_4['url']; ?>" alt="<?php echo $rhs_div_2_img_4['alt']; ?>" />
							<?php endif; ?>
							<span class="class-name"><?php the_field('rhs_div_2_title_4'); ?></span>
							<span class="class-duration"><?php the_field('rhs_div_2_duration_4'); ?></span>
						</li>
					</ul>
					<span class="zigzag-post"><?php the_field('rhs_zigzag_title_3'); ?></span>
					<span class="column-division-title"><?php the_field('rhs_div_3_movitation'); ?></span>
					<p><?php the_field('rhs_div_3_explanation'); ?></p>
					<span class="class-name bold"><?php the_field('rhs_div_3_title'); ?></span>
					<span class="class-duration"><?php the_field('rhs_div_3_duration'); ?></span><br />
					<a href="#" class="button blue"><?php the_field('rhs_div_3_button_text'); ?></a>
				</div>
			</div>
			<a href="#" class="icon icon-arrow_up js-back-to-top"><span>Return to top</span></a>
			<p class="bottom-title"><?php the_field('bottom_title'); ?></p>
			<a class="contact-email" href="mailto:info@momentum-training.com"><?php the_field('contact_email'); ?></a>
			<span class="contact-tel"><?php the_field('contact_tel'); ?></span>
		</div>
	</div>
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
					<a href="#" class="js-switch-panel" data-panel="panel1"><h3><?php the_field('primary_panel_name_1'); ?></h3></a>
				</div>
				<div class="panel panel-2 right-panel">
					<a href="#" class="js-switch-panel" data-panel="panel2"><h3><?php the_field('primary_panel_name_2'); ?></h3></a>
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
						<a href="#" class="small-link lightbox-trigger" data-lightbox="help-<?php echo $post->ID ?>"><?php the_field('tertiary_panel_1_small_link_text'); ?></a>
					</div>
					<div class="panel panel4">
						<?php the_field('tertiary_panel_2_content'); ?>
						<a href="<?php the_field('tertiary_panel_2_button_link'); ?>" class="button"><?php the_field('tertiary_panel_2_button_text'); ?></a><br />
						<a href="#" class="small-link lightbox-trigger" data-lightbox="help-<?php echo $post->ID ?>"><?php the_field('tertiary_panel_1_small_link_text'); ?></a>
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