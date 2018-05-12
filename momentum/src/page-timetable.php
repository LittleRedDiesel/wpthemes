<?php
/*
Template Name: Timetable
*/
?>
<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<section id="content" class="site-content">
		<h1 class="page-title title-wide"><?php the_field('timetable_section_heading'); ?></h1>
		<section class="bg-grey-section panel-section click-panels">
			<div class="section-content">
				<div class="panel-container primary-panels">
					<div class="panel panel-1 js-active">
						<a href="#panel1" class="js-switch-panel" data-panel="panel1"><h3><?php the_field('panel_1_title'); ?></h3></a>
					</div>
					<div class="panel panel-2 right-panel">
						<a href="#panel2" class="js-switch-panel" data-panel="panel2"><h3><?php the_field('panel_2_title'); ?></h3></a>
					</div>
				</div>
			</div>
			<section class="bg-white-section primary-panels-display panels-display panels-calendar">
				<div class="panel panel1 js-active">
					<?php
					 	the_field('panel_1_content');
					?>
					<script type='text/javascript'>teamup.calendar({provider_id:1174690,width:"100%",height:"600px",view:"month",target_element_id:"teamup-widget-1174690"});</script>
					<div id="teamup-widget-1174690"></div>
				</div>
				<div class="panel panel2">
					<?php
						the_field('panel_2_content');
					?>
					<script type='text/javascript'>teamup.calendar({provider_id:1756846,width:"100%",height:"600px",view:"month",target_element_id:"teamup-widget-1756846"});</script>
					<div id="teamup-widget-1756846"></div>
				</div>
			</section>
		</section>
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section>
</main>

<?php get_footer(); ?>
