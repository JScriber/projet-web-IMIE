<!DOCTYPE html>
<html>
	<head>
		<!-- CSS files -->
		<link rel="stylesheet" href="styles/commun.css" type="text/css"/>
		<link rel="stylesheet" href="styles/general.css" type="text/css"/>
		<link rel="stylesheet" href="styles/accueil.css" type="text/css"/>
		<link rel="stylesheet" href="styles/menu.css" type="text/css"/>
		<link rel="stylesheet" href="styles/noustrouver.css" type="text/css"/>

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="styles/responsive/headerFooter.css" media="screen and (max-device-width: 770px)" type="text/css"/>
		<link rel="stylesheet" href="styles/responsive/headerFooter.css" media="screen and (max-width: 550px)" type="text/css"/>
		<link rel="stylesheet" href="styles/responsive/menu.css" type="text/css"/>
		<link rel="stylesheet" href="styles/responsive/noustrouver.css" type="text/css"/>

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="images/logo/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon/favicon-16x16.png">
		<link rel="manifest" href="images/logo/favicon/site.webmanifest">
		<link rel="mask-icon" href="images/logo/favicon/safari-pinned-tab.svg" color="#ffb500">
		<link rel="shortcut icon" href="images/logo/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#ffb500">
		<meta name="msapplication-config" content="images/logo/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffb500">


		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="scripts/slick/slick.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAekiCXUGLMd4eHEK2nxmI6mqPovkEmhIw"></script>

		<meta charset="utf-8"/>
		<title>Comme à la maison</title>
	</head>

	<body>
		<?php include('includes/connexionBDD.php'); ?>
		<?php include('includes/vecteurs.php'); ?>
		<header>
			<img src="images/logo/logo.svg" name="Logo de l'entreprise"/>
			<ul>
				<li class="highlight" data-link="ongletAccueil">Accueil</li>
				<li data-link="ongletMenu">Menu</li>
				<li data-link="ongletNousTrouver">Nous trouver</li>
			</ul>
		</header>
		<section>
			<?php
				// Chargement des pages
				include('pages/accueil.php');
				include('pages/menu.php');
				include('pages/nousTrouver.php');
			?>
		</section>
		<footer>
			<ol>
				<ul>
					<li><a href="juridique/droitsauteurs.html" target="_blank">Droits d'auteur</a></li>
					<li><a href="juridique/mentionslegales.html" target="_blank">Mentions légales</a></li>
					<li><a href="juridique/conditions.html" target="_blank">Conditions d'utilisation</a></li>
				</ul>
				<ul>
					<li><img src="images/logo/logo.svg" name="Logo de l'entreprise"/></li>
					<li>
						<svg viewBox="0 0 24 24">
		   					<use xlink:href="#IMG_PHONE"></use>
		  				</svg>
		  				02 25 25 25 25<li>
					<li>
						<svg viewBox="0 0 24 24">
		   					<use xlink:href="#IMG_MAIL"></use>
		  				</svg>
		  				commealamaison@gmail.com
		  			</li>
				</ul>
			</ol>
			<p>Développé par <a target="_blank" href="anteo.html">Antéo</a>.</p>
		</footer>
	</body>

	<!-- JS files -->
	<script type="text/javascript" src="scripts/main.js"></script>
	<script type="text/javascript" src="scripts/noustrouver.js"></script>

</html>