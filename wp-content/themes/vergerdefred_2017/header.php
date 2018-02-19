<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vergerdefred_2017
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vergerdefred_2017' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="wrapper">
			<div class="site-branding">
				<a class="logo-header" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="logo Le Verger de Fred">
					<?php include "img/logo_le-verger-de-fred.svg"; ?>
				</a>
				<?php
				the_custom_logo();

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="description-header"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<button class="mobil-nav-button"></button>
			<nav id="site-navigation" class="main-navigation">
				<?php
					  wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					  ) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
