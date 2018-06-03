<?php
/**
 * The template for displaying all single posts
 *Template Name: artistes
*Template Post Type:  artistes
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SlanaDesign
 */

?>
<?php get_header(); ?>

<section class="page_artiste">

<article>


<?php
			while ( have_posts() ) :
				the_post();

         echo '<img class="image_principale" src="'.get_the_post_thumbnail_url($artiste->ID, 'large').'" >';
         echo '<div>';
         echo '<h2>'.get_the_title($artiste->ID).'</h2>';
         echo '<h3> Le&nbsp;'.get_field('start_date', $artiste->ID).'</h3>';
         echo '</div>';
         echo '<section>';
         echo '<article class="sidebar">';
         echo '<h3>Genre Musical</h3>';
         echo '<span>'.get_field('genre_musical', $artiste->ID).'</span>';
         echo '<h3>Location</h3>';
         echo '<span>'.get_field('location', $artiste->ID).'</span>';
         echo '<a href="/La-Laiterie/panier/">Acheter un billet</a>';
         echo '<h3>Caisse du soir</h3>';
         echo '<span>'.get_field('caisse_du_soir', $artiste->ID).'</span>';
         echo '<p>Accessible d&egrave;s l&#039;ouverture des portes et dans la limite des places disponibles.</p>';
         echo '</article>';
         echo '<article class="contenu_artiste">';
         echo '<p>'.apply_filters('the_content', get_post_field('post_content', $artiste->ID)).'</p>';
         echo '<div class="video">'.get_field('video', $artiste->ID).'</div>';
         echo '</article>';
         echo '</section>';
	endwhile; // End of the loop.
			?>
      </article>
    </section>

    <section class="aimer_aussi">
      <h2>SUGGESTION DU MOMENT </h2>
      <?php

                    $artistes = get_posts( array(
                      'posts_per_page' => 2, // -1 pour afficher tous les articles
                      'post_type' => 'artistes', // Type articles
                      'post_status' => 'publish', // statut public uniquement
											'category' => get_the_category()[0]->cat_ID,
                    ));

                    foreach( $artistes as $artiste) {
                      echo '<article>';
                      echo'<a href="'.post_permalink($artiste->ID).'" >';
                    //  echo '<img src="'.get_the_post_thumbnail_url($artiste->ID, 'large').'" alt="'.get_the_title($artiste->ID).'">';
                      echo '<img src="'.get_field('image_2', $artiste->ID).'">';
                      echo '<h2>'.get_the_title($artiste->ID).'</h2>';
                      echo '<span>'.get_field('start_date', $artiste->ID).'</span>';
                      echo '</a>';
                      echo '</article>';

                    }
                    ?>
    </section>


<?php get_footer(); ?>
