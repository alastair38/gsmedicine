<li class="collection-item avatar" style="border-bottom: none;">
      <img src="<?php the_post_thumbnail_url();?>" alt="" class="circle">
      <h2 style="margin-top: 1rem;" class="title"><?php the_title(); ?></h2 style=$>
      <label class="block" style="padding: 0 0 1rem 0;"><i class="mdi mdi-clock"></i> Posted on <?php the_time('F j, Y');?></label>
      <?php the_excerpt(); ?>
      <div style="padding: 1rem 0;">

          <a class="btn-flat grey darken-2 white-text" href="<?php the_permalink();?>">Read Article</a>

      </div>

</li>
