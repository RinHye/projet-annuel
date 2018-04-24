
			<!-- Partie de droite -->
			<main class="col-xl-9 col-lg-8 col-sm-12 col-xs-12 containerPageBack">
				
				<!-- En-tête-->
				<div class="container-fluid">
					<header class="row" id="headerBack">
						<div class="col-xl-7 col-lg-5">
							<h1 class="titreSection">Tableau de bord</h1>
						</div>
						<div class="col-xl-5 col-lg-7">
							<span class="row">
								<img id="profilImage" src="/public/img/pikachu.jpg">
								<p id="nomProfil">Patrick ESPELETTE</p>
								<button class="btn btn-blue">Déconnexion</button>

							</span>
						</div>
					</header>
				</div>

				<!--Contenu-->
				<h1 class="titreSectionXS">Tableau de bord</h1>
				<!-- Section des stats chiffrées en rectangle version petits ecrans -->
				<span id="donneesChiffrees">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="row divDonnees" id="bleu">
									<div class="col-sm-9 col-xs-8">
										<figure>
											<img class="iconesStats" src="/public/icons/users.svg" alt="icone de la donnee chiffree">
											<figcaption>
												Participants
											</figcaption>
										</figure>
									</div>

									<div class="col-sm-3 col-xs-4">

										<p class="nbRectangle">50</p>
										<span class="row"><p>Ce mois-ci</p> <img class="fleches" src="/public/icons/arrow-down-angle.svg" alt="icone sélection de l'affichage"></span>

									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="row divDonnees" id="jaune">
									<div class="col-sm-9 col-xs-8">
										<figure>
											<img class="iconesStats" src="/public/icons/cup.svg" alt="icone de la donnee chiffree">
											<figcaption>
												Evénements organisés
											</figcaption>
										</figure>
									</div>
									<div class="col-sm-3 col-xs-4">
										<p class="nbRectangle">50</p>
										<span class="row"><p>Ce mois-ci</p> <img class="fleches" src="/public/icons/arrow-down-angle.svg" alt="icone sélection de l'affichage"></span>
									</div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="row divDonnees" id="vert">
									<div class="col-sm-9 col-xs-8">
										<figure>
											<img class="iconesStats" src="/public/icons/add-user.svg" alt="icone de la donnee chiffree">
											<figcaption>
												Nouveaux inscrits
											</figcaption>
										</figure>
									</div>

									<div class="col-sm-3 col-xs-4">
										<p class="nbRectangle">50</p>
										<span class="row"><p>Ce mois-ci</p> <img class="fleches" src="/public/icons/arrow-down-angle.svg" alt="icone sélection de l'affichage"></span>
									</div>
								</div>
							</div>
						</div>

					</div>
				</span>

				<section class="container">
					<!--Taux de rebonds -->
					<div class="row">
						<section class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
							<div id="bounceRateDiv">
								<h2 class="titresStats">Taux de rebonds</h2>

								<canvas id="bounceRate"></canvas>
							</div>
						</section>
					</div>

					<!-- Section des stats chiffrées en cercle -->
					<section class="statsCercles">

						<div class="divCercles col-lg-4">
							<div class="cercles">
								<p>50</p>
							</div>
							<h2>Participants</h2>
						</div>

						<div class="divCercles col-lg-4">
							<div class="cercles">
								<p>18</p>
							</div>
							<h2>Evenements organisés</h2>
						</div>

						<div class="divCercles col-lg-4">
							<div class="cercles">
								<p>9</p>
							</div>
							<h2>Nouveaux inscrits</h2>
						</div>
					</section>

					<section class="row">

						<div class="col-lg-offset-0 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">

							<h2 class="titresStats">Nombre d'utilisateurs par type d'appareil</h2>
							<canvas id="devicesBarChart"></canvas>
						</div>
						<div class="col-lg-offset-0 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
							<h2 class="titresStats">Nombre de connectés</h2>
							<canvas id="doubleLineChart"></canvas>
						</div>

					</section>
				</section>

			</main>
		</div>
	</div>
