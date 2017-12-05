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
		<div class="rights">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> © Le Verger de Fred</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>/mentions-legales">Mentions légales</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">Contact</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
