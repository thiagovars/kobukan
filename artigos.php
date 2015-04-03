<?php 
$title = "Artigos | Documentos";
include_once('header.php');
?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Artigos</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Artigos</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<?php 
					$artigo = $_REQUEST['art'];

					switch ($artigo) {
						case '7virtudes':
							include_once('7virtudes.php');
							echo '<hr class="tall">';
							break;

						case 'giri':
							include_once('giri.php');
							echo '<hr class="tall">';
							break;

						case 'espiritismo':
							include_once('espiritismo.php');
							echo '<hr class="tall">';
							break;
							
						default:
							?>
							<div class="row">
								<div class="col-md-12" data-appear-animation="fadeInUp">
									<h3><strong>Artigo:</strong> As 7 virtudes do samurai na prática do aikido</h3>
		              <p class="drop-caps">Um dos motivos que diferenciam o Aikido das demais artes marciais é o fato de
		              manter as tradições de etiqueta da antiga cultura marcial. O Aikido enquanto Budô, e 
		              não luta esportiva, busca algo mais para os praticantes do que uma medalha ou troféu. 
		              Esta busca pela evolução dos aikidoístas é pautada pelo antigo código de conduta dos 
		              Samurais, também conhecido como Bushido.</p>
		              <a href="<?php echo $_SERVER['PHP_SELF'].'?art=7virtudes'; ?>">... Continuar lendo.</a>
								</div>
							</div>
							<hr class="tall">
							<div class="row">
								<div class="col-md-12" data-appear-animation="fadeInUp">
									<h3><strong>Giri:</strong> A arte da gratidão</h3>
		              <p class="tall">A pós-modernidade teve, como uma de suas características marcantes, na esfera
		              comportamental, o estímulo à competitividade e ao individualismo. Os resultados não nos 
		              fizeram necessariamente uma sociedade mais feliz e realizada. Em contraposição, novos 
		              paradigmas nos convidam a uma revisão de valores e nos levam a perceber que estamos 
		              inseridos em uma teia de relações, onde cada ação pontual pode gerar impactos em uma escala 
		              maior, cujos limites não podemos precisar.</p>
		              <a href="<?php echo $_SERVER['PHP_SELF'].'?art=giri'; ?>">... Continuar lendo.</a>
								</div>
							</div>
							<hr class="tall">
							<div class="row">
								<div class="col-md-12" data-appear-animation="fadeInUp">
									<h3><strong>Aikido e o Espiritismo:</strong> Qual a relação?</h3>
		              <p class="tall">Ueshiba concebeu o Aikido a partir da suas experiências com dezenas de artes marciais, mas principalmente 
							    baseando-se no estilo daito-ryu aiki-jujutsu, do qual um dos principais expoentes foi Sokaku Takeda, ao qual incorporou 
							    técnicas do kenjutsu (técnicas da espada) e do jojutsu (técnicas do bastão curto).</p>

							      <p class="tall">Um importante atributo do Aikido é seu apego ao desenvolvimento espiritual.</p>

							      <p class="tall">Na segunda metade da década de 1920, retornando à terra natal, Ueshiba conheceu e foi profundamente 
							    influenciado por Onisaburo Deguchi, líder espiritual da religião Oomoto (uma espécie de movimento neo-xintoísta) em Ayabe³.</p>
		              <a href="<?php echo $_SERVER['PHP_SELF'].'?art=espiritismo'; ?>">... Continuar lendo.</a>
								</div>
							</div>
							<?php
							break;
					}

					?>

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
