<div class="bg parallax-container" >
	<header class="article-header">
		<h1 class="entry-title single-title white-text center" itemprop="headline"><?php the_title();?></h1>
	</header> <!-- end article header -->
	 <div class="parallax"><img src="<?php the_post_thumbnail_url('large'); ?>"></div>
</div>

<div class="section white" itemscope itemtype="http://schema.org/WebPage">
 <div class="row container">

	 <?php the_content();

		if (have_rows('items_details')) { //parent repeater

		while (have_rows('items_details')) : the_row();
		$image = get_sub_field('item_photo');
		$title = get_sub_field('item_title');
		$alt = $image['alt'];
		if(!$alt) {
			$alt = 'Photograph of ' . $title . ' ' . $name;
		}
		?>

		<div class="col s6">
			<div class="card grey darken-2">

			<div class="card-content white-text">
				<span class="card-title"><?php echo $title;?></span>
				<p>
					<?php echo get_sub_field('item_description');?>
				</p>
				<div class="card-action" style="padding: 1rem 0;">
					<?php
					if( have_rows('item_link') ):

								// loop through rows (sub repeater)
								while( have_rows('item_link') ): the_row();

									// display each item as a list - with a class of completed ( if completed )
									?>
									<a href="<?php echo get_sub_field('link');?>">Find out more</a>
								<?php endwhile; ?>

							<?php endif; //if( get_sub_field('items') ): ?>

								<?php
								if( have_rows('file_upload') ):

											// loop through rows (sub repeater)
											while( have_rows('file_upload') ): the_row();

												// display each item as a list - with a class of completed ( if completed )
												?>
												<a href="<?php echo get_sub_field('file');?>">Download File</a>
											<?php endwhile; ?>

										<?php endif; //if( get_sub_field('items') ): ?>

				</div>
			</div>

		</div>
	</div>
		<?php

		endwhile; // end item_details loop
		}; // end item_details conditional ?>

	</div> <!-- end row container -->
</div> <!-- end section -->