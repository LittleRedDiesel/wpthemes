<?php get_header(); ?>

<main role="main" aria-label="Content" class="error-page search-page">
		<div class="wrap-content container-fluid">
			<div class="row">
				<section class="col-lg-2 tags-container">

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
			<div class="row">
				<section class="col-lg-2 tags-container">

				</section>
				<section class="col-lg-8 col-sm-12">
					<?php get_sidebar(); ?>
				</section>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
