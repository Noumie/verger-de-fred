<?php
header('HTTP/1.1 503 Service Unavailable');
header('Retry-After: 3600');
?>

<!doctype html>
<html lang="fr">
	<head>
		<title>Le Verger de Fred | Site en Maintenance</title>
		<style>
			* { box-sizing: border-box; vertical-align: bottom;}
			body { text-align: center; padding: 150px; background-color: rgba(16,136,160,0.7); color: #ffffff;}
			header{ text-align: center; }
			header img{ width: 100%; height: auto; }
			h1 { font-size: 50px; text-align: center; }
			body { font: 20px Helvetica, sans-serif; color: white; }
			article { display: block; text-align: left; width: 650px; margin: 0 auto; }
			a { color: #ffffff; text-decoration: none; }
			a:hover { color: #333; text-decoration: none; }
			.logo-header {width: 20rem; display: block; margin: 0 auto 3rem; }
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<article>
			<header>
				<div class="logo-header">
					<img src="http://www.levergerdefred.fr/wp-content/themes/vergerdefred_2017/img/logo-verger-de-fred.png">
				</div>
				<h1>Site en maintenance</h1>
			</header>
			<div>
					<p>Le site est en cours de création et sera bientôt disponible.<br>
					Encore un peu de patience...</p>
					<p>
					Pour toute urgence, n'hésitez pas à nous contacter par email ou téléphone au : <img src="http://www.levergerdefred.fr/wp-content/themes/vergerdefred_2017/img/infos.png"></p><br>
					&mdash; Fred & Cathy</p>
			</div>
		</article>
	</body>
</html>
