<?php
/*
Template Name: Join us
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<div class="help-<?php echo $post->ID ?>">
		<div class="lightbox-columns">
			<h3>Let us help you</h3>
			<p class="subtitle ellipsis-post">Choose one of the two options below</p>
			<div class="panel-container">
				<div class="panel panel-1">
					<h4 class="ellipsis-post">MET-CON ONLY</h4>
					<p class="column-intro">Want to get fit fast and lose some of that stubborn body fat of Lorem ipsumroin gravida nibh vel velit auctor aliquetenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
					<span class="intro-cost">£200</span>
					<span class="class-duration horizonal-division">x month</span>
					<span class="zigzag-post">Just want to get fit fast</span>
					<span class="column-division-title">Sweat</span>
					<p>Quick  easy movements that you will be doing for 60 min lalalala...</p>
					<ul>
						<li>
							<img src="<?php bloginfo('template_directory');  ?>/images/class-metabolic-logo.png" />
							<span class="class-name">Metabolic conditioning</span>
							<span class="class-duration">Unlimited</span>
						</li>
					</ul>
				</div>
				<div class="panel panel-2">
					<h4 class="ellipsis-post">FULL PACKAGE</h4>
					<p class="column-intro">Want to get fit fast and lose some of that stubborn body fat  of Lorem ipsumroin gravida nibh vel velit auctor aliquetenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio</p>
					<span class="intro-cost">£600</span>
					<span class="class-duration horizonal-division">x 3 Month Unlimited Classes</span>
					<span class="zigzag-post">First month</span>
					<span class="column-division-title">Learn</span>
					<p>Learn functional movements, learn about fitness</p>
					<ul class="horizonal-division">
						<li class="double">
							<img src="<?php bloginfo('template_directory');  ?>/images/class-metabolic-logo.png" />
							<span class="class-name">Metabolic conditioning</span>
							<span class="class-duration">Unlimited</span>
						</li>
						<li class="double">
							<img src="<?php bloginfo('template_directory');  ?>/images/class-my-momentum-pt.png" />
							<span class="class-name">Personal training</span>
							<span class="class-duration">4 sessions</span>
						</li>
					</ul>
					<span class="zigzag-post">Second month</span>
					<span class="column-division-title">Develop</span>
					<p>Develop your skills, strength and physical preparedness</p>
					<ul class="horizonal-division">
						<li>
							<img src="<?php bloginfo('template_directory');  ?>/images/class-metabolic-logo.png" />
							<span class="class-name">Metabolic conditioning</span>
							<span class="class-duration">Unlimited</span>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory');  ?>/images/class-crossfit-engineering.png" />
							<span class="class-name">Crossfit engineering</span>
							<span class="class-duration">Unlimited</span>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory');  ?>/images/barbell-club.png" />
							<span class="class-name">Barbell club</span>
							<span class="class-duration">Unlimited</span>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory');  ?>/images/class-my-momentum-pt.png" />
							<span class="class-name">Personal training</span>
							<span class="class-duration">2 sessions</span>
						</li>
					</ul>
					<span class="zigzag-post">Third month</span>
					<span class="column-division-title">Build</span>
					<p>Build functional movement at high intensity</p>
					<span class="class-name bold">All classes</span>
					<span class="class-duration">Unlimited</span><br />
					<a href="#" class="button blue">Sign up</a>
				</div>
			</div>
			<a href="#" class="icon icon-arrow_up js-back-to-top"><span>Return to top</span></a>
			<p>Please, give us a shout if you need any help</p>
			<a class="contact-email" href="mailto:info@momentum-training.com">info@momentum-training.com</a>
			<span class="contact-tel">07515522068</span>
		</div>
	</div>
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
						<a href="#" class="button"><?php the_field('tertiary_panel_2_button_text'); ?></a>
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