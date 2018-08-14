<?php
/**
 * Index
 *
 * Theme index.
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

<?php include 'sidebar.php';?>

<div class="wrap">
	<div class="content">
		<?php if(have_posts()) : ?>
		    <?php while(have_posts())  : the_post(); ?>
		      <h2><?php the_title(); ?></h2>
		      <?php the_content(); ?>
		      <?php comments_template( '', true ); ?>
		    <?php endwhile; ?>
		      <?php else : ?>
		        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
		<?php endif; ?>
	</div>
	<!-- /.content -->
</div>
<!-- /.wrap -->

<?php get_footer(); ?>
