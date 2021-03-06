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

<div class="menu-mobile" data-turbolinks-permanent>
	<span class="sprite mobile-fermeture"></span>
	<a class="menu-mobile-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="logo Le Verger de Fred">
		<?php include "img/logo_le-verger-de-fred.svg"; ?>
	</a>
	<nav>
		<?php
			  wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'secondary-menu',
			  ) );
		?>
	</nav><!-- #site-navigation -->
	<a class="phone-menu" href="&#x74;&#x65;&#108;&#x3a;&#43;&#51;&#51;&#x36;&#x30;&#56;&#54;&#x31;&#48;&#57;&#56;&#54;" title="Contactez-nous">Téléphone: &#48;&#54;&#32;&#56;&#55;&#32;&#x38;&#53;&#32;&#56;&#54;&#x20;&#56;&#x31;&#32;
	</a>
</div>

<?php wp_footer(); ?>

</body>
</html>
