<?php 
$title = "Naginata | Espada lança";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Naginata</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Naginata</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Naginata:</strong> Espada lança</h3>
							
							<p class="drop-caps">
								Arma que consiste de uma lâmina de Katana (espada) com um longo pino inseridomnum Cabo de lança com aproximadamente 2,25 m. Os primeiros a usarem essas armas foram os monges guerreiros sonhei, ou yamabushis, a fim de assegurar a proteção dos santuários. O mais célebre foi o monge Benkei. Nos campos de batalha a os guerreiros a usavam para cortar as pernas dos cavalos e a cavalaria para cortar o inimigo de longe. Por ser muito grande e difícil de transportar para as batalhas passou a ser utilizada pelas mulheres samurais como defesa da casa. Sensei Eduardo Corrêae Angelica Djenane são discípulos da Sensei Yasue Morita , 4 Dan, e atualmente são responsáveis pelo grupo de estudos no RS e SC.
							</p>
							<p class="drop-caps">
								Aconteceu no dia 25 de Novembro de 2017, Seminário de Naginata com exame de graduação. Angelica e Eduardo foram aprovados para 3º kyu.
							</p>

							<hr class="tall">

							<div class="row">
								<div class="col-md-12" data-appear-animation="fadeInDown">

									<!-- <div class="row">
										<div class="col-md-3">
											<h4><strong>Responsável Técnico</strong></h4>
										</div>
										<div class="col-md-3">
											<h4><strong>Instrutor</strong></h4>
										</div>
									</div> -->
								<div class="row">
											<ul class="team-list sort-destination" data-sort-id="team">
												
												<li class="col-md-3 isotope-item leadership">
													<div class="team-item thumbnail">
														<span class="thumb-info team">
															<img class="img-responsive" alt="" src="img/team/angelica.jpg">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Angélica Philippe</span>
																<span class="thumb-info-type">3º kyu</span>
															</span>
														</span>
													</div>
												</li>							
												
												<li class="col-md-3 isotope-item leadership">
													<div class="team-item thumbnail">
														<span class="thumb-info team">
															<img class="img-responsive" alt="" src="img/team/eduardoNaginata.jpg">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Eduardo Corrêa</span>
																<span class="thumb-info-type">3º kyu</span>
															</span>
														</span>
													</div>
												</li>							

											</ul>

									</div>
								</div>
							</div>


							<hr class="tall">

							<div class="row">
								<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
									
									<?php
									$ignore = array();
									for ($i=1; $i <= 16; $i++) {
										if (in_array($i, $ignore)) {
											continue;
										}
									?>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="img/naginata/naginata<?php echo $i;?>.jpg" class="thumb-info">
												<img src="img/naginata/naginata<?php echo $i;?>.jpg" class="image-responsive" height="200">
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
