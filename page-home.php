<?php
/*
Template Name: Home Page
*/
get_header();
?>

<main id="gettingStarted">
	<div class="row center">
		<div id="strapline" class="col s12">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'parts/loop', 'page-home' ); ?>
		<div class="col s12 center">
			<a href="#About" class="white-text"><i class="mdi mdi-chevron-down"></i></a>
		</div>

		</div> <!-- end #strapline -->
	</div> <!-- end row center -->

 <?php endwhile; endif;

	if( have_rows('front_page_sections') ):

		while ( have_rows('front_page_sections') ) : the_row();?>

	<div id="<?php the_sub_field('section_title'); ?>" class="row fp-page-section" style="background: <?php the_sub_field('background_colour'); ?>;">

		<div class="col s12 l8 push-l<?php the_sub_field('push_right'); ?>" style="color: <?php the_sub_field('text_colour'); ?>;">
			<h4 class="center"><?php the_sub_field('section_title'); ?></h4>

			<?php the_sub_field('section_description'); ?>

			<a class="btn-large transparent z-depth-0 waves-effect" style="color: <?php the_sub_field('text_colour'); ?>;" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('button_text'); ?></a>

		</div> <!-- end col s12 l8 -->

		<div class="col s12 l4 center pull-l<?php the_sub_field('pull_left'); ?>" >
								<img src="<?php the_sub_field('section_image'); ?>" alt="Photograph representing the <?php the_sub_field('section_title'); ?> section of the website">
		</div> <!-- end col s12 l4 -->



	</div> <!-- end #section_title -->

	<?php
	endwhile;
	else :
	 // no rows found
	endif;
	?>

</main> <!-- end main -->

<?php get_footer(); ?>
