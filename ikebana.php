<?php
$title = "Ikebana | A arte dos arranjos florais";
include_once('header.php');
 ?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Ikebana</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Ikebana</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					
					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Ikebana:</strong> A Arte dos arranjos florais</h3>
							<p class="drop-caps">A iquebana é originária da Índia, onde os arranjos eram destinados a Buda, e se personalizou na cultura nipônica, que a tornou mais conhecida. Em contraste com a forma decorativa de arranjos florais que prevalece nos países ocidentais, o arranjo floral japonês cria uma harmonia de construção linear, ritmo e cor. Enquanto que os ocidentais tendem a pôr ênfase na quantidade e no colorido das cores, dedicando a maior parte da sua atenção à beleza das corolas, os japoneses enfatizam os aspectos lineares do arranjo. A arte foi desenvolvida de modo a incluir o vaso, caules, folhas e ramos, além das flores. A estrutura de um arranjo floral japonês está baseada em três pontos principais que simbolizam o céu, a terra e a humanidade, embora outras estruturas sejam adaptadas em função do estilo e da escola. Dentre os mais diversos estilos de iquebana, destaca-se a Academia de Ikebana Sanguetsu. Esse estilo busca representar uma forma de se chegar ao equilíbrio, à simplicidade e à beleza. O sanguetsu, que tem, como princípio básico, o sentimento de respeito à natureza que norteou a vida de Mokiti Okada, cria composições capazes de refletir a beleza natural das flores em sua forma mais pura, levando alegria e paz às pessoas que apreciam os arranjos.</p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
							
							<?php 
							for ($i=1; $i < 20; $i++) { 
								?>
								<li class="col-md-3 no-pin isotope-item">
									<div class="portfolio-item img-thumbnail">
										<a href="img/ikebana/<?php echo 'ikebana' . $i; ?>.JPG" class="thumb-info">
											<img src="img/ikebana/<?php echo 'ikebana' . $i; ?>.JPG" class="image-responsive" height="200" width="400">
										</a>
									</div>
								</li>
							<?php
							}
							?>

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
