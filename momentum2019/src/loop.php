<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="meta">
			Posted <?php the_date(); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
		</span>

		<div class="post-content">
			<?php the_content(); // Build your custom callback length in functions.php. ?>
		</div>

		<?php edit_post_link(); ?>

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
