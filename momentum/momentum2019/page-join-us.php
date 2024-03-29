<?php
/*
Template Name: Join us
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<div class="wrap-content container-fluid">
    <section class="row-full row-full--nopadding-right bg-black">
      <div class="section-content">
        <div class="panel-container panel-container--full-page">
          <div class="panel col-sm-12">
						<h1 class="panel-heading"><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="row-full row-full--nopadding-right"  style="background-image: url(<?php the_field('panels_background'); ?>);">
			<div class="section-content">
				<div class="panel-container">
					<section class="panel-section click-panels">
						<div class="section-content">
							<div class="panel-container primary-panels">
								<div class="panel panel-1 js-active">
									<a href="#panel1" class="js-switch-panel" data-panel="panel1"><h3><?php the_field('primary_panel_name_1'); ?></h3></a>
								</div>
								<div class="panel panel-2 right-panel">
									<a href="#panel2" class="js-switch-panel" data-panel="panel2"><h3><?php the_field('primary_panel_name_2'); ?></h3></a>
								</div>
							</div>
						</div>
						<section class="primary-panels-display panels-multi-step">
							<div class="panel panel1 js-active col-md-9 col-xs-11">
								<?php the_field('primary_panel_1_content'); ?>
								<div class="sister-buttons">
									<!-- If these buttons exist - display them -->
									<?php
									$pp1b1 = get_field('primary_panel_1_button_1_text');
									if( !empty($pp1b1) ): ?>
									<a href="<?php the_field('primary_panel_1_button_1_link'); ?>" class="button button--center"><?php the_field('primary_panel_1_button_1_text'); ?></a>
									<?php endif;
									$pp1b2 = get_field('primary_panel_1_button_2_text');
									if( !empty($pp1b2) ): ?>
									<a href="<?php the_field('primary_panel_1_button_2_link'); ?>" class="button button--center button-expand"><?php the_field('primary_panel_1_button_2_text'); ?></a>
									<?php endif; ?>
								</div>
							</div>
							<div class="panel panel2">
								<div class="panel-container secondary-panels">
									<div class="panel panel-1 js-active col-md-4 col-xs-5">
										<a href="#" class="js-switch-panel" data-panel="panel3"><h3><?php the_field('secondary_panel_name_1'); ?></h3></a>
									</div>
									<span class="divider-bubble">Or</span>
									<div class="panel panel-2 right-panel col-md-4 col-xs-5">
										<a href="#" class="js-switch-panel" data-panel="panel4"><h3><?php the_field('secondary_panel_name_2'); ?></h3></a>
									</div>
								</div>
								<div class="panel-container tertiary-panels">
									<div class="panel panel3 js-active col-xs-8">
										<?php the_field('tertiary_panel_1_content'); ?>
										<div class="sister-buttons">
											<!-- If these buttons exist - display them -->
											<?php
											$pricebutton3 = get_field('tertiary_panel_1_button_text');
											if( !empty($pricebutton3) ): ?>
											<a href="<?php the_field('tertiary_panel_1_button_link'); ?>" class="button button--center button--join-us"><?php the_field('tertiary_panel_1_button_text'); ?></a>
											<?php endif;
											$pricebutton4 = get_field('tertiary_panel_1_button_text_2');
											if( !empty($pricebutton4) ): ?>
											<a href="<?php the_field('tertiary_panel_1_button_link_2'); ?>" class="button button--center button--join-us"><?php the_field('tertiary_panel_1_button_text_2'); ?></a>
											<?php endif; ?>
										</div>
									</div>
									<div class="panel panel4  col-xs-8">
										<?php the_field('tertiary_panel_2_content'); ?>

										<div class="sister-buttons">
											<!-- If these buttons exist - display them -->
											<?php
											$pricebutton5 = get_field('tertiary_panel_2_button_text');
											if( !empty($pricebutton5) ): ?>
											<a href="<?php the_field('tertiary_panel_2_button_link'); ?>" class="button button--center button--join-us"><?php the_field('tertiary_panel_2_button_text'); ?></a>
											<?php endif;
											$pricebutton6 = get_field('tertiary_panel_2_button_text_2');
											if( !empty($pricebutton6) ): ?>
											<a href="<?php the_field('tertiary_panel_2_button_link_2'); ?>" class="button button--center button--join-us"><?php the_field('tertiary_panel_2_button_text_2'); ?></a>
											<?php endif; ?>
										</div>

									</div>
								</div>
							</div>
						</section>
					</section>
				</div>
			</div>
		</section>

		<section class="row-full" style="background-image: url(<?php the_field('prices_section_bg_1'); ?>);">
			<div class="section-content">
				<div class="panel-container panel-container--border col-sm-12">
					<div class="map-text price-text price-panels panel--border col-sm-12">
						<p><?php the_field('prices_subtitle1'); ?></p>
						<div>
							<?php $loop = new WP_Query( array( 'post_type' => 'prices', 'posts_per_page' => -1 , 'orderby' => 'date', 'order' => 'ASC', 'meta_key' => 'price_type',
				'meta_value'	=> 'Regular membership' ) ); ?>
							<div class="narrow prices-section regular-membership">
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="price-slide small-col-md-4 small-col-sm-6 small-col-xs-12">
									<div class="price-slide-inner">
										<span class="classes-primary small-font caps"><?php the_field('price_classes'); ?></span>
										<span class="contract small-font"><?php the_field('price_contract'); ?></span>
										<span class="price large-font"><?php the_field('price_price'); ?></span>
										<span class="pps medium-bold"><?php the_field('price_per_session'); ?></span>
										<div class="sister-buttons">
											<!-- If these buttons exist - display them -->
		        							<?php
		        							$pricebutton1 = get_field('price_button_1_link');
		        							if( !empty($pricebutton1) ): ?>
		        							<a href="<?php the_field('price_button_1_link'); ?>" class="button">
												<span class="class-meta">
													<span class="classes-secondary"><?php the_field('button_1_title'); ?></span>
													<span class="classes-secondary lightgrey"><?php the_field('sessions_per_month'); ?></span>
												</span>
												<span class="price-button-text"><?php the_field('price_button_1_text'); ?></span></a>
		        							<?php endif;
		        							$pricebutton2 = get_field('price_button_2_link');
		        							if( !empty($pricebutton2) ): ?>
		        							<a href="<?php the_field('price_button_2_link'); ?>" class="button">
												<span class="class-meta">
													<span class="classes-secondary"><?php the_field('button_2_title'); ?></span>
													<span class="classes-secondary lightgrey"><?php the_field('sessions_per_month'); ?></span>
												</span>
												<span class="price-button-text"><?php the_field('price_button_2_text'); ?></span></a>
		        							<?php endif; ?>
										</div>
									</div>
								</div>

							<?php endwhile; ?>

							</div>
							<?php wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="row-full" style="background-image: url(<?php the_field('prices_section_bg_2'); ?>);">
			<div class="section-content">
				<div class="panel-container panel-container--border col-sm-12">
					<div class="map-text price-text panel--border col-sm-12">
						<p><?php the_field('prices_subtitle2'); ?></p>
						<?php $loop = new WP_Query( array( 'post_type' => 'prices', 'posts_per_page' => -1 , 'orderby' => 'date', 'order' => 'ASC', 'meta_key' => 'price_type',
			'meta_value'	=> 'Class pack' ) ); ?>
						<div class="narrow prices-section class-pack">
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="price-slide small-col-md-3 small-col-sm-4 small-col-xs-12">
								<div class="price-slide-inner">
									<span class="classes-primary small-font caps"><?php the_field('price_classes'); ?></span>
									<span class="contract caps small-font"><?php the_field('price_contract'); ?></span>
									<span class="price large-font blue"><?php the_field('price_price'); ?></span>
									<span class="pps medium-bold"><?php the_field('price_per_session'); ?></span>
									<span class="classes-secondary caps med-font"><?php the_field('price_frequency'); ?></span>
									<span class="spm blue medium-bold"><?php the_field('sessions_per_month'); ?></span>

									<div class="sister-buttons">
										<!-- If these buttons exist - display them -->
										<?php
										$pricebutton3 = get_field('price_button_1_text');
										if( !empty($pricebutton3) ): ?>
										<a href="<?php the_field('price_button_1_link'); ?>" class="button"><?php the_field('price_button_1_text'); ?></a>
										<?php endif;
										$pricebutton4 = get_field('price_button_2_text');
										if( !empty($pricebutton4) ): ?>
										<a href="<?php the_field('price_button_2_link'); ?>" class="button"><?php the_field('price_button_2_text'); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>

						<?php endwhile; ?>

						</div>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>
		</section>
		<section class="section-footer col-xs-12">
			<?php the_field('prices_section_footer'); ?>
		</section>

</div>
</main>
<?php get_footer(); ?>
