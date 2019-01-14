<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">


		<!-- If Site Icon isn't set in customizer -->

			<!-- Icons & Favicons -->


      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
      <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
      <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">

			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->


		  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->
<!-- <?php if (!is_front_page()) {
  ?>
  <body <?php body_class(''); ?> style="background: url('<?php the_post_thumbnail_url('full'); ?>') rgba(38,38,38,.65) no-repeat center center; background-size: 125%;">
<?php } else {?>
  <body <?php body_class('white'); ?>>
<?php }?> -->

<body <?php body_class('white'); ?>>
  <header class="header navbar-fixed valign-wrapper" role="banner">

		<?php get_template_part( 'parts/nav', 'topbar' ); ?>

    <?php get_template_part( 'parts/nav', 'user' ); ?>


	</header> <!-- end .header -->


  <!--[if lt IE 9]>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
 <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
 <![endif]-->
