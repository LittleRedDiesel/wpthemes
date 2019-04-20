<?php
/*
Template Name: Training
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <section id="content" class="site-content">
    <h1 class="page-title"><?php the_field('training_section_title'); ?></h1>
    <p class="intro-para"><?php the_field('training_section_subtitle'); ?></p>
    <div>
      <?php $loop = new WP_Query( array( 'post_type' => 'classes', 'posts_per_page' => -1 , 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
      <div class="featured-list class-list masonry-list">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="list-item">
          <?php 

          $class_photo = get_field('class_photo');

          if( !empty($class_photo) ): ?>

            <img src="<?php echo $class_photo['url']; ?>" alt="<?php echo $class_photo['alt']; ?>" />

          <?php endif; ?>

          <span class="title ellipsis-post"><?php the_title(); ?></span>
          <div class="detail"><?php the_content(); ?></div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
      </div>         
    </div>
  </section>
</main>
<?php get_footer(); ?>