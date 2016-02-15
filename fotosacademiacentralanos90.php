<?php 
$title = 'Fotos academia central anos 90';
include_once('header.php');
?>

      <div role="main" class="main">

        <section class="page-top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active"><a href="fotos.html">Fotos</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2>Fotos dos anos 90 - Academia central</h2>
              </div>
            </div>
          </div>
        </section>

        <div class="container">

          <strong class="tall"><a href="fotos.php">< Fotos </a></strong>

          <hr />

          <div class="row">
            <ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
              <?php
              require_once 'urls_fotos.php';
              for($i = 1; 62 > $i; $i++){
                $foto = str_pad($i, 2, 0, STR_PAD_RIGHT);
                ?>
              <li class="col-md-3 no-pin">
                <div class="portfolio-item img-thumbnail">
                  <a href="img/anos90/<?php echo $foto;?>.jpg" class="thumb-info">
                    <img alt="" class="img-responsive" src="img/anos90/<?php echo $foto;?>.jpg">
                  </a>
                </div>
              </li>
              <?
              }
              ?>

            </ul>
          </div>

        </div>

      </div>

      <footer id="footer">
        <?php include('footer.php') ?>        
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
