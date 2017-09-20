<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vergerdefred_2017
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1FCTyNKkAEhr6_MfYZH_T1dKb6vA" width="640" height="480" frameborder="0" style="border:0" allowfullscreen></iframe> -->
		<div class="site-info">
			<div class="lineout">
				<p class="title">Nous contacter</p>
				<p>Babineau Frédéric & Cathy</p>
				<p>Lieu dit SAINT MARTIN<br>
				17020 SAINT AGNAN<br>
				06 87 85 86 81<br>
				levergerdefred@gmail.com</p>
				<p>Réponse assurée dans  les 48h</p>
			</div>
		</div><!-- .site-info -->
		<div class="rights">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> © Le Verger de Fred</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>/mentions-legales">Mentions légales</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">Contact</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
