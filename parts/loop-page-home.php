
<article id="post-<?php the_ID(); ?>" class="col s12 white-text" itemscope itemtype="http://schema.org/WebPage">
	<header class="article-header">

		<h1 class="home_heading">
			<?php the_title(); ?>
		</h1>
		<h3><?php echo get_field('home_strapline', 'options');?></h3>
	</header> <!-- end article header -->
</article> <!-- end article -->
