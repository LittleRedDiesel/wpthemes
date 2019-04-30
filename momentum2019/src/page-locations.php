<?php
/*
Template Name: Locations
*/
?>


<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <div class="wrap-content container-fluid">
    <section class="row-full" style="background-image: url(<?php the_field('map_section_bg_1'); ?>);">
    <div class="section-content">
      <div class="panel-container panel-container--border panel-container--full-page col-sm-12">
        <div class="map-text panel panel--border col-md-6 col-sm-12">
          <p><?php the_field('map_section_address1'); ?></p>
        </div>
        <div class="map panel panel--border col-md-6 col-sm-12">
          <?php

            $args = array(
                'post_type'      => 'locations',
                'posts_per_page' => -1,
            );

            $the_query = new WP_Query($args);

            echo "<div class='map-wrapper'><div class='acf-map'>";

            while ( $the_query->have_posts() ) : $the_query->the_post();
            $location = get_field('location_lat');

            if( !empty($location) ) {

          ?>

            <div class="marker" data-lat="<?php the_field('location_lat'); ?>" data-lng="<?php the_field('location_long'); ?>"></div>

          <?php

          }
          endwhile;
          echo '</div></div>';
          wp_reset_postdata();

          ?>
        </div>
      </div>
    </div>
  </section>
    <section class="row-full" style="background-image: url(<?php the_field('map_section_bg_2'); ?>);">
    <div class="section-content">
      <div class="panel-container panel-container--border col-sm-12">
        <div class="map-text panel panel--border col-md-6 col-sm-12">
          <p><?php the_field('map_section_address2'); ?></p>
        </div>
        <div class="map panel panel--border col-md-6 col-sm-12">
            <div class="map-wrapper"></div>
        </div>
      </div>
    </div>
  </section>
</div>
</main>
<?php get_footer(); ?>
