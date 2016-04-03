<?php 
$title = "Iaido | Arte Marcial Japonesa do Desembainhar da Espada";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Iaido</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Iaido</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Iaido:</strong> A Arte Marcial Japonesa do Desembainhar da Espada.</h3>
							<img src='img/iaido/whitetb.jpg' class='image-responsive' align='right' />
							<p class="drop-caps">Iaido é a arte marcial japonesa do desembainhar da espada. Consiste em conjuntos de Katas, técnicas ou movimentos que 
							permitem ao praticante reagir de forma apropriada a determinadas situações de luta contra um ou mais inimigos.  A prática é feita 
							visualizando-se os inimigos de acordo com os princípios de cada kata, não tendo necessariamente um oponente físico.  Em comum, todos os 
							kata seguem a mesma estrutura básica de quatro movimentos:</p>
							<p class='tall'>
								Nukitsuke (desembainhar e cortar),
							</p>
							<p class='tall'>
								Kirioroshi (corte principal com o uso das duas mãos),
							</p>
							<p class='tall'>
								Chiburi (retirada do sangue da lâmina) e
							</p>
							<p class='tall'>
								Noto (embainhar a espada). 
							</p>
							<p class='tall'>
								Por ser praticado sem a presença física de um parceiro, o estudo de iaido enfatiza a precisão e fluidez do movimento aliado a um estado 
								mental focado e sereno.
							</p>
							<p class='tall'>
							A prática de iaido é regulamentada em conjunto com o kendo e jodo pela Confederação Brasileira de Kendo (CBK), filiada a Federação Internacional 
							de Kendo (FIK). Graduações de iaido obtidas em exames oficiais da CBK tem validade aceita por todas associações membros da CBK assim como federações 
							de outros paises filiadas a FIK.</p>

							<p class='tall'>
							Em porto alegre é possível treinar iaido com o Senpai Mathaeus Silveira(foto) na <a href="https://www.facebook.com/AKIPA.RS" target="_blank">AKIPA - Associação de Kendo e Iaido
							de porto alegre.</a></p>
							
					<hr class="tall">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInDown">

							<div class="row">
								<div class="col-md-3">
									<h4><strong>Responsável Técnico</strong></h4>
								</div>
								<div class="col-md-3">
									<h4><strong>Instrutor</strong></h4>
								</div>
						</div>
						<div class="row">
									<ul class="team-list sort-destination" data-sort-id="team">
										
										<li class="col-md-3 isotope-item leadership">
											<div class="team-item thumbnail">
												<span class="thumb-info team">
													<img class="img-responsive" alt="" src="img/team/mathaeus.jpg">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Mathaeus Silveira</span>
														<span class="thumb-info-type">Nidan (2º Dan)</span>
													</span>
												</span>
												<!-- <span class="thumb-info-caption">
													<p>Mathaeus Silveira</p>
												</span> -->
											</div>
										</li>							
										
										<li class="col-md-3 isotope-item leadership">
											<div class="team-item thumbnail">
												<span class="thumb-info team">
													<img class="img-responsive" alt="" src="img/team/eduardo_iaido.jpg">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Eduardo Corrêa</span>
														<span class="thumb-info-type">Shodan (1º Dan)</span>
													</span>
												</span>
												<!-- <span class="thumb-info-caption">
													<p>Eduardo Corrêa</p>
												</span> -->
											</div>
										</li>							

									</ul>

							</div>
						</div>
					</div>
							
						</div>						
					</div>

					<hr class="tall">

					<div class="row">
								<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
									
								<?php 
								for ($i=1; $i < 14; $i++) { 
								?>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="img/iaido/iaido<?=$i;?>.jpg" class="thumb-info">
												<img src="img/iaido/iaido<?=$i;?>.jpg" class="image-responsive" height="200" width="400">
											</a>
										</div>
									</li>
								<?php
								}
								?>
								</ul>
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
