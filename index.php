<?php get_header();
global $wp_query;
$page_id = $wp_query->get_queried_object_id();
$post_thumbnail_id = get_post_thumbnail_id( $page_id );
$featured_img_url = get_the_post_thumbnail_url($page_id,'full');
?>



<main class="cotainer">

		<div class="row" role="main">

			<div class="bg parallax-container" >
				<header class="article-header">
					<h1 class="entry-title single-title white-text center" itemprop="headline"><?php single_post_title();?></h1>
				</header> <!-- end article header -->
				 <div class="parallax"><img src="<?php echo $featured_img_url; ?>"></div>
				 <?php get_template_part( 'parts/content', 'licence' );?>

			</div>

		    <div class="section">
					<div class="container">


					<ul class="collection" style="border: none;">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'blog' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</ul>
			</div>
</div>

			</div> <!-- end row -->

		</main> <!-- end main -->



<?php get_footer(); ?>
