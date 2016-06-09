<?php
/*
Template Name: Training
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <section id="content" class="site-content">
    <h1><?php the_field('training_section_title'); ?></h1>
    <p><?php the_field('training_section_subtitle'); ?></p>
    <div>
      <?php $loop = new WP_Query( array( 'post_type' => 'classes', 'posts_per_page' => -1 ) ); ?>
      <ul class="featured-list team-list">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <li>
          <img src="<?php the_field('class_photo'); ?>" />
          <span class="title"><?php the_title(); ?></span>
          <div class="detail"><?php the_content(); ?></div>
          <?php the_excerpt(); ?>
          <a href="mailto:<?php the_field('team_email_address'); ?>"><?php the_field('team_email_address'); ?></a>
          <span class="tel"><?php the_field('team_phone_number'); ?></span>
        </li>

        <?php endwhile; wp_reset_query(); ?>
      </ul>         
    </div>
  </section>
</main>
<?php get_footer(); ?>