<?php 
$title = "Sumi-ê | Pintura em carvão";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Sumi-ê</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Sumi-ê</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Sumi-ê:</strong> A Arte do Essencial</h3>
							<p class="drop-caps">
							Originário da China, o Sumi-ê  (ou Sumie) foi conduzido 
							ao Japão no século XIII por monges Zen budistas. Seu termo 
							deriva de  Sumi (tinta preta) e ê (desenho, pintura): pintura 
							em tinta preta. Muito mais como um caminho para paz espiritual 
							do que propriamente uma representação artística, o pintor deve 
							buscar atingir a simplicidade em sua representação monocromática.
							  Comparável ao movimento da espada, a pena (pincel), não permite 
							retoques ou correções: seus movimentos devem ser ágeis e objetivos. 
							</p>
							<p class="drop-caps">
						  Antigamente os Samurais buscavam praticar o Zen e o Sumi-ê como 
						  formas de desenvolver a concentração, precisão e equilíbrio e com 
						  isso aprimorar o seu desempenho com o manejo da espada. Hoje a técnica 
						  é praticada por executivos ou líderes para desenvolver os mesmos 
						  potenciais, buscando com isso atingir a um melhor desempenho em suas 
						  decisões e maior eficácia em suas ações.  O pintor de Sumi-ê  não se 
						  propõe a uma retração realista, mas sim refletir o essencial de cada 
						  representação captada pela observação atenta do objeto. A assimetria, 
						  singeleza, naturalidade, profundidade, desapego, concentração, quietude 
						  e serenidade são algumas de suas características.</p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
					<?php 
					for ($i=1; $i < 27; $i++) { 
						$foto = str_pad($i, 3, 0, STR_PAD_LEFT);
					 ?>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/sumie/<?php echo $foto; ?>.jpg" class="thumb-info">
										<img src="img/sumie/<?php echo $foto; ?>.jpg" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
						
					<?php 
					}
					 ?>

						<!-- 	<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/sumie/shodo2.jpg" class="thumb-info">
										<img src="img/sumie/shodo2.jpg" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/sumie/293.JPG" class="thumb-info">
										<img src="img/sumie/293.JPG" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/sumie/315.JPG" class="thumb-info">
										<img src="img/sumie/315.JPG" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/sumie/764.jpg" class="thumb-info">
										<img src="img/sumie/764.jpg" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/sumie/002.jpg" class="thumb-info">
										<img src="img/sumie/002.jpg" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/sumie/005.jpg" class="thumb-info">
										<img src="img/sumie/005.jpg" class="image-responsive"  height="200" width="400">
									</a>
								</div>
							</li> -->

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
