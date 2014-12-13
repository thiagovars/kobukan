<?php 
$title = 'Dojo Capivari de baixo | Rua João Goulart, 610, centro - Capivari de Baixo - SC';
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a></li>
									<li class="active">capivari Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>capivari Dojo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-4">

							<div id="google-dojo" class="google-map"></div>

						</div>
						
							<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<li class="col-md-4	 no-pin isotope-item">
									<div class="portfolio-item img">
										<a href="img/capivari/fachada.jpg" class="thumb-info">
											<img src="img/capivari/fachada.jpg" class="100Width image-responsive" height="365">
										</a>
									</div>
								</li>
							</ul>

						<div class="col-md-4">

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
											Terça
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Samuel
										</td>
									</tr>
									<tr>
										<td>
											Quinta
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Samuel
										</td>
									</tr>
									<tr>
										<td>
											Sábado
										</td>
										<td>
											18h30
										</td>
										<td>
											Samuel
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>

					<hr class="tall" />

					<div class="row center">
						
						<ul class="team-list sort-destination" data-sort-id="team">
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="img/team/samuel.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Samuel</span>
											<span class="thumb-info-type">Shodan (1º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Samuel de Souza Medeiros</p>
									</span>
								</div>
							</li>
						</ul>
					
					</div>

				</div>

				<section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/capivari/dojo.jpg);">
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
										<a href="img/capivari/imagem8.jpg" class="thumb-info">
											<img src="img/capivari/imagem8.jpg" class="image-responsive" height="200" width="400">
										</a>
									</div>
								</li>
								<li class="col-md-3 no-pin">
									<div class="img-thumbnail">
										<a href="img/capivari/dojo.jpg" class="thumb-info">
											<img src="img/capivari/dojo.jpg" class="image-responsive"  height="200" width="400">
										</a>
									</div>
								</li>
								<?php for ($i=1; $i < 19; $i++) { 
								?>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/capivari/imagem<?=$i;?>.jpg" class="thumb-info">
												<img src="img/capivari/imagem<?=$i;?>.jpg" class="image-responsive"  height="200" width="400">
											</a>
										</div>
									</li>
									<?								
								} ?>
							</ul>
						</div> 						

					</div>

				</div>

			</div>

			<footer id="footer">
				
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<p>© Copyright 2014. Todos direitos reservados.</p>
							</div>
						</div>
					</div>
				</div>
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
				address: "R. João Goulart, 610, Capivari de Baixo - SC",
				html: "<strong>Dojo Kobukan Capivari de Baixo</strong><br>R. João Goulart, 610, Capivari de Baixo - SC",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = -28.440777;
			var initLongitude =  -48.952442;

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
