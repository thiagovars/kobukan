<?php 
$title = "Vídeos | A história do dojo em Vídeos";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Vídeos</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Vídeos</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2>Vídeos Kobukan</h2>

					<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
						<li data-option-value="*" class="active"><a href="#">Mostrar todos</a></li>
						<li data-option-value=".aikido50anos"><a href="#">50 Anos Aikido</a></li>
						<li data-option-value=".koshukai"><a href="#">koshukai</a></li>
					</ul>

					<hr />

					<div class="row">
						<ul class="portfolio-list sort-destination" data-sort-id="portfolio" data-plugin-options='{"delegate": "a", "type": "vídeo", "gallery": {"enabled": true}}'>
							
							<li class="col-md-3 isotope-item aikido50anos">
								<div class="portfolio-item img-thumbnail">
									<a href="50-anos-aikido.php" class="thumb-info">
										<img alt="" class="img-responsive" src="video/img/50anos-aikido.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">50 Anos Aikido</span>
											<span class="thumb-info-type">São Paulo - SP</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="icon icon-video"></i></span>
										</span>
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
