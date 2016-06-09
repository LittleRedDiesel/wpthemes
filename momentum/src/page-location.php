<?php
/*
Template Name: Location
*/
?>


<?php get_header(); ?>
<main id="main" class="site-main horizontal-divide-container" role="main">
  <section id="content" class="site-content">
    <h1><?php the_field('map_section_address'); ?></h1>
    <p><?php the_field('map-section-subtitle'); ?></p>
    <a href=""><?php the_field('map_section_contact'); ?></a>
    <?php 

    $location = get_field('map_coordinates');

    if( !empty($location) ):
    ?>
    <div class="acf-map map-large">
      <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <?php endif; ?>

    <div class="social">
      <h4>Follow us</h4>
      <ul>
        <li>Facebook</li>
        <li>Instagram</li>
        <li>Twitter</li>
      </ul>
    </div>

  </section>    

  <div class="bg-black-divide">

  </div>
</main>
<?php get_footer(); ?>