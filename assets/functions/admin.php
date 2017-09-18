<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets() {
	// Remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	// Remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //
	remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_activity', 'dashboard', 'core');

	// Removing plugin dashboard boxes
	remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget

}

remove_action( 'welcome_panel', 'wp_welcome_panel' );

/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function welcome_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'welcome_dashboard_widget',         // Widget slug.
                 'Getting Started',         // Title.
                 'welcome_dashboard_widget_function' // Display function.
        );
}
add_action( 'wp_dashboard_setup', 'welcome_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function welcome_dashboard_widget_function() {
			$blog_name = get_bloginfo('name');
			echo
			'<div class="welcome-panel">
				<h1>Welcome to the ' . $blog_name . ' website</h1>
				<p class="about-description">Here are some links to get you started.</p>
					<a class="button button-primary button-hero" href="' . admin_url() . '?page=academy-details" target="_blank">Start by filling in your business details</a>
				</p>
				<div class="welcome-panel-column">
					<h3>Next Steps</h3>
					<ul>
						<li>
							<a class="welcome-icon welcome-add-page" href="' . admin_url() . 'post-new.php">Add some news</a>
						</li>
					</ul>
				</div>
			</div>';
}

// Calling all custom dashboard widgets
function charly_custom_dashboard_widgets() {

	/*
	Be sure to drop any other created Dashboard Widgets
	in this function and they will all load.
	*/
}
// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');
// adding any custom widgets
add_action('wp_dashboard_setup', 'charly_custom_dashboard_widgets');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function charly_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="http://alastaircox.com" target="_blank">Alastair Cox</a></span>.', 'charlywp');
}

// adding it to the admin area
add_filter('admin_footer_text', 'charly_custom_admin_footer');


function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );


add_filter('acf/settings/google_api_key', function () {
    return 'AIzaSyB1ogka67k0TWwlmXEcsUqLEeSZTBkgJyA';
});

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Academy Details',
    'menu_title' => 'Academy Details',
    'menu_slug'  => 'academy-details',
    'capability' => 'edit_posts',
    'redirect'   => false
  ));
}

add_action('wp_head', function() {
  $schema = array(
    // Tell search engines that this is structured data
    '@context'  => "http://schema.org",
    // Tell search engines the content type it is looking at
    '@type'     => get_field('schema_type', 'options'),
    // Provide search engines with the site name and address
    'name'      => get_field('company_name', 'options'),
    'telephone' => '+44' . get_field('company_phone', 'options'), //needs country code
    'url'       => get_home_url(),
    'description' => get_bloginfo('description'),
    'image' => 'http://www.irishdancingclasses.co.uk/wp-content/themes/skeleton2/images/Peacock-Academy-Dance-School-Edinburgh-Logo.png'
    // Provide the company address

  );
  $schema['address'] = array();
  $schema['openingHoursSpecification'] = array();
  if (have_rows('address_details', 'options')) { //parent repeater
  // Then set up the array



  // For each row...
  while (have_rows('address_details', 'options')) : the_row();
    // ...check if it's marked "Closed"...

    // ...then output the times
    $addresses = array(
      '@type'           => 'PostalAddress',
      'streetAddress'   => get_sub_field('address_street', 'options'),
      'postalCode'      => get_sub_field('address_postal', 'options'),
      'addressLocality' => get_sub_field('address_locality', 'options'),
      'addressRegion'   => get_sub_field('address_region', 'options'),
      'addressCountry'  => get_sub_field('address_country', 'options'),
      'name'  => get_sub_field('location_name', 'options')
    );
    if (have_rows('opening_times', 'options')) {
    // Then set up the array

    // For each row...
    while (have_rows('opening_times', 'options')) : the_row();
    // ...check if it's marked "Closed"...

    // ...then output the times
    $openings = array(
      '@type'     => 'openingHoursSpecification',
      'dayOfWeek' => get_sub_field('opening_days'),
      'opens'     => get_sub_field('start_time'),
      'closes'    => get_sub_field('finish_time')
    );
    // Finally, push this array to the schema array

    array_push($schema['openingHoursSpecification'], $openings);

    endwhile;
    }
// can you add openingHoursSpecification schema to each address?

// at the moment this is adding an OpeningHoursSpecification array within the address array

    // Finally, push this array to the schema array
    array_push($schema['address'], $addresses);



  endwhile;
}

if (have_rows('special_days', 'option')) {
  // For each row...
  while (have_rows('special_days', 'option')) : the_row();
    // ...check if it's marked "Closed"...

    // ...then output the times
    $special_days = array(
      '@type'        => 'OpeningHoursSpecification',
      'validFrom'    => get_sub_field('date_from'),
      'validThrough' => get_sub_field('date_to'),
      'opens'        => '00:00',
      'closes'       => '00:00'
    );
    // Finally, push this array to the schema array
    array_push($schema['openingHoursSpecification'], $special_days);

  endwhile;
}

echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
});


add_action('admin_head', 'my_admin_style');

function my_admin_style() {
  echo '<style>
    .academy-details {
      background: teal;
      color: white;
    }
  </style>';
}
