			<!-- footer -->
			<footer class="footer" role="contentinfo">


<article>



				<?php

											$artistes = get_posts( array(
												'posts_per_page' => 1, // -1 pour afficher tous les articles
												'category' => '7',
												'post_status' => 'publish', // statut public uniquement
												'orderby' => 'post_date', // trier par date
												'order' => 'ASC' // trier par date décroissante
											));

											foreach( $artistes as $artiste) {

												echo '<div>';
												echo '<h4>Retrouvez-nous</h4>';
												echo '<a href="'.get_field('facebook', $artiste->ID).'"><img class="arrow" src="'.get_field('facebook-image', $artiste->ID).'" alt="facebook"></a></span>';
												echo '<a href="'.get_field('twiiter', $artiste->ID).'"><img class="arrow" src="'.get_field('twitter-image', $artiste->ID).'" alt="twitter"></a></span>';
												echo '<a href="'.get_field('instagram', $artiste->ID).'"><img class="arrow" src="'.get_field('instagram-image', $artiste->ID).'" alt="instagram"></a></span>';
												echo '</div>';


											}
											?>
</article>
											<article>
												<nav class="nav" role="navigation">
													<?php html5blank_nav(); ?>
												</nav>
											</article>

											<article>
												<nav id="site-navigation" class="main-navigation">
												<?php
												wp_nav_menu( array(
													'theme_location' => 'menu-2',
													'menu_id'        => 'footer-menu',
													'menu_class'		 => 'menu align-right',
												) );
												?>
			</nav>
											</article>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
