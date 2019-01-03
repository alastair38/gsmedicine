<?php get_header();
$title = single_cat_title("", false);
?>



<main class="container">

		<div class="row" role="main">

		    <div class="col s12">

					<header>
						<h1 class="page-title center"><?php the_archive_title();?></h1>
					</header>
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</div>


			</div> <!-- end #main -->

		</main> <!-- end main -->


<?php get_footer(); ?>
