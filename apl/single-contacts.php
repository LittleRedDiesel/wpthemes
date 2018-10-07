<?php
/**
 * Single Contact Page
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<?php custom_breadcrumbs(); ?>

<div class="layout-row flex sidebar-wrapper">
	<?php include 'sidebar.php';?>
	<div class="wrap">
		<div class="content">
			<?php if(have_posts()) : ?>
				<?php while(have_posts())  : the_post(); ?>

			<div class="post-body">

        <?php include('contact-card.php'); ?>

			</div>
		    <?php
          wp_reset_query();
         endwhile; ?>
		      <?php else : ?>
		        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
					<?php endif; ?>
		</div>
		<!-- /.content -->
	</div>
	<!-- /.wrap -->
</div>

<?php get_footer(); ?>
