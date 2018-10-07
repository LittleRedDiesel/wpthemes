<?php
/**
 * Template name: Archives
 *
 * @since   1.0.0
 * @package WP
 */
get_header(); ?>
<?php custom_breadcrumbs(); ?>

<div class="layout-row flex sidebar-wrapper">
	<?php include 'sidebar.php';?>
	<div class="wrap">
		<div class="content">
      <h1>Contacts</h1>
      <div class="post-body contact-archive">
			<?php if(have_posts()) : ?>
				<?php while(have_posts())  : the_post(); ?>


        <?php include('contact-card.php'); ?>


		    <?php
          wp_reset_query();
         endwhile; ?>
		      <?php else : ?>
		        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
					<?php endif; ?>
      </div>
		</div>
		<!-- /.content -->
	</div>
	<!-- /.wrap -->
</div>

<?php get_footer(); ?>
