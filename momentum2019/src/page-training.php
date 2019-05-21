<?php
/*
Template Name: Training
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <section id="content">
    <section class="row-full hero" style="background-image: url(<?php the_field('training_section_background'); ?>)">
      <div class="image-mask row">
        <h1 class="col-sm-8 col-md-12 page-title hide-mob"><?php the_field('training_section_title'); ?></h1>
      </div>
    </section>
    <section class="row-full">
      <div class="section-content col-xs-12">
        <div class="lined-text lined-text--large spacer-bottom full-width">
          <p class="panel-text"><?php the_field('training_section_subtitle', false, false); ?></p>
        </div>
      </div>
    </section>
      <div>
        <?php $loop = new WP_Query( array( 'post_type' => 'classes', 'posts_per_page' => -1 , 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
        <div class="class-list">
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="bw-list-item">
              <div class="col-xs-12 section-content">
                <?php

                $class_photo = get_field('class_photo');

                if( !empty($class_photo) ): ?>
                  <div class="bw-list-primary">
                    <img src="<?php echo $class_photo['url']; ?>" alt="<?php echo $class_photo['alt']; ?>" />
                  </div>
                <?php endif; ?>
                <div class="bw-list-secondary">
                  <h3><?php the_title(); ?></h3>
                  <div class="lined-text">
                    <p><?php $content = get_the_content(); echo wp_filter_nohtml_kses( $content ); ?></p>
                  </div>
                </div>
              </div>
          </div>

          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>
