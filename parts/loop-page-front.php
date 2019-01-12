<?php  $post_thumbnail_id = get_post_thumbnail_id( ); // we need the $post_thumbnail_id to get custom fields from the main image?>

<div class="bg parallax-container white-text" >

	<header class="article-header">
		<h1 class="home_heading" itemprop="headline"><?php the_title();?></h1>
	</header> <!-- end article header -->

	 <div class="parallax">
			 <img src="<?php the_post_thumbnail_url('full'); ?>">
	 </div>

   <?php get_template_part( 'parts/content', 'licence' );?>

	 <div class="col s12 center">
		 <a href="#About" class="white-text hide-on-med-and-down"><i class="mdi mdi-chevron-down"></i></a>
	 </div>

</div>
