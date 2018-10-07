<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="banner">
  <img class="banner-image size-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shopfront.jpg" />
</section>
<div class="primary-body-logo">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arcadia-brands.jpg" class="home-logo">
  <h1>International Logistics Procedure</h1>
  <div class="launch-container">
      <?php

      $args = array(
        'numberposts'	=> -1,
        'post_parent' => 0,
        'orderby'     => 'menu_order',
        'order'   => 'ASC',
        'post_type'		=> 'page',
        'meta_key'   => 'icon'
      );
      // The Query
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {
        echo '<ul class="page-list">';
        while ( $the_query->have_posts() ) {

          $the_query->the_post();
          $customfieldvalue = get_field( "icon" );
          echo '<li><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><img class="icon" src="' . $customfieldvalue . '" /><span>'. get_the_title() . '</span></a></li>';
        }
        echo '</ul>';
      } else {
        echo 'no posts found';
        // no posts found
      }
      wp_reset_postdata();

      ?>
  </div>
</div>
<?php get_footer(); ?>
