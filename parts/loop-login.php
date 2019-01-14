<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

<article id="post-<?php the_ID(); ?>" class="login-page <?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">


		<header class="article-header">
			<h1 class="screen-reader-text entry-title h2 single-title center" itemprop="headline"><?php the_title();?></h1>
<?php // get_template_part( 'parts/content', 'share' );?>

		</header> <!-- end article header -->

    <section class="entry-content white container" itemprop="articleBody">
	    <?php the_content();
			?>
			<?php
$args = array(
'id_username' => 'user',
'id_password' => 'pass',
)
;?>

<?php
if( !is_user_logged_in() ) {
	echo '<div class="center"><p class="col s12">
	Please login using the form below.
	</p></div>';
	wp_login_form( $args );
	echo '<a href="' . wp_lostpassword_url() . '" title="Lost Password">Lost Your Password?</a>';
} else {
	echo '<div class="center"><p class="col s12">
	You are currently logged in.
	</p>';
}?>

	</section> <!-- end article section -->



</article> <!-- end article -->
