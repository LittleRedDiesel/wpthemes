<?php
/*
Template Name: Information page
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">

    <section id="content" class="site-content col-xs-12">
    

            <?php if ( have_posts() ) {
            while ( have_posts() ) : the_post(); ?>

                <header class="entry-header">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                </header>
    
                <div class="entry-content info-content">
                <?php the_content(); ?>
                </div>

            
            <?php endwhile;
            } ?>

   
    </section>
</main>
<?php get_footer(); ?>