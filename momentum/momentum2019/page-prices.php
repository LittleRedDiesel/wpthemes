<?php
/*
Template Name: Prices
*/
?>


<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <div class="wrap-content container-fluid">
	  <div class="prices-desktop">
		<section class="row-full" style="background-image: url(<?php the_field('prices_section_bg_1'); ?>);">
		  <div class="section-content">
			<div class="panel-container panel-container--border panel-container--full-page col-sm-12">
			  <div class="map-text price-text price-panels panel panel--border">
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
			<div class="panel-container panel-container--border panel-container--full-page col-sm-12">
			  <div class="map-text price-text panel--border">
				<p><?php the_field('prices_subtitle2'); ?></p>
				<?php $loop = new WP_Query( array( 'post_type' => 'prices', 'posts_per_page' => -1 , 'orderby' => 'date', 'order' => 'ASC', 'meta_key' => 'price_type',
		  'meta_value'	=> 'Class pack' ) ); ?>
				<div class="narrow prices-section class-pack">
				  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				  <div class="price-slide small-col-md-3 small-col-sm-4 small-col-xs-12">
					<div class="price-slide-inner">
					  <span class="classes-primary small-font caps"><?php the_field('price_classes'); ?></span>
					  <?php
						$pricecontract = get_field('price_contract');
						if( !empty($pricecontract) ): ?>
						<span class="contract caps small-font"><?php the_field('price_contract'); ?></span>
						<?php endif; ?>
					  <span class="price large-font blue"><?php the_field('price_price'); ?></span>
					  <span class="pps medium-bold"><?php the_field('price_per_session'); ?></span>
					  <span class="classes-secondary caps med-font"><?php the_field('price_frequency'); ?></span>
					  <span class="spm"><?php the_field('sessions_per_month'); ?></span>

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
	  </div>
	  <div class="prices-mobile">
		  <section class="row-full" style="background-image: url(<?php the_field('prices_section_bg_1'); ?>);">
			  <div class="section-content">
				  <div class="panel-container panel-container--border panel-container--full-page col-sm-12">
					  <div class="map-text price-text price-panels panel panel--border">
						  <div>
							  <?php $loop = new WP_Query( array( 
								'post_type' => 'prices', 
								'posts_per_page' => -1 , 
								'orderby'   => 'meta_value_num',
								'meta_key'  => 'mobile_order',
								'order' => 'ASC' ) );
							  ?>
							  <div class="narrow prices-section regular-membership">
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<?php $pricetype = get_field('price_type');  if( $pricetype === 'Regular membership' ): ?>
									<!-- Regular membership -->
									<div class="price-slide small-col-md-4 small-col-sm-6 small-col-xs-12">
										<div class="price-slide-inner">
											<span class="classes-primary small-font caps"><?php the_field('price_classes'); ?></span>
											<span class="contract small-font"><?php the_field('price_contract'); ?></span>
											<span class="price large-font"><?php the_field('price_price'); ?></span>
											<span class="pps medium-bold"><?php the_field('price_per_session'); ?></span>
											<div class="sister-buttons">
												<!-- If these buttons exist - display them -->
												<?php $pricebutton1 = get_field('price_button_1_link'); if( !empty($pricebutton1) ): ?>
													<a href="<?php the_field('price_button_1_link'); ?>" class="button">
														<span class="class-meta">
															<span class="classes-secondary"><?php the_field('button_1_title'); ?></span>
															<span class="classes-secondary lightgrey"><?php the_field('sessions_per_month'); ?></span>
														</span>
														<span class="price-button-text"><?php the_field('price_button_1_text'); ?></span>
													</a>
												<?php endif; $pricebutton2 = get_field('price_button_2_link'); if( !empty($pricebutton2) ): ?>
													<a href="<?php the_field('price_button_2_link'); ?>" class="button">
														<span class="class-meta">
															<span class="classes-secondary"><?php the_field('button_2_title'); ?></span>
															<span class="classes-secondary lightgrey"><?php the_field('sessions_per_month'); ?></span>
														</span>
														<span class="price-button-text"><?php the_field('price_button_2_text'); ?></span>
													</a>
												<?php endif; ?>
											</div>
										</div>
									</div>

								<?php else : ?>
									<!-- Class packs -->
									<div class="price-slide small-col-md-3 small-col-sm-4 small-col-xs-12 class-pack">
										<div class="price-slide-inner">
											<span class="classes-primary small-font caps"><?php the_field('price_classes'); ?></span>
											<?php $pricecontract = get_field('price_contract'); if( !empty($pricecontract) ): ?>
												<span class="contract caps small-font"><?php the_field('price_contract'); ?></span>
											<?php endif; ?>
											<span class="price large-font blue"><?php the_field('price_price'); ?></span>
											<span class="pps medium-bold"><?php the_field('price_per_session'); ?></span>
											<span class="classes-secondary caps med-font"><?php the_field('price_frequency'); ?></span>
											<span class="spm"><?php the_field('sessions_per_month'); ?></span>

											<div class="sister-buttons">
												<!-- If these buttons exist - display them -->
												<?php $pricebutton3 = get_field('price_button_1_text'); if( !empty($pricebutton3) ): ?>
													<a href="<?php the_field('price_button_1_link'); ?>" class="button"><?php the_field('price_button_1_text'); ?></a>
												<?php endif; $pricebutton4 = get_field('price_button_2_text'); if( !empty($pricebutton4) ): ?>
													<a href="<?php the_field('price_button_2_link'); ?>" class="button"><?php the_field('price_button_2_text'); ?></a>
												<?php endif; ?>
											</div>
										</div>
									</div>

								<?php endif; ?>


							<?php endwhile; ?>
						</div>
							  <?php wp_reset_query(); ?>
						  </div>
					  </div>
				  </div>
			  </div>
		  </section>
	  </div>
    <section class="section-footer panel-container--full-page col-xs-12">
      <?php the_field('prices_section_footer'); ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
