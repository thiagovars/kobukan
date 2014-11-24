<?php 
$title = "Zazen | Apenas sentar com a mente aberta";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Zazen</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Zazen</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Zazen:</strong> Uma prática zen budista</h3>
							<p class="drop-caps">Zazen (japonês: 坐禅; chinês: zuò chán (pinyin) ou tso-chan (Wade-Giles)) é a base da prática Zen Budista. O objetivo do zazen é "apenas sentar", com a mente aberta, sem apegar-se aos pensamentos que fluem livremente. Isto é feito tanto através do uso de koans, o principal método Rinzai, ou o sentar-se completamente alerta (o "apenas sentar", shikantaza), o qual é o método da escola Soto.1 O princípio do zazen é o de que uma vez que a mente esteja livre de suas diversas camadas, pode-se realizar a natureza búdica, atingindo-se a iluminação (satori).</p>
						</div>
					</div>

					<hr class="tall">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Zazen:</strong> Prática</h3>
							<p class="tall">A prática do zazen consiste basicamente em sentar-se em uma posição confortável, com a coluna ereta, em períodos de até 40 minutos, intercalados com meditação andando (Kinhin). Durante esse tempo deve-se procurar observar os pensamentos e sensações que surgem, sem buscar reprimi-los, causá-los ou julgá-los. É tradicional o uso de zafu e zabuton como almofadas, na qual o praticante fica sentado.</p>

							<p class="tall">
							Um excelente guia para a prática do zazen foi escrita pelo monge zen budista japonês Dogen no século XIII</p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<?php 
								for ($i=1; $i < 9; $i++) { 
									?>
							<li class="col-md-3 no-pin isotope-item">
								<div class="portfolio-item img-thumbnail">
									<a href="img/zazen/<?php echo 'zazen' . $i; ?>.jpg" class="thumb-info">
										<img src="img/zazen/<?php echo 'zazen' . $i; ?>.jpg" class="image-responsive" height="200" width="400">
									</a>
								</div>
							</li>
								<?php
								}
								?>
								
							
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/zazen/shodo.jpg" class="thumb-info">
										<img src="img/zazen/shodo.jpg" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/zazen/shodo2.jpg" class="thumb-info">
										<img src="img/zazen/shodo2.jpg" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/zazen/293.JPG" class="thumb-info">
										<img src="img/zazen/293.JPG" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/zazen/315.JPG" class="thumb-info">
										<img src="img/zazen/315.JPG" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li><li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/zazen/764.JPG" class="thumb-info">
										<img src="img/zazen/764.JPG" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>

						</ul>
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
