<?php
/*
Template Name: Information page
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
  <div class="wrap-content container-fluid">
    <section class="row-full row-full--nopadding-right bg-black">
      <div class="section-content">

            <?php if ( have_posts() ) {
            while ( have_posts() ) : the_post(); ?>


                <div class="panel-container panel-container--full-page">
                  <div class="panel col-sm-12">
                    <h1 class="panel-heading panel-heading--large"><?php the_title(); ?></h1>
                  </div>
                </div>

              </div>
            </section>
            <section class="row-full">
              <div class="section-content">

                <div class="entry-content info-content">
                <?php the_content(); ?>
                </div>

              </div>
          </section>

            <?php endwhile;
            } ?>


    </section>
</main>
<?php get_footer(); ?>
