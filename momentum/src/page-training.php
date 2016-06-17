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
      <ul class="featured-list class-list">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <li>
          <img src="<?php the_field('class_photo'); ?>" />
          <span class="title ellipsis-post"><?php the_title(); ?></span>
          <div class="detail"><?php the_content(); ?></div>
        </li>

        <?php endwhile; wp_reset_query(); ?>
      </ul>         
    </div>
  </section>
</main>
<?php get_footer(); ?>