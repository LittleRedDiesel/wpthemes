<?php
/*
Template Name: Team
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <div class="wrap-content container-fluid">
    <section class="row-full row-full--nopadding-right bg-black">
      <div class="section-content">
        <div class="panel-container panel-container--full-page">
          <div class="panel col-sm-12">
						<h1 class="panel-heading panel-heading--large"><?php the_field('team_section_title'); ?></h1>
            <div class="lined-text lined-text--large spacer-bottom full-width">
              <p class="panel-text"><?php the_field('team_section_subtitle', false, false); ?></p>
            </div>
					</div>
				</div>
			</div>
		</section>
		<section class="row-full row-full--nopadding-right">
      <div class="section-content">
    		<?php
    		$post_objects = get_field('team_members_to_display');

    		if( $post_objects ): ?>
    		<div class="featured-list team-list">
    			<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
    			<?php setup_postdata($post); ?>
    			<div class="list-item col-md-6 col-xs-12">
    				<?php
    					$teamimage = get_field('team_photo');
    					if( !empty($teamimage) ): ?>
    						<img class="team-img" src="<?php echo $teamimage['url']; ?>" alt="<?php echo $teamimage['alt']; ?>" />
    				<?php endif; ?>

    				<span class="title"><?php the_title(); ?></span>
    				<div class="detail"><?php the_content(); ?></div>
    				<p class="quote">&ldquo;<?php the_excerpt(false, false); ?>&rdquo;</p>
    				<a class="contact-email" href="mailto:<?php the_field('team_email_address'); ?>"><?php the_field('team_email_address'); ?></a>
    				<span class="contact-tel"><?php the_field('team_phone_number'); ?></span>
    				<?php

    					$qualifications_list = get_field('qualifications_list');

    					if( !empty($qualifications_list) ): ?>

    						<a href="" class="qualifications-trigger lightbox-trigger" data-lightbox="qual-<?php echo $post->ID ?>">View Qualifications >></a>
    						<div class="qualifications qual-<?php echo $post->ID ?>">
    							<?php
    								$teamimage = get_field('team_photo');
    								if( !empty($teamimage) ): ?>
    									<img src="<?php echo $teamimage['url']; ?>" alt="<?php echo $teamimage['alt']; ?>" />
    							<?php endif; ?>
    							<h4 class="ellipsis-post"><?php the_field('qualifications_title'); ?></h4>
    							<?php the_field('qualifications_list'); ?>
    						</div>

    				<?php endif; ?>
    			</div>
    			<?php endforeach; ?>
    		</div>
    		  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    		<?php endif; ?>
        <div class="col-xs-12">
    		    <a href="" class="button button--center button-expand"><?php the_field('team_section_button'); ?></a>
        </div>

		<!-- Extra team members -->

			<?php $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1, 'cat' => -5, 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
			<div class="team-further team-list featured-list">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="list-item col-md-6 col-xs-12">
					<?php
						$teamimage2 = get_field('team_photo');
						if( !empty($teamimage2) ): ?>
							<img class="team-img" src="<?php echo $teamimage2['url']; ?>" alt="<?php echo $teamimage2['alt']; ?>" />
					<?php endif; ?>

					<span class="title"><?php the_title(); ?></span>
					<div class="detail"><?php the_content(); ?></div>
					<p class="quote">&ldquo;<?php the_excerpt(); ?>&rdquo;</p>
					<a class="contact-email"  href="mailto:<?php the_field('team_email_address'); ?>"><?php the_field('team_email_address'); ?></a>
					<span class="contact-tel"><?php the_field('team_phone_number'); ?></span>
					<?php

						$qualifications_list = get_field('qualifications_list');

						if( !empty($qualifications_list) ): ?>

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

					<?php endif; ?>
				</div>

				<?php endwhile; wp_reset_query(); ?>
			</div>
    </div>
	</section>
</div>
</main>
<?php get_footer(); ?>
