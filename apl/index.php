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

<div class="layout-row flex sidebar-wrapper">

	<?php include 'sidebar.php';?>

	<div class="wrap">
		<div class="content">
			<?php if(have_posts()) : ?>
				<?php while(have_posts())  : the_post(); ?>

			<div class="post-meta">
				<div class="post-mod">
					<p>Author: <b><?php the_author(); ?></b></p>
				<?php $u_time = get_the_time('U');
							$u_modified_time = get_the_modified_time('U');
							$modifiedAuth = get_the_modified_author();
							if ($u_modified_time >= $u_time + 86400) {
							echo "<p>Last modified by: <b>" . $modifiedAuth . "</b> on ";
							the_modified_time('F jS, Y');
							echo " at ";
							the_modified_time();
							echo "</p> ";
							} ?>

							<div class="categories-container">
								<?php

								$categories = get_the_category();
								$separator = ', ';
								$output = '';
								if ( ! empty( $categories ) ) {
								    foreach( $categories as $category ) {
								        $output .= '<a class="category-link" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								    }
										echo 'Categories: ';
								    echo trim( $output, $separator );
								}

								 ?>

							</div>
							<div class="post-header">
								<a href="#" class="savePage">Print or download this page</a>
							</div>
				</div>

				<div class="post-search-box">
					<form role="search" method="get" id="searchform" class="searchform form-inline my-2 my-lg-0"  action="<?php get_permalink(); ?>">
						<input class="form-control mr-sm-2" placeholder="Search page..."  type="text" value="<?php get_search_query(); ?>" name="search" id="search" />
						<input type="hidden" name="search-type" value="page" />
						<input class="btn btn-outline-dark" name="submit" id="searchsubmit" type="submit" value="Search" />
					</form>
				</div>
			</div>

			<?php
			    if ( isset( $_REQUEST[ 'search' ] ) ) {
			          // run search query
			          query_posts( array(
			             's' => $_REQUEST[ 'search' ],
			             'post_type' => $_REQUEST[ 'post_type' ],
			             'paged' => $paged
			             )
			          );

			        // loop
			        if ( have_posts() ) :
			            // loop through results here
									?>
								<div class="search-results">
									Search results for:	'<span><?php echo get_search_query(); ?></span>'

								</div>

								<div class="post-body">
									<?php $title = get_the_title(); $keys= explode(" ",$search); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<mark class="search-excerpt">\0</mark>', $title); ?>
									<h2><?php echo $title; ?></h2>
									<?php $content = get_the_content(); $keys= explode(" ",$search); $content = preg_replace('/('.implode('|', $keys) .')/iu', '<mark class="search-excerpt">\0</mark>', $content); ?>
									<?php echo $content; ?>
								</div>


								<?php



							else :

								?>
								<div class="search-results">
									<p>No search results found.</p>
								</div>

								<div class="post-body">

									<h2><?php the_title(); ?></h2>
									<?php the_content(); ?>
								</div>
								<?php
						 endif;

			        // return to original query
			        wp_reset_query();
			    } else {
						?>

						<div class="post-body">

							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>

						</div>
							<?php

					}
			?>


		    <?php endwhile; ?>
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
