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
			<div class="section-content hero-content">
				<h1><?php the_field('section_title'); ?></h1>
				<div class="panel-container">
					<div class="panel panel-1">
						<h3 class="ellipsis-post"><?php the_field('incentive_title'); ?></h3>
						<p><?php the_field('incentive_desc'); ?></p>
						<a href="" class="button"><?php the_field('incentive_button_text'); ?></a>
					</div>
					<div class="panel panel-2 right-panel">
						<h3 class="ellipsis-post"><?php the_field('incentive_title_2'); ?></h3>
						<p><?php the_field('incentive_description_2'); ?></p>
						<a href="" class="button"><?php the_field('incentive_button_text_2'); ?></a>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="section-content">
				<h2 class="ellipsis-pre"><?php the_field('copy-section-title'); ?></h2>
				<p><?php the_field('copy-section-subtitle'); ?></p>
				<h3><?php the_field('copy-section-secondary-title'); ?></h3>
				<div><?php the_field('copy-section-wysiwyg'); ?></div>
			</div>
		</section>
		<section class="section-carousel">
			<div class="mt-carousel">
				<div><img src="<?php the_field('carousel_image_1'); ?>" /></div>
				<div><img src="<?php the_field('carousel_image_2'); ?>" /></div>
				<div><img src="<?php the_field('carousel_image_3'); ?>" /></div>
				<div><img src="<?php the_field('carousel_image_4'); ?>" /></div>
			</div>
		</section>
		<section>
			<div class="section-content">
				<h2><?php the_field('team_section_title'); ?></h2>
				<?php
				$post_objects = get_field('team_members_to_display');

				if( $post_objects ): ?>
				    <ul class="featured-list team-list">
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <li>
				            <a href="<?php the_permalink(); ?>">
				            	<div class="circular-clip">
				            		<img src="<?php the_field('team_photo'); ?>" />
				            	</div>
				            	<span class="title"><?php the_title(); ?></span>
				            	<?php the_excerpt(); ?>
				            </a>
				        </li>
				    <?php endforeach; ?>
				    </ul>
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
				    <ul class="featured-list testimonial-list">
				    <?php foreach( $post_objects as $post): ?>
				        <?php setup_postdata($post); ?>
				        <li>
				            <a href="<?php the_permalink(); ?>">
				            	<?php the_excerpt(); ?>
				            	<span class="title"><?php the_title(); ?></span>
				            </a>
				        </li>
				    <?php endforeach; ?>
				    </ul>
				    <?php wp_reset_postdata(); ?>
				<?php endif; ?>
				
				<a href="" class="button"><?php the_field('testimonial_section_button'); ?></a>
			</div>
		</section>
		<section class="bg-blue-section">
			<div class="section-content">
				<h2><?php the_field('button_section_title'); ?></h2>
				<?php the_field('button_section_wysiwyg'); ?>
				<a href="<?php the_field('button_section_link'); ?>" class="button"><?php the_field('button_section_button'); ?></a>
			</div>
		</section>
		<section class="bg-black-section">
			<div class="section-content">
				<h2><?php the_field('map_section_title'); ?></h2>
				<p><?php the_field('map_section_address'); ?><br/>
					<a class="med-link" href="mailto:<?php the_field('map_section_contact'); ?>"><?php the_field('map_section_contact'); ?></a>
				</p>
				
			    <?php 

			    $location = get_field('map_coordinates');

			    if( !empty($location) ):
			    ?>
			<div class="map-wrapper">
				<div class="overlay" onClick="style.pointerEvents='none'"></div>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			</div>
			    <?php endif; ?>

				<div class="social">
					<h4>Follow us</h4>
					<ul>
						<li><a href="https://www.facebook.com/crossfithackney/" target="_blank" class="icon icon-facebook"><span>Facebook</span></a></li>
						<li><a href="https://twitter.com/crossfithackney" target="_blank" class="icon icon-twitter"><span>Twitter</span></a></li>
						<li><a href="https://www.instagram.com/momentumtraining/" target="_blank" class="icon icon-insta"><span>Instagram</span></a></li>
					</ul>
				</div>
			</div>
		</section>
		<section>
			<div class="section-content">
				<h2><?php the_field('contact_section_title'); ?></h2>
				<?php the_field('contact_section_content'); ?>
				<form>
					<div class="input-wrapper">
						<input type="text" placeholder="Enter your email address here" />
						<input type="submit" value="Send">
					</div>
				</form>
			</div>
		</section>        
	</div>
</main>
<?php get_footer(); ?>