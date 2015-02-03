<?php 
$title = "Jodo | A arma da paz";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Jodo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Jodo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Jodo:</strong> A Arte do Bastão Samurai</h3>
							
							<p class="drop-caps">Jô é um bastão de madeira roliça de 1,28 m que foi desenvolvido para enfrentar a espada japonesa. 
							Foi a alternativa encontrada pelos Samurais para não cortar e matar os adversários, por isso é conhecido como <strong>a arma da paz</strong>. 
							Também por isso foi muito utilizada por monges que a usavam como uma espécie de bengala, e com ela se defendiam dos bandidos sem precisar matá-los.</p>

							<p class="tall">No treinamento do Jô ambas as extremidades são usadas, quer para segurar, quer para golpear: 
							enquanto uma mão tem yin, a outra terá yang, trabalhando ambas em harmonia.</p>

							<p class="tall">O treino com o Jô (pronuncia-se Diô) permite o desenvolvimento da harmonia entre o praticante e a arma de modo que 
							essa se torne uma extensão do corpo do praticante. Graças a comunhão ente o ser humano e a espada que aprende-se a 
							canalizar e projetar a energia conhecida como ki, através da arma para além do nosso corpo.</p>

							<p class="tall">É uma arma simples que possui nobre história e extrema complexidade técnica. Desenvolve a intuição 
							pois age flexivelmente sabendo evitar os diversos tipos de ataques. Os lutadores mudam frequentemente de base 
							(lado de ataque do bastão) para ganhar maior versatilidade na luta.</p>



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
															<img class="img-responsive" alt="" src="img/team/angelica.jpg">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Angélica Philippe</span>
																<span class="thumb-info-type">1°Kyu (Marrom)</span>
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
															<img class="img-responsive" alt="" src="img/team/eduardoJodo.jpg">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Eduardo Corrêa</span>
																<span class="thumb-info-type">1° Kyu (Marrom)</span>
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


							<hr class="tall">

							<div class="row">
								<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
									
									<?php 

									for ($i=1; $i < 14; $i++) { 
										
									?>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="img/jodo/jodo<?php echo $i;?>.jpg" class="thumb-info">
												<img src="img/jodo/jodo<?php echo $i;?>.jpg" class="image-responsive" height="200">
											</a>
										</div>
									</li>
									<?php
									}
									?>
									<!-- 
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/aikijo/ch02-04.jpg" class="thumb-info">
												<img src="img/aikijo/ch02-04.jpg" class="image-responsive"  height="200">
											</a>
										</div>
									</li>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/aikijo/ueshiba_aikijo.jpg" class="thumb-info">
												<img src="img/aikijo/ueshiba_aikijo.jpg" class="image-responsive"  height="200">
											</a>
										</div>
									</li>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/aikijo/2004-07-02.jpg" class="thumb-info">
												<img src="img/aikijo/2004-07-02.jpg" class="image-responsive"  height="200">
											</a>
										</div>
									</li>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="img/aikijo/Jo.jpg" class="thumb-info">
												<img src="img/aikijo/Jo.jpg" class="image-responsive"  height="200">
											</a>
										</div>
									</li> -->

								</ul>
							</div>


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
