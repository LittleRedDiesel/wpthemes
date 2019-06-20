<?php get_header(); ?>

	<main role="main" aria-label="Content" class="error-page search-page">
		<div class="wrap-content container-fluid">
			<div class="row-full">
				<section class="col-lg-2 tags-container">

				</section>
				<!-- section -->
				<section class="col-lg-8 col-sm-12">

					<div class="copytext">
						<h1><?php esc_html_e( 'Not found', 'html5blank' ); ?></h1>
						<p>Sorry, but your request could not be completed</p>
					</div>

					<?php get_template_part( 'searchform' ); ?>

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
