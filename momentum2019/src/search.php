<?php get_header(); ?>

<main role="main" aria-label="Content" class="error-page search-page">
		<div class="wrap-content container-fluid section-content col-xs-12">
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

						<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

						<?php get_template_part( 'loop' ); ?>

						<?php get_template_part( 'pagination' ); ?>
					</div>

				</section>
			<!-- /section -->
			</div>
			<div class="row-full">
				<section class="col-lg-2 tags-container">

				</section>
				<section class="col-lg-8 col-sm-12">
					<?php get_sidebar(); ?>
				</section>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
