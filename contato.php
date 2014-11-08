<?php 
$title = "Contato | Kobukan - escola de budo";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top" style="margin-bottom: 0px;">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Contato</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Contato</h2>
							</div>
						</div>
					</div>
				</section>

				<section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slides/geral.jpg); margin-top: 0px; margin-bottom: 20px;">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">

								<div style="height: 350px;"></div>

							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Domo arigatou!</strong> Sua mensagem foi enviada com sucesso.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Sumimasen!</strong> Algo fugiu ao controle, não conseguimos enviar a mensagem. Tente novamente.
							</div>

							<h2 class="short">Entre em <strong>contato</strong></h2>
							<form id="contactForm" action="php/contato-form.php" method="POST">
								<input type='hidden' name='enviar' value=true />
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nome *</label>
											<input type="text" value="" data-msg-required="Por favor, digite seu nome" maxlength="100" class="form-control" name="name" id="name">
										</div>
										<div class="col-md-6">
											<label>E-mail *</label>
											<input type="email" value="" data-msg-required="Por favor, digite seu e-mail" data-msg-email="Digite um e-mail válido!" maxlength="100" class="form-control" name="email" id="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Assunto</label>
											<input type="text" value="" data-msg-required="Sobre qual assunto você quer falar?" maxlength="100" class="form-control" name="subject" id="subject">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Menssagem *</label>
											<textarea maxlength="5000" data-msg-required="Escreva sua mensagem" rows="10" class="form-control" name="message" id="message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" name="enviar" value="Enviar mensagem" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<h4 class="push-top">Entre em <strong>contato</strong></h4>
							<p>Se você quer começar a treinar nos envie uma mensagem com suas dúvidas, estaremos a disposição para te auxiliar.</p>

							<hr />

							<h4><strong>E-mail</strong></h4>
							<ul class="list-unstyled">
								<li><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:contato@kobukan.com.br">contato@kobukan.com.br</a></li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			<section class="call-to-action featured footer">
				<div class="container">
					<div class="row">
						<div class="center">
							<h3>A <strong>Kobukan</strong> é a escola de <strong>budô</strong> que mais cresce no sul do país!</h3>
						</div>
					</div>
				</div>
			</section>

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

		<!-- Current Page JS -->
		<script src="js/views/view.contact.js"></script>
		
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
