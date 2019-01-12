<div class="bg parallax-container" >

	<header class="article-header">
		<h1 class="entry-title single-title white-text center" itemprop="headline"><?php the_title();?></h1>
	</header> <!-- end article header -->

	<div class="parallax"><img src="<?php the_post_thumbnail_url('large'); ?>"></div>

</div> <!-- end .parallax-container -->

<?php get_template_part( 'parts/content', 'byline' ); ?>
<?php get_template_part( 'parts/content', 'share' ); ?>

<div class="section white">

 <div class="container">
	 <?php the_content();?>
 </div>

</div> <!-- end .section -->

<?php //get_template_part( 'parts/loop', 'slider' ); ?>
