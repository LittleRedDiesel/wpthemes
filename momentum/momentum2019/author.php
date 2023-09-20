<?php get_header(); ?>

<main role="main" aria-label="Content" class="error-page search-page">
		<div class="wrap-content container-fluid section-content">
			<div class="row-full">
				<section class="col-lg-2 tags-container">
					<h2 class="tags-title">Sort by tags</h2>
					<div class="sidebar-widget">
						<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-2' ) ) ?>
					</div>
				</section>
				<!-- section -->
				<section class="col-lg-8 col-sm-12">

						<div class="copytext">

							<?php if ( have_posts() ): the_post(); ?>

								<h1><?php esc_html_e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

							<?php if ( get_the_author_meta( 'description' ) ) : ?>

							<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>

								<h2><?php esc_html_e( 'About ', 'html5blank' ); echo get_the_author(); ?></h2>

								<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>

							<?php endif; ?>

							<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
									</a>
								<?php endif; ?>
								<!-- /post thumbnail -->

								<!-- post title -->
								<h3>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</h3>
								<!-- /Post title -->

								<!-- post details -->
								<span class="date">
									<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
										<?php the_date(); ?> <?php the_time(); ?>
									</time>
								</span>
								<span class="author"><?php esc_html_e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
							<!-- /post details -->

								<?php html5wp_excerpt( 'html5wp_index' ); // Build your custom callback length in functions.php. ?>

								<br class="clear">

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

			<?php get_template_part( 'pagination' ); ?>

							</section>
					</div>
					<div class="row">
						<section class="col-lg-2 tags-container">

						</section>
						<section class="col-lg-8 col-sm-12">
							<?php get_sidebar(); ?>
						</section>
					</div>
					<!-- /section -->
					</main>

				<?php get_footer(); ?>
