<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">

	<div class="bg parallax-container" >

		<header class="article-header">
			<h1 class="entry-title single-title white-text center" itemprop="headline"><?php the_title();?></h1>
		</header> <!-- end article header -->

		<div class="parallax"><img src="<?php the_post_thumbnail_url('large'); ?>"></div>

		<?php get_template_part( 'parts/content', 'licence' );?>

	</div> <!-- end .parallax-container -->

	<div class="section white" itemscope itemtype="http://schema.org/WebPage">

	 <div class="row container">

		 <?php $content = get_field('add_message');

	if ($content == '1') {
		echo '<div class="col s12">
		' . get_field('message_content') . '
		</div>';
	}

	if (have_rows('new_section')) { //parent repeater

	while (have_rows('new_section')) : the_row();

	echo '<h2 class="h4 col s12">' . get_sub_field('section_title') . '</h2><section class="col s12">';

			if (have_rows('items_details')) { //parent repeater

			while (have_rows('items_details')) : the_row();
			echo '<div style="border: 1px solid gainsboro; border-radius: 3px; padding: 1rem; margin-bottom: 1rem;">';
			// $image = get_sub_field('item_photo');
			// $title = get_sub_field('item_title');
			// $alt = $image['alt'];
			// if(!$alt) {
			// 	$alt = 'Photograph of ' . $title . ' ' . $name;
			// }
			?>




			<?php echo get_sub_field('item_description');?>



							<?php
							if( get_sub_field('item_link') ):

							// loop through rows (sub repeater)

								// display each item as a list - with a class of completed ( if completed )
							?>

							<a class="btn-flat grey lighten-3" href="<?php echo get_sub_field('item_link');?>">Find out more</a>



							<?php endif; //if( get_sub_field('items') ): ?>

							<?php

							if( have_rows('file_upload') ):
							echo '<strong> Related Files: </strong>';
							// loop through rows (sub repeater)
							while( have_rows('file_upload') ): the_row();
							$file = get_sub_field('file');
							// display each item as a list - with a class of completed ( if completed )
							?>

							<a class="btn-flat grey lighten-3" href="<?php echo $file['url'];?>"><?php echo $file['filename'];?></a>

							<?php endwhile; ?>

							<?php endif; //if( get_sub_field('items') ): ?>





			<?php
echo '</div>';
			endwhile; // end item_details loop

		} else {
			//get_template_part( 'parts/content', 'missing' );
		}; // end item_details conditional

echo 	'</section>'; // section
	endwhile; // end new_section loop

} else {
	//get_template_part( 'parts/content', 'missing' );
}; // end new_section conditional  ?>

		</div> <!-- end row container -->

	</div> <!-- end .section -->

</article> <!-- end article -->
