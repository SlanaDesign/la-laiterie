<?php /* Template Name: Template Panier */ get_header(); ?>

<section class="panier">

<div class="titre">
		<?php

		echo '<h2>'.get_the_title($artiste->ID).'</h2>';

		?>

</div>
		<article class="la_liste">


<div class="onglets">
  <div class="onglet actif" id="onglet1">Panier</div>
  <div class="onglet" id="onglet8">Identification</div>
	<div class="onglet" id="onglet5">Paiement</div>
  <div class="onglet" id="onglet3">Confirmation</div>
</div>

<div class="contenu actif" id="contenu1">

	<h2 class="h2_panier">Dans votre panier :</h2>
	<a class="validation onglet" id="onglet2">Valider votre Panier</a><br>

			  <?php

			                $artistes = get_posts( array(
			                  'posts_per_page' => 2, // -1 pour afficher tous les articles
			                  'post_type' => 'artistes', // Type articles
			                  'post_status' => 'publish', // statut public uniquement

			                ));

			                foreach( $artistes as $artiste) {

												echo '<article class="image_groupe" style="background: url('.get_the_post_thumbnail_url($artiste->ID, 'large').') no-repeat; background-size: cover; background-position: center;">';
			                  echo '</article>';
			                  echo '<article>';
			                  echo'<a href="'.post_permalink($artiste->ID).'" >';
			                  echo '<h3>'.get_the_title($artiste->ID).' <img src="'.get_field('onde', $panier->ID).'"></h3>';
			                  echo '<span>'.get_field('start_date', $artiste->ID).'</span>';
			                  echo '</a>';
			                  echo '</article>';
												echo '<article class="quantite">';
												echo '<span>Quantité</span><br>';
												echo '<input style="line-height: normal;width: 45px!important;text-align: center;border: none;" type="number" placeholder="1">';
												echo '</article>';
												echo '<article class="quantite">';
												echo '<span>Prix</span><br>';
												echo '<span>25€</span>';
												echo '</article>';
			                }
			                ?>
											<article class="total">
												<span>Total TTC :</span> 50 €
											</article>
									<br><a class="validation onglet" id="onglet4">Valider votre Panier</a>

	</div>
<div class="contenu" id="contenu2">
		<h2 class="h2_panier">Déja client ?</h2>
		<?php echo do_shortcode('[contact-form-7 id="111" title="Panier déjà Client"]'); ?>
		<br><a class="validation onglet" id="onglet9">Connexion</a>

		<h2 class="h2_panier">Pas encore inscrit ?</h2>
		<?php echo do_shortcode('[contact-form-7 id="110" title="Panier"]'); ?>
		<br><a class="validation onglet" id="onglet7">Confirmer</a>
	</div>
<div class="contenu" id="contenu3">
		<h2 class="h2_panier">Paiement :</h2>
 	<input id="checkBox" type="checkbox"><img class="image_paiement"src="<?php echo get_field('paypal', $panier->ID); ?>"> <input id="checkBox" type="checkbox"><img src="<?php echo get_field('cb', $panier->ID); ?>"><br><br>
	<span>Numéro de carte</span>&nbsp;<input type="number" name="" value=""><br><br>
	<span>Date d'expiration</span>&nbsp;<input type="date" name="" value=""><br><br>
	<span>Cryptograme visuel</span>&nbsp;<input type="number" name="" value=""><br><br>
	<br><a class="validation onglet" id="onglet6">Confirmer</a>
	</div>

<div class="contenu" id="contenu4">
  <h2 class="h2_panier">Confirmation de commande</h2>
	<?php

								$artistes = get_posts( array(
									'posts_per_page' => 2, // -1 pour afficher tous les articles
									'post_type' => 'artistes', // Type articles
									'post_status' => 'publish', // statut public uniquement

								));

								foreach( $artistes as $artiste) {

									echo '<article class="image_groupe" style="background: url('.get_the_post_thumbnail_url($artiste->ID, 'large').') no-repeat; background-size: cover; background-position: center;">';
									echo '</article>';
									echo '<article>';
									echo'<a href="'.post_permalink($artiste->ID).'" >';
									echo '<h3>'.get_the_title($artiste->ID).' <img src="'.get_field('onde', $panier->ID).'"></h3>';
									echo '<span>'.get_field('start_date', $artiste->ID).'</span>';
									echo '</a>';
									echo '</article>';
									echo '<article class="quantite">';
									echo '<span>Quantité</span><br>';
									echo '<input style="line-height: normal;width: 45px!important;text-align: center;border: none;" type="number" placeholder="1">';
									echo '</article>';
									echo '<article class="quantite">';
									echo '<span>Prix</span><br>';
									echo '<span>25€</span>';
									echo '</article>';
								}
								?>
								<br><a class="validation" href="la-laiterie">Revenir au site</a>
</div>

		</article>
</section>



<?php get_footer(); ?>
