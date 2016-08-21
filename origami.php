<?php 
$title = "Origami | Ori (dobrar) gami (papel)";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Origami</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Origami</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Origami:</strong> Ori (dobrar) gami (papel)</h3>
							<p class="drop-caps">
								Arte japonesa baseada na execução de dobraduras e união de pequenas peças de papel transformando-as em verdadeiras obras de arte.
						  </p>
						  <p class="drop-caps">
						  	No início do século XVII os samurais foram responsáveis pela criação dos primeiros origamis que conhecemos atualmente. Até o início do século XIX o origami foi praticado como passatempo restrito aos adultos. A partir do período meiji (1868-1912) a arte começou a ser ensinada nas escolas e também passou a ser difundida em países estrangeiros.
						  </p>
						  <p class="drop-caps">
						  	Hoje o origami é uma das mais populares expressões artísticas da cultura japonesa no mundo inteiro. Coloridos e graciosos que estimulam a curiosidade de saber o grau de dificuldade para sua elaboração, utilizado também como decoração de casamentos e materniadades, e também como lembrancinha ou presentes.
						  </p>
						  <p class="drop-caps">
						  	Recurso pedagógico, origami é utilizado em escolas pois estimulam:
						  	<ul>
						  		<li>Motricidade fina (coordenação de mãos e dedos);</li>
						  		<li>Memória visual, estimulando a memorização das sequencias das dobras;</li>
						  		<li>Criatividade;</li>
						  		<li>Concentração;</li>
						  		<li>Noções básicas de medidas;</li>
						  		<li>Perseverança;</li>
						  	</ul>
						  </p>
						  <p class="drop-caps">
						  	Recurso terapeutico:
						  		O origami é um autêntico exercício de serenidade ajudando no combate ao estresse, pois predispõe a calma. É utilizado também em hospitais nos paciêntes que estão internados para evitar depressão.
						  </p>
						  <p class="drop-caps">
						  	A sensei Angélica Correa é discipula da Akiko Kawashima que leciona cultura japonesa na rede municipal da cidade de Ivoti-RS.
						  </p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
					<?php 
					for ($i=1; $i <= 6; $i++) {
					 ?>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/origami/origami<?php echo $i; ?>.jpg" class="thumb-info">
										<img src="img/origami/origami<?php echo $i; ?>.jpg" class="image-responsive"  height="200" width="400">
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
