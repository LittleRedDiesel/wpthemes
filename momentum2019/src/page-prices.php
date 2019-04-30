<?php
/*
Template Name: Prices
*/
?>


<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <div class="wrap-content container-fluid">
    <section class="row-full" style="background-image: url(<?php the_field('prices_section_bg_1'); ?>);">
      <div class="section-content">
        <div class="panel-container panel-container--border panel-container--full-page col-sm-12">
          <div class="map-text panel panel--border col-sm-12">
            <p><?php the_field('prices_subtitle1'); ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="row-full" style="background-image: url(<?php the_field('prices_section_bg_2'); ?>);">
      <div class="section-content">
        <div class="panel-container panel-container--border col-sm-12">
          <div class="map-text panel panel--border col-sm-12">
            <p><?php the_field('prices_subtitle2'); ?></p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <?php the_field('prices_section_footer'); ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
