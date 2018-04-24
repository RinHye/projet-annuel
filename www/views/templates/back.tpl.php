<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-ventive - Tableau de bord</title>
	<link rel="stylesheet" href="/public/css/style.css" type="text/css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<!-- header & nav petits écrans -->
			<header class="col-xs-12 col-sm-12" id="headerXS">
				<button id="btnMenu" onclick="toggleMenu()">
					Menu <img id="iconeHamburger" src="/public/icons/menu.svg" alt="icone menu hamburger">
				</button>
				<nav id="navXS" class="ferme">
					<ul>
						<li>
							<a class="
							<?php
								echo ($c == "DashboardController" && $a == "dashboardAction")
								? "active":"";?>
							" href="/dashboard/dashboard">Tableau de bord</a>
						</li>
						<li>
							Gestionnaire des événements
						</li>
						<li>
							Gestionnaire des membres
						</li>
						<li>
							Gestionnaire des mails par défaut
						</li>
						<li>
							Paramètre du compte
						</li>
						<li>
							Se déconnecter
						</li>
					</ul>
				</nav>
			</header>
			<!-- Nav grands écrans -->
			<nav class="navBack col-lg-4 col-xl-3">

				<section id="eventive">
					<h1 id="titreBackOffice">
						E-ventive
					</h1>
				</section>
				<section>
					<ul class="navBackUl">
						<li class="
						<?php 
							echo ($c == "DashboardController" && $a == "dashboardAction") ? "liActif" : "";
						?>"
						>
							<span class="divIcons">
								<img class="linkIcons" src="/public/icons/ascendant-bars-graphic.svg" alt="icone pour dashboard">
							</span>
							<a href="/dashboard/dashboard" title="Cliquez ici pour accéder au tableau de bord">Tableau de bord</a>
						</li>
						<li>
							<span class="divIcons">
								<img class="linkIcons" src="/public/icons/calendar-with-spring-binder-and-date-blocks.svg" alt="icone pour gérer les événements du site">
							</span>
							<a href="#" title="Cliquez ici pour accéder au gestionnaire d'événements">Gestionnaire événements</a>
						</li>
						<li>
							<span class="divIcons">
								<img class="linkIcons" src="/public/icons/man-user.svg" alt="icone pour gérer les droits utilisateurs">
							</span>
							<a href="#" title="Cliquez ici pour accéder au gestionnaire des membres">Gestionnaire membres</a>
						</li>
						<li>
							<span class="divIcons">
								<img class="linkIcons" src="/public/icons/close-envelope.svg" alt="icone pour gérer les mails par défaut">
							</span>
							<a href="#" title="Cliquez ici pour accéder au gestionnaire d'email par défaut">Gestionnaire emails</a>
						</li>
						<li>
							<span class="divIcons">
								<img class="linkIcons" src="/public/icons/gear-option.svg" alt="icone pour aller sur le site">
							</span>
							<a href="#" title="Cliquez ici pour accéder au site">Mon compte</a>
						</li>
						<li>
							<span class="divIcons">
								<img class="linkIcons" src="/public/icons/sign-out-option.svg" alt="icone pour aller sur le site">
							</span>
							<a href="#" title="Cliquez ici pour accéder au site">Aller sur le site</a>
						</li>

					</ul>
				</section>
			</nav>

		<?php include "views/".$this->v;?>

			</div>
			</div>
<footer id="footerBack">
		© Copyright BDE ESGI 2018 - Tous droits réservés.
	</footer>
</body>
<foot>
	<script src="/public/js/graphs.js"></script>
	<script src="/public/js/menuReduit.js"></script>
</foot>
</html>
