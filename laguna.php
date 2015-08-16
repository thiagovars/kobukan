<?php 
$title = 'Dojo Laguna | R. Getúlio Vargas, 57, Laguna - Santa Catarina';
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Laguna Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Laguna Dojo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-4">

							<div id="google-dojo" class="google-map"></div>

						</div>

						<div class="col-md-8">

							<h2 class="shorter">Horários para <strong>Treino</strong></h2>

							<hr class="tall">

							<table class="table table-striped">
								<thead>
									<tr>
										<th>Dia</th>
										<th>Hora</th>
										<th>Instrutor</th>
									</tr>									
								</thead>
								<tbody>
									<tr>
										<td>
											Segunda
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
									<tr>
										<td>
											Quarta
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
									<tr>
										<td>
											Sexta
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
									<tr>
										<td>
											Sábado
										</td>
										<td>
											16h - 17h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>

					<hr class="tall" />

					<div class="row">
						<h4><strong>Responsável</strong></h4>
						<ul class="team-list sort-destination" data-sort-id="team">
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="img/team/vinicius.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Vinicius</span>
											<span class="thumb-info-type">1º Kyu (Marrom)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Vinicius Algarve</p>
									</span>
								</div>
							</li>							
						</ul>

					</div>

				</div>

				<section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/laguna/dojo.jpg);">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">

								<div style="height: 150px;"></div>

							</div>
						</div>
					</div>
				</section>
				<div class="container">

					<div class="row">

						<div class="col-md-12">
							<h3 class="short"><strong>Fotos</strong></h3>
						</div>

						<div class="row">
								<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="img/laguna/laguna.jpg" class="thumb-info">
												<img src="img/laguna/laguna.jpg" class="image-responsive" height="200" width="400">
											</a>
										</div>
									</li>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/laguna/laguna2.jpg" class="thumb-info">
												<img src="img/laguna/laguna2.jpg" class="image-responsive"  height="200" width="400">
											</a>
										</div>
									</li>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/laguna/laguna3.jpg" class="thumb-info">
												<img src="img/laguna/laguna3.jpg" class="image-responsive"  height="200" width="400">
											</a>
										</div>
									</li>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/laguna/laguna4.jpg" class="thumb-info">
												<img src="img/laguna/laguna4.jpg" class="image-responsive"  height="200" width="400">
											</a>
										</div>
									</li>								
								</ul>
							</div>						

					</div>

				</div>

			</div>

			<footer id="footer">
				<?php include('footer.php'); ?>
			</footer>
		</div>

		<!-- Libs -->
		<script src="vendor/jquery.js"></script>
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.easing.js"></script>
		<script src="vendor/jquery.cookie.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/jquery.validate.js"></script>
		<script src="vendor/jquery.stellar.js"></script>
		<script src="vendor/jquery.knob.js"></script>
		<script src="vendor/jquery.gmap.js"></script>
		<script src="vendor/twitterjs/twitter.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owl-carousel/owl.carousel.js"></script>
		<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="vendor/magnific-popup/magnific-popup.js"></script>
		<script src="vendor/mediaelement/mediaelement-and-player.js"></script>
		
		<!-- Theme Initializer -->
		<script src="js/theme.plugins.js"></script>
		<script src="js/theme.js"></script>
		
		<!-- Custom JS -->
		<script src="js/custom.js"></script>

		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "R. Getúlio Vargas, 57, Lagnuna - Santa Catarina",
				html: "<strong>Dojo Kobukan</strong><br>R. Getúlio Vargas, 57, Laguna, Santa Catarina",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = -27.301244;
			var initLongitude =  -49.793400;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: false,
					zoomControl: true,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: true,
					disableDefaultUI: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#google-dojo").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#google-dojo").gMap("centerAt", options);
			}

		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

	</body>
</html>
