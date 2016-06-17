<?php
/*
Template Name: Timetable
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<section id="content" class="site-content">
		<h1 class="page-title title-wide"><?php the_field('timetable_section_heading'); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>

		<div class="feature-content">
			<iframe src="https://clients.mindbodyonline.com/classic/home?studioid=106685"></iframe>
		</div>
	</section>    
</main>
<?php get_footer(); ?>