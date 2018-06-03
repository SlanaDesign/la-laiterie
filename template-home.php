<?php

/* Template Name: Template home */

?>

<?php get_header(); ?>

<main role="main">

<div class="image">
<?php
echo get_the_post_thumbnail();

?>

<?php

echo '<a href="#en_avant"><img class="arrow" src="'.get_field('arrow', $artiste->ID).'" alt="arrow"></a>';
?>

</div>

<div id="en_avant">



<?php

              $artistes = get_posts( array(
                'posts_per_page' => 3, // -1 pour afficher tous les articles
                'post_type' => 'artistes', // Type articles
                'category' => '3',
                'post_status' => 'publish', // statut public uniquement
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
              ));

              foreach( $artistes as $artiste) {

                echo'<a href="'.post_permalink($artiste->ID).'" >';
                echo '<article class="artiste" style="background: url('.get_the_post_thumbnail_url($artiste->ID, 'large').') no-repeat; background-size: cover; background-position: center;">';
                echo '<h2>'.get_the_title($artiste->ID).'</h2>';
                echo '<h3> Le&nbsp;'.get_field('start_date', $artiste->ID).'</h3>';
                echo '</article>';
                echo '</a>';

              }
              ?>


</div>

<section class="programation">
  <article class="tuiles">
    <h3>Prochains concert</h3>
    <?php

                  $artistes = get_posts( array(
                    'posts_per_page' => 6, // -1 pour afficher tous les articles
                    'post_type' => 'artistes', // Type articles
                    'post_status' => 'publish', // statut public uniquement
                    'meta_key' => 'date-triage',
                    'orderby' => 'meta_value',
                    'order' => 'ASC',


                  ));

                  foreach( $artistes as $artiste) {

                    echo'<a href="'.post_permalink($artiste->ID).'" >';
                  //  echo '<img src="'.get_the_post_thumbnail_url($artiste->ID, 'large').'" alt="'.get_the_title($artiste->ID).'">';
                  echo '<article style="background: url('.get_the_post_thumbnail_url($artiste->ID, 'large').') no-repeat; background-size: cover; background-position: center;">';
                  echo '</article>';
                    echo '<h2>'.get_the_title($artiste->ID).'</h2>';
                    echo '<span>'.get_field('start_date', $artiste->ID).'</span>';
                    echo '</a>';

                  }
                  ?>

  </article>
  <a class="voir_plus" href="<?php bloginfo('url'); ?>/la-programmation">Voir plus</a>
  <article class="en_avant_deux">

    <?php

                  $artistes = get_posts( array(
                    'posts_per_page' => 1, // -1 pour afficher tous les articles
                    'post_type' => 'artistes', // Type articles
                    'category' => '4',
                    'post_status' => 'publish', // statut public uniquement
                    'orderby' => 'post_date', // trier par date
                    'order' => 'ASC' // trier par date décroissante
                  ));

                  foreach( $artistes as $artiste) {

                    echo'<a href="'.post_permalink($artiste->ID).'" >';
                    echo '<article class="artiste" style="background: url('.get_the_post_thumbnail_url($artiste->ID, 'large').') no-repeat; background-size: cover; background-position: center;">';
                    echo '<h2>'.get_the_title($artiste->ID).'</h2>';
                    echo '<h3>'.get_field('start_date', $artiste->ID).'</h3>';
                    echo '</article>';
                    echo '</a>';

                  }
                  ?>

  </article>
</section>
<section class="new">
<article>  <h2>Ne ratez rien !</h2><br> <span>inscrivez-vous à la newsletter</span></article>
<article> <?php echo do_shortcode('[contact-form-7 id="62" title="Newsletter"]'); ?></article>
</section>

<section class="artefact_cassette">
  <div class="fille_jaune"></div>
  <article class="artefact">
    <div class="slider-home">
    <?php

                  $articles = get_posts( array(
                    'posts_per_page' => 3, // -1 pour afficher tous les articles
                    'category' => '5',
                    'post_status' => 'publish', // statut public uniquement
                    'orderby' => 'post_date', // trier par date
                    'order' => 'ASC' // trier par date décroissante
                  ));

                  foreach( $articles as $article) {

                    echo '<article class="artiste">';
                    echo '<h2>Devenez utilisateur<br><span>Artefact.org</span></h2>';
                    echo '<a href="'.post_permalink($artiste->ID).'" ><h3>'.get_the_title($article->ID).'</h3></a>';
                    echo '<p>'.apply_filters('the_content', get_post_field('post_content', $article->ID)).'</p>';
                    echo '</article>';

                  }
                  ?>
             </div>   <a  class="compte" href="creation-de-compte">Je crée mon compte</a>
  </article>
  <article class="cassette">
    <?php

                  $articles = get_posts( array(
                    'posts_per_page' => 3, // -1 pour afficher tous les articles
                    'category' => '6',
                    'post_status' => 'publish', // statut public uniquement
                    'orderby' => 'post_date', // trier par date
                    'order' => 'ASC' // trier par date décroissante
                  ));

                  foreach( $articles as $article) {


                echo '<img src="'.get_the_post_thumbnail_url($article->ID, 'large').'" alt="'.get_the_title($article->ID).'">';


                  }
                  ?>


  </article>
</section>


</main>

<?php get_footer(); ?>
