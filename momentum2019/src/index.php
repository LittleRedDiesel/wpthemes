<?php get_header(); ?>

	<main role="main" aria-label="Content" class="blog-page">
		<div class="wrap-content container-fluid">
			<div class="row">
				<section class="col-lg-2 tags-container">
					<h2 class="tags-title">Sort by tags</h2>
					<div class="sidebar-widget">
						<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-2' ) ) ?>
					</div>
				</section>
				<!-- section -->
				<section class="col-lg-9 col-sm-12">

					<?php get_template_part( 'loop' ); ?>

					<?php get_template_part( 'pagination' ); ?>

					<?php get_template_part( 'searchform' ); ?>

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
