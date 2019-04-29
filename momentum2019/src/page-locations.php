<?php
/*
Template Name: Locations
*/
?>


<?php get_header(); ?>
<main id="main" class="site-main horizontal-divide-container" role="main">
  <section id="content" class="site-content col-xs-12">
    <h1 class="page-title title-small black"><?php the_field('map_section_address1'); ?></h1>
    <h1 class="page-title title-small black"><?php the_field('map_section_address2'); ?></h1>
    <a href="mailto:<?php the_field('map_section_contact'); ?>" class="med-link"><?php the_field('map_section_contact'); ?></a>

    <?php

      $args = array(
          'post_type'      => 'locations',
          'posts_per_page' => -1,
      );

      $the_query = new WP_Query($args);

      echo "<div class='map-wrapper'><div class='acf-map map-large'>";

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

    <div class="social">
      <h4>Follow us</h4>
      <ul>
        <li><a href="https://www.facebook.com/crossfithackney/" target="_blank" class="icon icon-facebook"><span>Facebook</span></a></li>
        <li><a href="https://twitter.com/crossfithackney" target="_blank" class="icon icon-twitter"><span>Twitter</span></a></li>
        <li><a href="https://www.instagram.com/momentumtraining/" target="_blank" class="icon icon-insta"><span>Instagram</span></a></li>
      </ul>
    </div>

  </section>

  <div class="bg-black-divide">

  </div>
</main>
<?php get_footer(); ?>
