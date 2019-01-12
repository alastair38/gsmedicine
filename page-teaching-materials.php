<?php
/*
Template Name: Teaching Materials
*/
get_header(); ?>

<main>

	<div class="row" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post();

		get_template_part( 'parts/loop', 'page-materials' );

		endwhile; endif;

		?>

	</div> <!-- end row -->
	
</main> <!-- end main -->

<?php get_footer(); ?>
