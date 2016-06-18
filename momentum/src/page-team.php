<?php
/*
Template Name: Team
*/
?>
<?php get_header(); ?>	
<main id="main" class="site-main" role="main">
	<section id="content" class="site-content">
		<h1 class="page-title"><?php the_field('team_section_title'); ?></h1>
		<p class="intro-para"><?php the_field('team_section_subtitle'); ?></p>

		<?php
		$post_objects = get_field('team_members_to_display');

		if( $post_objects ): ?>
		<div class="featured-list team-list team-page ">
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
				<span class="title ellipsis-post"><?php the_title(); ?></span>
				<div class="detail"><?php the_content(); ?></div>
				<?php the_excerpt(); ?>
				<a class="contact-email" href="mailto:<?php the_field('team_email_address'); ?>"><?php the_field('team_email_address'); ?></a>
				<span class="contact-tel"><?php the_field('team_phone_number'); ?></span>
				<a href="" class="ellipsis-pre ellipsis-link lightbox-trigger" data-lightbox="qual-<?php echo $post->ID ?>">View qualifications</a>
				<div class="qualifications qual-<?php echo $post->ID ?>">
					<div class="circular-clip">
					<?php 

						$teamimage = get_field('team_photo');

						if( !empty($teamimage) ): ?>

							<img src="<?php echo $teamimage['url']; ?>" alt="<?php echo $teamimage['alt']; ?>" />

					<?php endif; ?>
					</div>
					<h4 class="ellipsis-post"><?php the_field('qualifications_title'); ?></h4>
					<?php the_field('qualifications_list'); ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>     
		<a href="" class="button button-expand"><?php the_field('team_section_button'); ?></a>


		<!-- Extra team members -->
		<div class="team-further js-hidden">
			<?php $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1, 'cat' => -5, 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
			<div class="featured-list team-list team-page">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div>
					<div class="circular-clip">
					<?php 

						$teamimage2 = get_field('team_photo');

						if( !empty($teamimage2) ): ?>

							<img src="<?php echo $teamimage2['url']; ?>" alt="<?php echo $teamimage2['alt']; ?>" />

					<?php endif; ?>
					</div>
					<span class="title ellipsis-post"><?php the_title(); ?></span>
					<div class="detail"><?php the_content(); ?></div>
					<?php the_excerpt(); ?>
					<a class="contact-email"  href="mailto:<?php the_field('team_email_address'); ?>"><?php the_field('team_email_address'); ?></a>
					<span class="contact-tel"><?php the_field('team_phone_number'); ?></span>
				</div>

				<?php endwhile; wp_reset_query(); ?>
			</div> 		  	
		</div>
	</section>
</main>
<?php get_footer(); ?>