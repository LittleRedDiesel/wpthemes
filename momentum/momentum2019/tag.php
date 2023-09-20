<?php get_header(); ?>

<main role="main" aria-label="Content" class="blog-page">
		<div class="wrap-content container-fluid section-content">
			<div class="row-full">
				<section class="col-lg-2 tags-container">
					<h2 class="tags-title">Sort by tags</h2>
					<div class="sidebar-widget">
						<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-2' ) ) ?>
					</div>
				</section>
				<!-- section -->
				<section class="col-lg-7 col-sm-12">

					<div class="copytext">

						<h1 class="tag-title"><?php esc_html_e( 'Tag: ', 'html5blank' ); echo single_tag_title( '', false ); ?></h1>

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
