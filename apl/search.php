<?php get_header(); ?>
<?php custom_breadcrumbs(); ?>

<div class="layout-row flex">

	<?php include 'sidebar.php';?>

	<div class="wrap">
		<div class="content">

      <?php
      if(isset($_GET['search-type'])) {
          $type = $_GET['search-type'];
          if($type == 'normal') {
              load_template(TEMPLATEPATH . '/normal-search.php');
          }
      }
      ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>
