<?php

function gsm_materials() {
  // creating (registering) the custom type
  register_post_type( 'teaching_materials', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array('labels' => array(
      'name' => __('Teaching Materials', 'gsm_theme'), /* This is the Title of the Group */
      'singular_name' => __('Teaching Material', 'gsm_theme'), /* This is the individual type */
      'all_items' => __('All Teaching Materials', 'gsm_theme'), /* the all items menu item */
      'add_new' => __('Add New Teaching Material', 'gsm_theme'), /* The add new menu item */
      'add_new_item' => __('Add New Teaching Material', 'gsm_theme'), /* Add New Display Title */
      'edit' => __( 'Edit', 'gsm_theme' ), /* Edit Dialog */
      'edit_item' => __('Edit Teaching Material', 'gsm_theme'), /* Edit Display Title */
      'new_item' => __('New Teaching Material', 'gsm_theme'), /* New Display Title */
      'view_item' => __('View Teaching Material', 'gsm_theme'), /* View Display Title */
      'search_items' => __('Search Teaching Materials', 'gsm_theme'), /* Search Custom Type Title */
      'not_found' =>  __('Nothing found in the Database.', 'gsm_theme'), /* This displays if there are no entries yet */
      'not_found_in_trash' => __('Nothing found in Trash', 'gsm_theme'), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'show_ui' => true,
      'query_var' => true,
      'show_in_admin_bar' => false,
      'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => 'dashicons-clipboard', /* the icon for the custom post type menu */
      'rewrite' => array( 'slug' => 'teaching_materials' ), /* you can rename the slug here */
      'has_archive' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title', 'editor')
    ) /* end of options */
  ); /* end of register post type */

}


add_action( 'init', 'gsm_materials');

?>
