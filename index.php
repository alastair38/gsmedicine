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

			<?php
			if( get_field('add_licence_details', $post_thumbnail_id) ):
			$caption = get_field('caption_text', $post_thumbnail_id);
			$credit_text = get_field('credit_text', $post_thumbnail_id);
			$credit_link = get_field('credit_link', $post_thumbnail_id);
			$licence_dets = get_field('type_of_licence', $post_thumbnail_id);

			?>
			<button id="cc-button" data-target="cc-licence" class="btn red-text center transparent z-depth-0"><i class="mdi mdi-information"></i></button>

			<div id="cc-licence" class="grey lighten-3 black-text">

			<?php
			if( $caption ):
			echo $caption . '.';
			endif;

			if( $credit_text && $credit_link):
			echo '<br /><strong>Credit: </strong><a target="_blank" href="' . $credit_link . '">' . $credit_text . '</a>. ';
			endif;

			if( $credit_text && !$credit_link):
			echo '<br /><strong>Credit:</strong> ' . $credit_text . '. ';
			endif;

			if( $licence_dets):
			echo '<a target="_blank" href="' . $licence_dets['value'] . '">' . $licence_dets['label'] . '</a>. ';
			endif;
			?>

			</div>

			<?php endif; ?>

		</div>

		<div class="section">

			<div class="container">

				<ul class="collection">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'blog' ); ?>

					<?php endwhile; ?>

					<?php joints_page_navi(); ?>

					<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

				</ul> <!-- end .collection -->

			</div> <!-- end .container -->

		</div> <!-- end .section -->

	</div> <!-- end row -->

</main> <!-- end main -->

<?php get_footer(); ?>
