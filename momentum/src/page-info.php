<?php
/*
Template Name: Information page
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">

    <section id="content" class="site-content">
    

            <?php if ( have_posts() ) {
            while ( have_posts() ) : the_post(); ?>

                <header class="entry-header">
                    <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                </header>
    
                <div class="entry-content">
                <?php the_content(); ?>
                </div>

            
            <?php endwhile;
            } ?>

   
    </section>
</main>
<?php get_footer(); ?>