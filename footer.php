					<footer id="contact" class="page-footer white black-text center" role="contentinfo">
						<div id="inner-footer" class="container">

							<ul class="col s12 l12">
									<?php
									$email_contact = get_theme_mod('tcx_email_contact');
									if ($email_contact) {
											echo ' <li><a href="mailto:' . $email_contact . '" target="_blank"><i class="mdi mdi-email"></i> Email</a></li>';
									}?>
									<?php
									$twitter_handle = get_theme_mod('tcx_twitter_handle');
									if ($twitter_handle) {
									echo '<li><a href="https://twitter.com/' . $twitter_handle . '" target="_blank"><i class="mdi mdi-twitter"></i> Follow us on Twitter</a></li>';
									}?>
									<?php
									$landline_contact = get_theme_mod('tcx_landline_contact');
									if ($landline_contact) {
									echo '<li><a href="tel://+' . $landline_contact . '" target="_blank"><i class="mdi mdi-phone"></i> ' . $landline_contact . '</a></li>';
									}?>
									<?php
									$mobile_contact = get_theme_mod('tcx_mobile_contact');
									if ($mobile_contact)  {
									echo '<li><a href="tel://+' . $mobile_contact . '" target="_blank"><i class="mdi mdi-cellphone"></i> ' . $mobile_contact . '</a></li>'; }?>
							</ul>

							<div class="col s12">
								<p class="source-org copyright">
									<!-- <?php
									$page = get_page_by_title( 'Privacy' );
									if ($page) {
										wp_list_pages( 'title_li=&include=' . $page->ID );
									} else {
										wp_list_pages('title_li=');
									}
										?> -->

								<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &copy <?php echo date("Y");?>
								</p>
							</div>

						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->

					<?php

					if (have_rows('cancelled_classes', 'options')) { //parent repeater
						date_default_timezone_set('Europe/London');

					// Then call the date functions
					$now = date('F j, Y');
					$now = strtotime($now);

					// For each row...
					while (have_rows('cancelled_classes', 'options')) : the_row();
						// ...check if it's marked "Closed"...
						$name = get_sub_field('class_name_x', 'options');
						$locale = get_sub_field('class_locale', 'options');
						$date = get_sub_field('class_date_x', 'options');
						$date = strtotime($date);

					if($date == $now ){
						echo '<div id="cancellation_alert" class="materialize-red center lighten-1 white-text">There is no ' . implode(' or ', $name) . ' ' . $locale . ' class today</div><br />';
					}



					endwhile;
					}

					if (have_rows('special_days', 'options')) { //parent repeater
						date_default_timezone_set('Europe/London');

					// Then call the date functions
					$today = date('F j, Y');
					$today = strtotime($today);

					// For each row...
					while (have_rows('special_days', 'options')) : the_row();
						// ...check if it's marked "Closed"...
						$date_fr = get_sub_field('date_from', 'options');
						$date_t = get_sub_field('date_to', 'options');
						$date_from = strtotime($date_fr);
						$date_to = strtotime($date_t);

					if($date_from <= $today && $date_to >= $today ){
						echo '<div id="cancellation_alert" class="materialize-red center lighten-1 white-text">We are on holiday from ' . $date_fr . ' to ' . $date_t . '</div><br />';
					}



					endwhile;
					}

					?>

		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
