<?php

/* Template Name: Template legal */

?>

<?php get_header(); ?>

<div class="legal">

  <?php

  echo '<h2>'.get_the_title($artiste->ID).'</h2>';
  ?>


</div>

<div class="contenu_legal">


  <?php
 echo $post->post_content;
  ?>

</div>

<?php get_footer(); ?>
