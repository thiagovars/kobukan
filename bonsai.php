<?php 
$title = "Bonsai | A Natureza em Miniatura";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Bonsai</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Bonsai</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Bonsai:</strong> A natureza em miniatura</h3>
							<p class="drop-caps">
								Embora o nome bonsai seja de origem japonesa, foi na China que a arte foi criada com o nome de pun-sai durante a 
								dinastia ch´in (246aC - 207aC). Hoje na China é muito comum o uso do Bonsai com paisagens em miniatura, arte denominada 
								Peijin.
						  </p>
							<p class="drop-caps">
								Os monges budistas foram os primeiros a transportar para a habilidade humana a arte do bonsai. A partir daí, com forte 
								influência Zen, que os japoneses desenvolveram o bonsai ao longo de certas regras. Em determinados períodos foi privilégio 
								de poucos como a nobreza, imperadores e samurais graduados. Os samurais praticavam o bonsaismo para amenizar o lado 
								guerreiro e feroz do seu ofício.
								O bonsai transmite o ideal budista de não pensar no passado e nem no futuro, mas no presente, no que se está fazendo no 
								momento (mente atenta). O objetivo é vivenciar o agora, concentrar-se integralmente no trato do bonsai, e ao mesmo tempo 
								observando o todo.
						  </p>
							<p class="drop-caps">
								Rezam as escrituras japonesas que o bonsai carrega em si significados próprios. Uma vez escolhido, o bonsai deverá seguir 
								seu dono por toda uma vida, como um companheiro silencioso para lembrar que a vida está ali presente. Nas famílias japonesas 
								é comum um bonsai atravessar gerações. Dizem que um bonsai é iniciado pelo avô, cujo pai continuará o treinamento para ser 
								apreciado pelo neto. Um bonsai só deve ser presenteado a pessoas responsáveis e virtuosas.
								O bonsai deve transmitir a sensação de equilíbrio, harmonia e da naturalidade ao ambiente. A concentração exigida pelo trabalho 
								consciente com o bonsai, afasta por um tempo suas preocupações com outros problemas que muitas vezes se resolverão naturalmente,
								 com seu trabalho e seu cuidado, sem angústias porem.
								Muitas vezes ao final de uma sessão de trabalho com o bonsai aflora na mente soluções para outros problemas gerados pelo 
								subconsciente, enquanto o consciente estava ocupado.
						  </p>
							<p class="drop-caps">
								A história do bonsai no Brasil começa em 1908 com a chegada dos primeiros imigrantes japoneses a bordo do “Kasato Maru” que 
								atracou no porto de Santos. Os primeiros japoneses em solo brasileiro iniciaram a arte como forma de preservar a cultura e 
								diminuir a saudade da terra natal.
						  </p>
							<p class="drop-caps">
								Na Kobukan o cultivo do Bonsai é praticado pelos Sensei Eduardo Corrêa e Angélica Corrêa, Manoel Valim (Ivoti) com parceria 
								do instrutor de Jiu Jitsu Clayton Maciel (Araranguá) que participaram do curso da Ideal Bonsai em Novo Hamburgo e possuem os 
								exemplares dessa página. Sensei Thiago Silveira (Kobukan Porto Alegre) também desenvolve a técnica tendo cursado na Viva Bonsai, de Porto Alegre/RS. 
						  </p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
					<?php 
					for ($i=1; $i <= 18; $i++) {
					 ?>
							<li class="col-md-3 no-pin">
								<div class="img-thumbnail">
									<a href="img/bonsai/<?php echo $i; ?>.jpg" class="thumb-info">
										<img src="img/bonsai/<?php echo $i; ?>.jpg" class="image-responsive"  height="200" width="400">
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
