<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
		<!-- post thumbnail -->
		<?php
		$hascaughtimg = catch_that_image();
		if ( has_post_thumbnail() ) { // Check if thumbnail exists. ?>
			<a class="post-thumb--link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
			</a>
		<?php } else if ($hascaughtimg !== false ) { ?>
			<a class="post-thumb--link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<img src="<?php echo catch_that_image() ?>" />
			</a>
		<?php } ?>
		
		<!-- /post thumbnail -->
		<div class="post-inner">
				<!-- post title -->
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<!-- post details -->
			<span class="meta">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> <?php the_date('d-m-Y', '<span class="blog-date"> | ', '</span>'); ?>
			</span>

			<div class="post-content">
				<?php $content = get_the_content(); echo wp_trim_words( get_the_content(), 60, '... <a href="' . get_permalink() . '">[Read more]</a>' );?>
				<!--?php the_content(); // Build your custom callback length in functions.php. ?-->
			</div>

			<?php edit_post_link(); ?>
		</div>


	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
