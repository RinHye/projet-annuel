<h1 class="titreSectionXS">Évenement</h1>
<section>
	<a href="/event/add" title="ajout event">Ajout</a>
</section>
<section class="container">
	<div class="row">
		<?php foreach ($events as $key => $event): ?>
			<article class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="filterEvent-3">
					<aside class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<h1 >Une bière après les cours</h1>
							<time>09/12/18</time>
						</div>
						<div class="eventInscrit col-md-6 col-sm-12 col-xs-12">
							<label>Inscrits</label>
							<div>
								<span>15</span>
							</div>
						</div>

					</aside>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>