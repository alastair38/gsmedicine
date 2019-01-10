<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">

	<div class="bg parallax-container" >
    <header class="article-header">
      <h1 class="entry-title single-title white-text center" itemprop="headline"><?php the_title();?></h1>
    </header> <!-- end article header -->
     <div class="parallax"><img src="<?php the_post_thumbnail_url('large'); ?>"></div>
		 <?php get_template_part( 'parts/content', 'licence' );?>
  </div>

    <section class="entry-content white container" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
	</footer> <!-- end article footer -->

</article> <!-- end article -->
