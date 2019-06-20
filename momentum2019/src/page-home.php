<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<!-- <div class="loader-wrapper">
	<h1 class="loader">Momentum</h1>
</div> -->
<main id="main" class="site-main" role="main">
	<div class="wrap-content container-fluid">
		<section class="row-full hero hero--subhero"
		<?php $image1 = get_field('image_background'); if( !empty($image1) ): ?> style="background-image: url(<?php echo $image1['url']; ?>)"	<?php endif; ?>>
			<div class="image-mask row">
				<h1 class="col-sm-12"><?php the_field('section_title'); ?></h1>
			</div>
		</section>

		<section class="bg-gradient">
			<div class="section-content">
				<div class="panel-container col-sm-12">
					<div class="panel panel--button col-sm-6 col-xs-12">
						<h2 class="panel-title"><?php the_field('incentive_title'); ?></h2>
						<div class="lined-text">
							<p class="panel-text"><?php the_field('incentive_description', false, false); ?></p>
						</div>
						<div class="sister-buttons">
							<a href="<?php the_field('incentive_button_link'); ?>" class="button"><?php the_field('incentive_button_text'); ?></a>

							<?php $icb2 = get_field('incentive_button2_link');
							if( !empty($icb2) ): ?>
								<a href="<?php the_field('incentive_button2_link'); ?>" class="button"><?php the_field('incentive_button2_text'); ?></a>
							<?php endif; ?>

						</div>
					</div>
					<div class="panel panel--button bg-black col-sm-6 col-xs-12">
						<h2 class="panel-title"><?php the_field('incentive_title_2'); ?></h2>
						<div class="lined-text">
							<p class="panel-text"><?php the_field('incentive_description_2'); ?></p>
						</div>
						<div class="sister-buttons">
							<a href="<?php the_field('incentive_button_link_2'); ?>" class="button"><?php the_field('incentive_button_text_2'); ?></a>

							<?php $icb2l2 = get_field('incentive_button2_link_2');
							if( !empty($icb2l2) ): ?>
								<a href="<?php the_field('incentive_button2_link_2'); ?>" class="button"><?php the_field('incentive_button2_text_2'); ?></a>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="row-full" style="background-image: url(<?php the_field('map_section_bg_1'); ?>);">
			<div class="section-content">
				<div class="panel-container panel-container--border col-sm-12">
					<div class="map-text panel panel--border col-sm-6 col-xs-12">
						<h2><?php the_field('map_section_title'); ?></h2>
						<p><?php the_field('map_section_address1'); ?></p>
					</div>
					<div class="map panel panel--border col-sm-6 col-xs-12">
						<?php
							echo "<div class='map-wrapper'><div class='acf-map'>";
						?>
							<div class="marker" data-lat="<?php the_field('map_lat_1'); ?>" data-lng="<?php the_field('map_long_1'); ?>"></div>
						<?php
						echo '</div></div>';
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</section>
		<section class="row-full" style="background-image: url(<?php the_field('map_section_bg_2'); ?>);">
			<div class="section-content">
				<div class="panel-container panel-container--border col-sm-12">
					<div class="map-text panel panel--border col-sm-6 col-xs-12">
						<p><?php the_field('map_section_address2'); ?></p>
						<div class="panel-extra">
							<span><?php the_field('map_section_extra_text'); ?></span>
							<?php the_field('map_section_extra'); ?>
						</div>
					</div>
					<div class="map panel panel--border col-sm-6 col-xs-12">
						<?php
							echo "<div class='map-wrapper'><div class='acf-map'>";
						?>
							<div class="marker" data-lat="<?php the_field('map_lat_2'); ?>" data-lng="<?php the_field('map_long_2'); ?>"></div>
						<?php
						echo '</div></div>';
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</section>
		<section class="row-full row-copy bg-black">
			<div class="section-content">
				<div class="panel-container panel-container--home">
					<div class="panel panel--full-width col-sm-6 col-xs-12">
						<div class="panel--fw-inner">
							<h3><?php the_field('copy-section-title'); ?></h3>
						</div>
					</div>
					<div class="panel panel--full-width col-sm-6 col-xs-12">
						<div class="panel--fw-inner">
							<div class="lined-text"><?php the_field('copy-section-wysiwyg'); ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="panel-container panel-container--home-second">
					<div class="panel panel--full-width col-sm-6 col-xs-12">
						<div class="panel--fw-inner">
							<h3><?php the_field('copy-section-title-2'); ?></h3>
						</div>
					</div>
					<div class="panel panel--full-width col-sm-6 col-xs-12">
						<div class="panel--fw-inner">
							<div class="lined-text"><?php the_field('copy-section-wysiwyg-2'); ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="row-full row-team" style="background-image: url(<?php the_field('team_section_bg'); ?>);">
			<div class="section-content">
				<div class="panel-container panel-container--border col-sm-12">
					<h2 class="team-title"><?php the_field('team_section_title'); ?></h2>
						<?php $post_objects = get_field('team_members_to_display');

						if( $post_objects ): ?>
				    	<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <div class="panel panel--full-width panel--no-margin col-sm-6 col-xs-12">
									<div class="panel--fw-inner">
										<div class="panel--fw-inner-top">
											<p class="quote">&ldquo;<?php the_excerpt(); ?>&rdquo;</p>
											<p class="title"><?php the_title(); ?></p>
										</div>
											<?php $teamimage = get_field('team_photo');
												if( !empty($teamimage) ): ?>
													<img src="<?php echo $teamimage['url']; ?>" alt="<?php echo $teamimage['alt']; ?>" />
												<?php endif; ?>
				        	</div>
								</div>
				    	<?php endforeach; ?>
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
					<a href="<?php the_field('team_section_homepage_button_link'); ?>" class="button button--white button--center button--v-center"><?php the_field('team_section_button'); ?></a>
				</div>
			</div>
		</section>
		<section class="row-full bg-black">
			<div class="section-content">
				<div class="panel-container panel-container--border panel-container--spacer-bottom col-sm-12">
					<h2 class="title-margin-btm title-pad-top"><?php the_field('testimonial_section_title'); ?></h2>
					<?php $post_objects = get_field('featured_testimonials');

					if( $post_objects ): ?>
				    <?php foreach( $post_objects as $post): ?>
				        <?php setup_postdata($post); ?>
								<div class="panel panel--full-width panel--no-margin col-sm-6 col-xs-12">
									<div class="panel--fw-inner border-top">
				        		<p class="testimonial ellipsis">&ldquo;<?php the_excerpt(); ?>&rdquo;</p>
				            <p class="title title--member"><?php the_title(); ?></p>
									</div>
								</div>
				    <?php endforeach; ?>
				 <?php wp_reset_postdata(); ?>
			 	<?php endif; ?>
			</div>
			</div>
		</section>
		<section class="row-full" style="background-image: url(<?php the_field('button_section_bg'); ?>);">
			<div class="section-content">
				<div class="panel-container panel-container--border col-sm-12">
					<h2 class="line-break--bottom title-pad-top"><?php the_field('button_section_title'); ?></h2>
					<p class="text-large"><?php the_field('button_section_wysiwyg', false, false); ?></p>
					<a href="<?php the_field('button_section_link'); ?>" class="button button--white button--center button--v-center"><?php the_field('button_section_button'); ?></a>
				</div>
			</div>
		</section>
		<section class="row-full row-contact">
			<div class="section-content">
				<div class="panel-container panel-container--border col-sm-12">
					<h2 class="line-break--bottom title-pad-top"><?php the_field('contact_section_title'); ?></h2>
					<p class="text-large"><?php the_field('contact_section_content', false, false); ?></p>
					<?php the_field('email_form'); ?>
				</div>
			</div>
		</section>
	</div>
</main>
<?php get_footer(); ?>
