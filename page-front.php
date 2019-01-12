<?php
/*
Template Name: Front Page
*/
get_header();
?>

<main id="hero" itemscope itemtype="http://schema.org/WebPage">
	<div class="row center" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post();

		get_template_part( 'parts/loop', 'page-front' );

		endwhile; endif;

		?>

	</div> <!-- end row -->

 <?php

	if( have_rows('front_page_sections') ):

		while ( have_rows('front_page_sections') ) : the_row();?>

		<section id="<?php the_sub_field('section_title'); ?>" class="row fp-page-section" style="background: <?php the_sub_field('background_colour'); ?>;">

			<div class="col s12 l8 push-l<?php the_sub_field('push_right'); ?>" style="color: <?php the_sub_field('text_colour'); ?>;">

				<h2 class="center h4"><?php the_sub_field('section_title'); ?></h2>

				<?php the_sub_field('section_description'); ?>

				<a class="btn-large transparent z-depth-0 waves-effect" style="color: <?php the_sub_field('text_colour'); ?>;" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('button_text'); ?></a>

			</div> <!-- end col s12 l8 -->

			<div class="col s12 l4 center pull-l<?php the_sub_field('pull_left'); ?>" >
									<img src="<?php the_sub_field('section_image'); ?>" alt="Photograph representing the <?php the_sub_field('section_title'); ?> section of the website">
			</div> <!-- end col s12 l4 -->

		</section> <!-- end #section_title -->

	<?php
		endwhile;
		else :
	 // no rows found
	endif;
	?>

</main> <!-- end main -->

<?php get_footer(); ?>
