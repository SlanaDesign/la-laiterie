<?php

/* Template Name: Template info */

?>

<?php get_header(); ?>


<div class="prog">

<?php echo get_the_post_thumbnail();


echo '<a href="#infos"><img class="arrow" src="'.get_field('arrow', $info->ID).'" alt="arrow"></a>';

?>


</div>

<div id="infos">


<?php

echo '<h2>'.get_the_title($artiste->ID).'</h2>';
?>

<article>

  <?php
  echo '<div><h3>La grande salle</h3>'.get_field('carte_1', $artiste->ID).'';
  echo '<p>'.get_field('adresse_salle', $artiste->ID).'</p></div>';
  echo '<div><h3>Le club</h3>'.get_field('carte_2', $artiste->ID).'';
  echo '<p>'.get_field('adresse_club', $artiste->ID).'</p></div><br>';
  echo '<span class="telephone">'.get_field('telephone', $artiste->ID).'</span><br><br>';
  echo '<span class="horraire">'.get_field('horraire', $artiste->ID).'</span><br><br>';
  echo '<span class="mail"><a href="'.get_field('mail', $artiste->ID).'">'.get_field('mail', $artiste->ID).'</a></span><br>';
  ?>

</article>
</div>
<?php get_footer(); ?>
