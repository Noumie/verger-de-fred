<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vergerdefred_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- afficher l'image à la une -->
		<div class='presentation presentation-home' style='background-image: url(" <?php the_post_thumbnail_url('full'); ?> ")' >

			<?php if (is_front_page()) { ?>
				<div class="overlay">
					<h1>Le Verger de Fred, <span>un lieu accueillant et chaleureux</span></h1>
				</div>
				<?php }else { ?>
					<div class="plop">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
			<?php } ?>

		</div>
	</header><!-- .entry-header -->
	<div class="entry-content-home">
		<!-- .entry-header -->
		<div class="full zone-texte">
			<div class="wrapper">
				<div class="part-1">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/vergerdefred_2017/img/montage-1.png" alt="Illustration"/>
				</div>
				<div class="part-2">
					<?php
						the_content();
					?>
				</div>
			</div>
			<img class="separator" src="<?php echo get_site_url(); ?>/wp-content/themes/vergerdefred_2017/img/feuilles.png" alt="Transition feuilles"/>
		</div>
		<div class="full zone-picto"></div>
		<div class="full zone-texte-2">
			<div class="wrapper">

				<!-- faire remonter les champs supplémentaires -->
				<?php
				if ( class_exists( 'MetaBox' ) )
				{
					$meta = new MetaBox();
					$meta->getChampSupHtml( get_the_ID() );
				}
				?>

			</div>
		</div>
		<div class="full zone-photo">
		</div>
	</div>
	<div class="full zone-contact">
		<div class="site-info">
			<div class="lineout">
				<p class="title">Nous contacter</p>
				<p>Babineau Frédéric & Cathy</p>
				<p>Lieu dit SAINT MARTIN<br>
				17020 SAINT AGNAN<br>
				06 87 85 86 81<br>
				levergerdefred@gmail.com</p>
				<p>Réponse assurée dans les 48h</p>
			</div>
		</div><!-- .site-info -->
	</div>

</article><!-- #post-## -->
