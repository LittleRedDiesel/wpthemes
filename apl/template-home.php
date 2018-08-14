<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="banner">
  <img class="banner-image size-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shopfront.jpg" />
</section>
<div class="primary-body-logo">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arcadia-brands.jpg" class="home-logo">
  <h1>International Logistics Procedure</h1>
  <div class="launch-container">
    <ul>
      <?php
        $pages = get_pages();
        foreach ( $pages as $page ) {
        $option = '<li><a href="' . get_page_link( $page->ID ) . '">';
        $option .= $page->post_title;
        $option .= '</a></li>';
        echo $option;
      }
      ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
