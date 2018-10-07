<?php
/*
Template Name: Archives
*/
get_header(); ?>
<?php custom_breadcrumbs(); ?>

<div class="layout-row flex sidebar-wrapper">

	<?php include 'sidebar.php';?>

	<div class="wrap">
		<div class="content archive-page">
      <div class="post-header">
        <a href="#" class="savePage">Print or download this page</a>
      </div>
    		<h3>Archives by Subject:</h3>
    		<ul>
    			 <?php wp_list_categories(); ?>
    		</ul>
        <div class="post-body">
        <?php
        // Check if there are any posts to display
        if ( have_posts() ) : ?>

          <header class="archive-header">
            <h2 class="archive-title">Category: <?php single_cat_title( '', true ); ?></h2>
            <?php
            // Display optional category description
             if ( category_description() ) : ?>
            <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
          </header>
          <ol>
            <?php

            // The Loop
            while ( have_posts() ) : the_post(); ?>
            <li>
              <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              <span><?php the_time('F jS, Y') ?> by <?php the_author() ?></span>

              <div class="entry">
              <?php the_content(); ?>
              </div>
            </li>
            <?php endwhile;?>
          </ol>
          <?php else: ?>
          <p>Sorry, no posts matched your criteria.</p>


        <?php endif; ?>
      </div>
	   </div><!-- #content -->
   </div><!-- #container -->
</div>

<?php get_footer(); ?>
