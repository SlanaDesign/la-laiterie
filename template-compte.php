<?php

/* Template Name: Template compte */

?>

<?php get_header(); ?>

<div class="legal">

  <?php

  echo '<h2>'.get_the_title($artiste->ID).'</h2>';
  ?>


</div>
<div class="compte">

	<?php echo do_shortcode('[contact-form-7 id="135" title="Creation de compte"]'); ?>
<a class="validation" href="">Inscription</a>

</div>


<?php get_footer(); ?>
