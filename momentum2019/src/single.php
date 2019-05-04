<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<div class="wrap-content container-fluid">
			<div class="row">
				<!-- section -->
				<section class="col-lg-9 col-sm-12 single-post-content">
				<!-- section -->

				<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post. ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post title -->
						<h1 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /post title -->

						<!-- post details -->
						<span class="meta">
							Posted <?php the_date(); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
						</span>	<!-- /post details -->

						<?php the_content(); // Dynamic Content. ?>

						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>' ); // Separated by commas with a line break at the end. ?>

						<p><?php esc_html_e( 'Categorised in: ', 'html5blank' ); the_category( ', ' ); // Separated by commas. ?></p>

						<p><?php esc_html_e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

						<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else : ?>

					<!-- article -->
					<article>

						<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</section>
			</div>
		</div>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
