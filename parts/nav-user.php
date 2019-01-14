
<?php
if( is_user_logged_in() ) {
if( current_user_can('editor') || current_user_can('administrator') ) {?>

	<div class="fixed-action-btn toolbar direction-top">
	<a class="btn-floating btn-large red">
	<i class="mdi mdi-settings"></i>
	</a>
	<ul>
	<li><a class="btn-flat waves-effect waves-light" href="<?php echo admin_url();?>">Main Admin</a></li>
	<li class="hide-on-med-and-down"><a class="btn-flat waves-effect waves-light" href="<?php echo admin_url();?>edit.php">Edit Posts</a></li>
	<li class="hide-on-med-and-down"><a class="btn-flat waves-effect waves-light" href="<?php echo admin_url();?>edit.php?post_type=page">Edit Pages</a></li>
	<li class="hide-on-med-and-down"><a class="btn-flat waves-effect waves-light" href="<?php echo get_edit_post_link()?>">Edit Current</a></li>
	<li><a class="btn-flat waves-effect waves-light" href="<?php echo home_url();?>/wp-login.php?action=logout">Logout</a></li>
	</ul>
	</div>
<?php }
}?>
