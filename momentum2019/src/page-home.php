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
	<div class="wrap-content">
		<section class="bg-img-section panel-section">
			<div class="image-mask col-lg-4 col-md-6 col-sm-12">
				<?php

				$image1 = get_field('image_background');

				if( !empty($image1) ): ?>

					<img src="<?php echo $image1['url']; ?>" class="banner-image" alt="<?php echo $image1['alt']; ?>" />

				<?php endif; ?>

			</div>
			<div class="section-content hero-content">
				<h1><?php the_field('section_title'); ?></h1>
				<div class="panel-container">
					<div class="panel panel-clipped panel-1">
						<h3 class="ellipsis-post"><?php the_field('incentive_title'); ?></h3>
						<?php the_field('incentive_desc'); ?>
						<div class="sister-buttons">
							<a href="<?php the_field('incentive_button_link'); ?>" class="button"><?php the_field('incentive_button_text'); ?></a>

							<?php $icb2 = get_field('incentive_button2_link');
							if( !empty($icb2) ): ?>
								<a href="<?php the_field('incentive_button2_link'); ?>" class="button"><?php the_field('incentive_button2_text'); ?></a>
							<?php endif; ?>

						</div>
					</div>
					<div class="panel panel-2 panel-clipped right-panel">
						<h3 class="ellipsis-post"><?php the_field('incentive_title_2'); ?></h3>
						<?php the_field('incentive_description_2'); ?>
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
		<section class="bg-black-section">
			<div class="section-content">
				<h2><?php the_field('map_section_title'); ?></h2>
				<p><?php the_field('map_section_address1'); ?><br/>
					<?php the_field('map_section_address2'); ?><br/>
					<a class="med-link blue" href="mailto:<?php the_field('map_section_contact'); ?>"><?php the_field('map_section_contact'); ?></a>
				</p>

				<?php

					$args = array(
					    'post_type'      => 'locations',
					    'posts_per_page' => -1,
					);

					$the_query = new WP_Query($args);

					echo "<div class='map-wrapper'><div class='acf-map'>";

					while ( $the_query->have_posts() ) : $the_query->the_post();
					$location = get_field('location_lat');

					if( !empty($location) ) {

				?>

					<div class="marker" data-lat="<?php the_field('location_lat'); ?>" data-lng="<?php the_field('location_long'); ?>"></div>

				<?php

				}
				endwhile;
				echo '</div></div>';
				wp_reset_postdata();

				?>
			</div>
		</section>
		<section>
			<div class="section-content">
				<h2 class="ellipsis-pre"><?php the_field('copy-section-title'); ?></h2>
				<div><?php the_field('copy-section-wysiwyg'); ?></div>
			</div>
		</section>
		<section>
			<div class="section-content">
				<h2><?php the_field('team_section_title'); ?></h2>
				<?php
				$post_objects = get_field('team_members_to_display');

				if( $post_objects ): ?>
				    <div class="featured-list team-list mobile-carousel">
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <div>
							<div class="circular-clip">
								<?php

									$teamimage = get_field('team_photo');

									if( !empty($teamimage) ): ?>

										<img src="<?php echo $teamimage['url']; ?>" alt="<?php echo $teamimage['alt']; ?>" />

								<?php endif; ?>
							</div>
							<span class="title"><?php the_title(); ?></span>
							<?php the_excerpt(); ?>
				        </div>
				    <?php endforeach; ?>
				    </div>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
				<a href="<?php the_field('team_section_homepage_button_link'); ?>" class="button"><?php the_field('team_section_button'); ?></a>
			</div>
		</section>
		<section class="bg-grey-section">
			<div class="section-content">
				<h2><?php the_field('testimonial_section_title'); ?></h2>
				<?php
				$post_objects = get_field('featured_testimonials');

				if( $post_objects ): ?>
				    <div class="featured-list testimonial-list mobile-carousel">
				    <?php foreach( $post_objects as $post): ?>
				        <?php setup_postdata($post); ?>
				        <div class="ellipsis">
				            <?php the_excerpt(); ?>
				            <span class="title"><?php the_title(); ?></span>
				        </div>
				    <?php endforeach; ?>
				    </div>
				    <?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</section>
		<section class="bg-blue-section">
			<div class="section-content narrow-para">
				<h2><?php the_field('button_section_title'); ?></h2>
				<?php the_field('button_section_wysiwyg'); ?>
				<a href="<?php the_field('button_section_link'); ?>" class="button"><?php the_field('button_section_button'); ?></a>
			</div>
		</section>
		<section>
			<div class="section-content">
				<h2><?php the_field('contact_section_title'); ?></h2>
				<?php the_field('contact_section_content'); ?>
				<?php the_field('email_form'); ?>
			</div>
		</section>
	</div>
</main>
<?php get_footer(); ?>
