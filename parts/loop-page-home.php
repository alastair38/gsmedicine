
<article id="post-<?php the_ID(); ?>" class="col s12 white-text" itemscope itemtype="http://schema.org/WebPage">
	<header class="article-header">

		<h1 style="display: inline-block; margin-top: 6rem; padding: .5rem 1rem; border-radius: 3px; background: #000000b0;">
			<?php the_title(); ?>
		</h1>
		<h3><?php echo get_field('home_strapline', 'options');?></h3>
	</header> <!-- end article header -->
</article> <!-- end article -->
