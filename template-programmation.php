<?php

/* Template Name: Template Programmation */

?>

<?php get_header(); ?>


<div class="prog">

<?php echo get_the_post_thumbnail();

echo '<a href="#programme"><img class="arrow" src="'.get_field('arrow', $programmation->ID).'" alt="arrow"></a>';

?>


</div>
<section id="programme" class="programmation">

<?php

echo '<h2>'.get_the_title($artiste->ID).'</h2>';
?>

<article class="la_liste">

  <?php

                $artistes = get_posts( array(
                  'posts_per_page' => -1, // -1 pour afficher tous les articles
                  'post_type' => 'artistes', // Type articles
                  'post_status' => 'publish', // statut public uniquement
                  'meta_key' => 'date-triage',
                  'orderby' => 'meta_value',
                  'order' => 'ASC',
                ));

                foreach( $artistes as $artiste) {
                  echo '<article>';
                  echo '<a href="panier"><img class="panier"  src="'.get_field('panier', $programmation->ID).'"></a>';
                  echo'<a href="'.post_permalink($artiste->ID).'" >';
                  echo '<h3>'.get_the_title($artiste->ID).'&nbsp;<img src="'.get_field('onde_jaune', $programmation->ID).'"></h3>';
                  echo '<span>'.get_field('start_date', $artiste->ID).'</span>';
                  echo '</a>';
                  echo '</article>';
                  echo '<article class="image_groupe" style="background: url('.get_the_post_thumbnail_url($artiste->ID, 'large').') no-repeat; background-size: cover; background-position: center;">';
                  echo '</article>';

                }
                ?>

</article>

</section>

<?php get_footer(); ?>
