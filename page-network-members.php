<?php

/*
Template Name: Network Members
*/
get_header(); ?>

<main>

	<div class="row" role="main" itemscope itemtype="http://schema.org/WebPage">

		<?php if (have_posts()) : while (have_posts()) : the_post();

		get_template_part( 'parts/loop', 'page-members' );

		endwhile; endif;

		?>

	</div> <!-- end #mainrow -->

</main> <!-- end main -->

<?php get_footer(); ?>
