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
			<div class="panel-container">
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
						<a href="#" class="button"><?php the_field('tertiary_panel_1_button_text'); ?></a><br/>
						<a href="#" class="small-link lightbox-trigger" data-lightbox="help-<?php echo $post->ID ?>"><?php the_field('tertiary_panel_1_small_link_text'); ?></a>
					</div>
					<div class="panel panel4">
						<?php the_field('tertiary_panel_2_content'); ?>
						<a href="#" class="button"><?php the_field('tertiary_panel_2_button_text'); ?></a><br />
						<a href="#" class="small-link lightbox-trigger" data-lightbox="help-<?php echo $post->ID ?>"><?php the_field('tertiary_panel_1_small_link_text'); ?></a>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="bg-blue-section">
		<div class="section-content padding-reduced">
			<h4 class="ellipsis-post">Our classes</h4>
			<h1 class="title-wide">Membership prices</h1>
			<table>
				<tr class="border">
					<th>All classes</th>
					<th></th>
					<th>1 month contract</th>
					<th>6 month contract</th>
					<th>12 month contract</th>
				</tr>
				<tr class="topspace">
					<td></td>
					<td>All classes unlimited</td>
					<td class="sum">£195</td>
					<td class="sum">£180</td>
					<td class="sum">£160</td>
				</tr>
				<tr>
					<td></td>
					<td>32 sessions x month</td>
					<td>£6.10 x session</td>
					<td>£5.62 x session</td>
					<td>£5.00 x session</td>
				</tr>
				<tr class="topspace">
					<td></td>
					<td>All classes</td>
					<td class="sum">£155</td>
					<td class="sum">£140</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>13 sessions x month</td>
					<td>£11.90 x session</td>
					<td>£10.76 x session</td>
					<td></td>
				</tr>
				<tr class="topspace">
					<td></td>
					<td>All classes</td>
					<td class="sum">£155</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>9 sessions x month</td>
					<td>£12.77 x session</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border">
					<td>Off peak</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="topspace">
					<td></td>
					<td>Off peak unlimited</td>
					<td class="sum">£155</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>Unlimited</td>
					<td>£3.59 x session</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border">
					<td>Met-con only</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="topspace">
					<td></td>
					<td>Met-con only</td>
					<td class="sum">£140</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>13 sessions x month</td>
					<td>£10.76 x session</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="topspace">
					<td></td>
					<td>Met-con only</td>
					<td class="sum">£105</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>9 sessions x month</td>
					<td>£10.76 x session</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border">
					<td>Pay as you go</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="topspace med">
					<td></td>
					<td>Single session</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class="sum">£20</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="topspace med">
					<td></td>
					<td>10 session pack</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class="sum">£175</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border">
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="terms topspace">
					<td></td>
					<td colspan="4" class="leftalign">* Unlimited memberships entitle you to a maximum of 32 sessions a month.</td>
				</tr>
				<tr class="terms">
					<td></td>
					<td colspan="4" class="leftalign">** Off-peak classes: 8am and 5.30pm weekdays. 12pm Saturday. All day Sunday. All Open Gym sessions</td>
				</tr>
				<tr class="terms">
					<td></td>
					<td colspan="4" class="leftalign">*** 3 month time limit</td>
				</tr>
			</table>

			<table class="mobile-price-table">
				<tr class="row-border">
					<th>1 Month contract</th>
					<th>6 Month contract</th>
					<th>12 Month contract</th>
				</tr>
				<tr>
					<td colspan="3" class="title-row">All classes</td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">All classes unlimited*</td>
				</tr>
				<tr class="row-border">
					<td colspan="3" class="duration-row">32 sessions x month</td>
				</tr>
				<tr class="thirds-divided-row">
					<td class="sum">£195<span>£6.10 x session</span></td>
					<td class="sum">£180<span>£5.62 x session</span></td>
					<td class="sum">£160<span>£5.00 x session</span></td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">All classes</td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row">13 sessions x month</td>
				</tr>
				<tr class="thirds-divided-row">
					<td class="sum">£155<span>£11.90 x session</span></td>
					<td class="sum">£140<span>£10.76 x session</span></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">All classes</td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row">9 sessions x month</td>
				</tr>
				<tr class="thirds-divided-row">
					<td class="sum">£155<span>£12.77 x session</span></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="title-row">Off peak</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">Off peak unlimited**</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row">Unlimited</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="thirds-divided-row">
					<td class="sum">£155<span>£3.59 x session</span></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="title-row">Met-con only</td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">Met-con only</td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row">13 sessions x month</td>
				</tr>
				<tr class="thirds-divided-row">
					<td class="sum">£140<span>£10.76 x session</span></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">Met-con only</td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row">9 sessions x month</td>
				</tr>
				<tr class="thirds-divided-row">
					<td class="sum">£105<span>£10.76 x session</span></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="title-row">Pay as you go</td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">Single session</td>
				</tr>
				<tr class="row-border padding-bottom">
					<td colspan="3" class="sum">£20</td>
				</tr>
				<tr>
					<td colspan="3" class="black-title-row">10 Session pack***</td>
				</tr>
				<tr class="row-border padding-bottom">
					<td colspan="3" class="sum">£175</td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row terms padding-top">*	Unlimited memberships entitle you to a maximum of 32 sessions a month.</td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row terms">** 	Off-peak classes: 8am and 5.30pm week days. 12pm Saturday. All day Sunday. All Open Gym sessions</td>
				</tr>
				<tr>
					<td colspan="3" class="duration-row terms">***	3 month time limit</td>
				</tr>

			</table>
		</div>
	</section>
	<section class="bg-grey-section">
		<div class="section-content padding-reduced">
			<h4 class="ellipsis-post">Our Timetable</h4>
			<h1 class="title-wide"><?php the_field('timetable_section_heading'); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>

			<div class="feature-content">
				<iframe src="https://clients.mindbodyonline.com/classic/home?studioid=106685"></iframe>
			</div>
		</div>
	</section> 
</main>
<?php get_footer(); ?>