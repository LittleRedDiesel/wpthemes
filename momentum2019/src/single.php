<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<div class="wrap-content container-fluid section-content">
			<div class="row-full">
				<!-- section -->
				<section class="col-lg-2 tags-container">
					<h2 class="tags-title">Sort by tags</h2>
					<div class="sidebar-widget">
						<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-2' ) ) ?>
					</div>
				</section>
				<section class="col-lg-8 col-md-12 single-post-content">
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
							<?php the_title(); ?>
						</h1>
						<!-- /post title -->

						<!-- post details -->
						<span class="meta">
							Posted <?php the_date(); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
						</span>	<!-- /post details -->

						<?php the_content(); // Dynamic Content. ?>

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
		<div class="row-full">
			<section class="col-lg-2 tags-container">

			</section>
			<section class="col-lg-8 col-sm-12">
				<?php get_sidebar(); ?>
			</section>
		</div>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
