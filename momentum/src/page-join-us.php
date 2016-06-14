<?php
/*
Template Name: Join us
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<section class="section-carousel">
		<div class="mt-carousel title-carousel">
			<div><img src="<?php the_field('carousel_image_1'); ?>" />
				<h1><?php the_field('section_title'); ?></h1>
			</div>
			<div><img src="<?php the_field('carousel_image_2'); ?>" /></div>
			<div><img src="<?php the_field('carousel_image_3'); ?>" /></div>
			<div><img src="<?php the_field('carousel_image_4'); ?>" /></div>
			<div><img src="<?php the_field('carousel_image_5'); ?>" /></div>
		</div>
	</section>
	<section class="bg-grey-section panel-section click-panels">
		<div class="section-content">
			<div class="panel-container primary-panels">
				<div class="panel panel-1 js-active">
					<a href="#" class="js-switch-panel" data-panel="panel1"><h3><?php the_field('incentive_title'); ?></h3></a>
				</div>
				<div class="panel panel-2 right-panel">
					<a href="#" class="js-switch-panel" data-panel="panel2"><h3><?php the_field('incentive_title_2'); ?></h3></a>
				</div>
			</div>
		</div>
		<section class="bg-white-section primary-panels-display panels-display">
			<div class="panel panel1 js-active">
				<h4 class="ellipsis-post"><?php the_field('incentive_secondary_title'); ?></h4>
				<p><?php the_field('incentive_description'); ?></p>
				<a href="#" class="button"><?php the_field('incentive_button_text'); ?></a>
			</div>
			<div class="panel panel2">
				<div class="panel-container secondary-panels">
					<div class="panel panel-1 js-active">
						<a href="#" class="js-switch-panel" data-panel="panel3"><h4>I’ve never done CrossFit before</h4></a>
					</div>
					<div class="panel panel-2 right-panel">
						<a href="#" class="js-switch-panel" data-panel="panel4"><h4>I have done CrossFit before</h4></a>
					</div>
				</div>
				<div class="panel-container tertiary-panels">
					<div class="panel panel3 js-active">
						<p>If you haven’t CrossFitted before start with a <a href="#">Met Con membership</a> or our <a href="#">CrossFit Foundations course</a></p>
						<a href="#" class="button">Book now</a><br/>
						<a href="#" class="small-link">View more info</a>
					</div>
					<div class="panel panel4">
						<p>If you have CrossFitted before, all our <a href="">Memberships</a> and pay as you go <a href="">Packages</a> are available to you</p>
						<a href="#" class="button">Book now</a>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="bg-blue-section">
		<div class="section-content padding-reduced">
			<h4 class="ellipsis-post">Our classes</h4>
			<h2>Membership prices</h2>
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