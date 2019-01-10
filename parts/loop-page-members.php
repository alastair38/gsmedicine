<div class="bg parallax-container" >
	<header class="article-header">
		<h1 class="entry-title single-title white-text center" itemprop="headline"><?php the_title();?></h1>
	</header> <!-- end article header -->
	 <div class="parallax"><img src="<?php the_post_thumbnail_url('large'); ?>"></div>

	 <?php get_template_part( 'parts/content', 'licence' );?>

</div>


<div class="section white" itemscope itemtype="http://schema.org/WebPage">
 <div class="row container">

	 <?php the_content();


	 // get repeater field data
	 $members = get_field('network_members');

	 // vars

	 $order = array();

	 $committee = array();
	 $network = array();

	 if($members) {
	 foreach( $members as $i => $row ) {
		$order[ $i ] = $row['second_name'];
	 }
	 array_multisort( $order, SORT_ASC, $members );
 }

	 foreach ($members as $key => $row) {
	     if($row['committee_member'] == '1') $committee[] = $row;
	     else $network[] = $row;
	 }



if($committee){
	//echo '<h2>Committee</h2>';
	//print_R($committee);
}

if($network){
	//echo '<h2>Network</h2>';
	//print_R($network);
}

	 // populate order





	 // multisort


	 if( $committee ): ?>

<h2 class="center h4 col s12">Steering Committee</h2>

	 	<?php foreach( $committee as $i => $row ):
			 ?>

			<div class="col s12">
				<div class="card">

				<div class="card-content col s12">
					<span class="card-title"><?php echo $row['first_name'] . ' ' . $row['second_name'];?></span>
					<p class="university_link">

							<a class="" href="<?php echo $row['member_link'];?>"><i class="mdi mdi-domain grey lighten-2"></i> <?php echo $row['member_university'];?></a>


					</p>
					<?php if($row['member_bio']) {?>
					<p>

						<?php echo $row['member_bio'];?>
					</p>
				<?php }?>

				</div>

			</div>
		</div>



	 	<?php

		endforeach; ?>



	 <?php endif;

	 if( $network ): ?>

<h2 class="center h4 col s12">Members</h2>

	 	<?php foreach( $network as $i => $row ):
			 ?>

			<div class="col s12">
				<div class="card">

				<div class="card-content col s12">
					<span class="card-title"><?php echo $row['first_name'] . ' ' . $row['second_name'];?></span>
					<p class="university_link">

							<a class="" href="<?php echo $row['member_link'];?>"><i class="mdi mdi-domain grey lighten-2"></i> <?php echo $row['member_university'];?></a>


					</p>
					<?php if($row['member_bio']) {?>
					<p>

						<?php echo $row['member_bio'];?>
					</p>
				<?php }?>
				</div>

			</div>
		</div>



	 	<?php

		endforeach; ?>



	 <?php endif;
?>

	</div> <!-- end row container -->
</div> <!-- end section -->
