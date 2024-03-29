<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
    <section id="content" class="site-content col-xs-12">
    <?php if ( have_posts() ) {
    while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
            <header class="entry-header">
                <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            </header>

            <footer class="entry-meta">
            <?php printf( __( 'Posted <time datetime="%1$s">%2$s</time> by %3$s. ', 'voidx' ), get_post_time('c'), get_the_date(), get_the_author() ); ?>
            <?php _e( 'Categories: ', 'voidx' ); the_category( ', ' ); echo '. '; ?>
            </footer>

            <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            </div>
        </article>

            <?php endwhile;
            } else { ?>

        <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1><?php _e( 'Not found', 'voidx' ); ?></h1>
            </header>
            <div class="entry-content">
                <p><?php _e( 'Sorry, but your request could not be completed.', 'voidx' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>
    <?php } ?>

    <?php voidx_post_navigation(); ?>
    </section>
</main>
<?php get_footer(); ?>
