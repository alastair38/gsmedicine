<?php $post_thumbnail_id = get_post_thumbnail_id( );
 $image_meta = wp_get_attachment_caption( $post_thumbnail_id );

 if( get_field('add_licence_details', $post_thumbnail_id) ):
$caption = get_field('caption_text', $post_thumbnail_id);
$credit_text = get_field('credit_text', $post_thumbnail_id);
$credit_link = get_field('credit_link', $post_thumbnail_id);
$licence_dets = get_field('type_of_licence', $post_thumbnail_id);


?>
   <button id="cc-button" data-target="cc-licence" class="btn red-text center transparent z-depth-0"><i class="mdi mdi-information">
 </i></button>

   <div id="cc-licence" class="grey lighten-3 black-text">

      <?php
      if( $caption ):
      echo $caption . '.';
      endif;

      if( $credit_text && $credit_link):
      echo '<br /><strong>Credit: </strong><a target="_blank" href="' . $credit_link . '">' . $credit_text . '</a>. ';
      endif;

      if( $credit_text && !$credit_link):
      echo '<br /><strong>Credit:</strong> ' . $credit_text . '. ';
      endif;

      if( $licence_dets):
      echo '<a target="_blank" href="' . $licence_dets['value'] . '">' . $licence_dets['label'] . '</a>. ';
      endif;
      ?>
   </div>

<?php endif; ?>
