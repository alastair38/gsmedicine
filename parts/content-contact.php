

	<aside id="contact_details" class="center container">
			<h3 class="h5">Contact</h3>
			<p>
				<span itemprop="name"><?php the_field('contact_name', 'options');?></span><?php echo '<br /><i class="mdi mdi-phone"></i><span itemprop="telephone"><a href="tel:' . get_field('company_phone', 'options') . '"> ' . get_field('company_phone', 'options') .  '</a></span>';?><?php echo '<br /><i class="mdi mdi-email"></i> <span itemprop="email"><a href="mailto:' . get_field('company_email', 'options') . '">' . get_field('company_email', 'options') . '</a></span>';?>
			</p>

	</aside>
