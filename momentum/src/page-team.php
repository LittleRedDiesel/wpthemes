<?php
/*
Template Name: Team
*/
?>


<?php get_header(); ?>	
<main id="main" class="site-main" role="main">
	<section id="content" class="site-content">
		<h1><?php the_field('team_section_title'); ?></h1>
		<p><?php the_field('team_section_subtitle'); ?></p>
		<?php
		$post_objects = get_field('team_members_to_display');

		if( $post_objects ): ?>
		<ul class="featured-list team-list">
			<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<li>
				<img src="<?php the_field('team_photo'); ?>" />
				<span class="title"><?php the_title(); ?></span>
				<div class="detail"><?php the_content(); ?></div>
				<?php the_excerpt(); ?>
				<a href="mailto:<?php the_field('team_email_address'); ?>"><?php the_field('team_email_address'); ?></a>
				<span class="tel"><?php the_field('team_phone_number'); ?></span>
			</li>
			<?php endforeach; ?>
		</ul>
		  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>     
		<a href="" class="button"><?php the_field('team_section_button'); ?></a>
		<div>
			<?php $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1 ) ); ?>
			<ul class="featured-list team-list">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<li>
					<img src="<?php the_field('team_photo'); ?>" />
					<span class="title"><?php the_title(); ?></span>
					<div class="detail"><?php the_content(); ?></div>
					<?php the_excerpt(); ?>
					<a href="mailto:<?php the_field('team_email_address'); ?>"><?php the_field('team_email_address'); ?></a>
					<span class="tel"><?php the_field('team_phone_number'); ?></span>
				</li>

				<?php endwhile; wp_reset_query(); ?>
			</ul> 		  	
		</div>
	</section>
</main>
<?php get_footer(); ?>