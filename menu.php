<?php 
// esses nomes de página dizem qual é o menu ativo no menu superior. 
// toda nova página deve ser inserida no array de sua respectiva área.
$area = explode('.', $PHP_SELF);
$area = explode(DIRECTORY_SEPARATOR, $area[0]);
$area = $area[1];

$aikido          = array('mestres', 'aikido');
$dojos           = array('capivari', 'criciuma', 'farroupilha', 'garopaba', 'gramado', 'icara', 'imarui', 'ivoti', 'laguna', 'petropolis', 'portoalegre', 'tubarao');
$glossario       = array('glossario', 'tecnicas');
$culturaOriental = array('fengshui', 'ikebana', 'sumie', 'CulturaOriental', 'chanoyu', 'bonsai', 'shodo');
$acupuntura      = array('acupuntura', 'shiatsu');

$aikido          = (in_array($area, $aikido))          ? 'active' : '';
$dojo            = (in_array($area, $dojos))           ? 'active' : '';
$iaido           = ($area == 'iaido')                  ? 'active' : '';
$jodo            = ($area == 'jodo')                   ? 'active' : '';
$fotos           = ($area == 'fotos')                  ? 'active' : '';
$glossario       = (in_array($area, $glossario))       ? 'active' : '';
$culturaOriental = (in_array($area, $culturaOriental)) ? 'active' : '';
$contato         = ($area == 'contato')                ? 'active' : '';
$artigos         = ($area == 'artigos')                ? 'active' : '';
$acupuntura      = (in_array($area, $acupuntura))      ? 'active' : '';
 ?>
<div class="container">
          <h1 class="logo">
            <a href="index.php">
              <img alt="Kobukan" width="190" height="150" data-sticky-width="82" data-sticky-height="70" src="img/logo.jpg">
            </a>
          </h1>
          <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="icon icon-bars"></i>
          </button>
          
        </div>
        <div class="navbar-collapse nav-main-collapse collapse">
          <div class="container">
            
            <nav class="nav-main mega-menu">
              <ul class="nav nav-pills nav-main" id="mainMenu">
                
                <li class="dropdown <?php echo $aikido; ?>">
                  <a class="dropdown-toggle" href="#">
                    Aikido
                    <i class="icon icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="aikido.php"               >Sobre Aikido</a></li>
                    <li><a href="mestres.php#Osensei"      >O'Sensei</a></li>
                    <li><a href="mestres.php#Kawaisensei"  >Kawai Shihan</a></li>
                    <li><a href="mestres.php#Eduardosensei">Eduardo Sensei</a></li>
                  </ul>
                </li>
                <li class="dropdown <?php echo $dojo; ?>">
                  <a class="dropdown-toggle" href="#">
                    Dojos
                    <i class="icon icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="bento.php"      >Bento Gonçalves</a></li>
                    <li><a href="capivari.php"   >Capivari de baixo</a></li>
                    <!-- <li><a href="canela.php"     >Canela</a></li> -->
                    <li><a href="criciuma.php"   >Criciúma</a></li>
                    <li><a href="farroupilha.php">Farroupilha</a></li>
                    <li><a href="garopaba.php"    >Gramado</a></li>
                    <li><a href="gramado.php"    >Gramado</a></li>
                    <li><a href="icara.php"      >Içara</a></li>
                    <li><a href="imarui.php"     >Imarui</a></li>
                    <li><a href="ivoti.php"      >Ivoti</a></li>
                    <li><a href="laguna.php"     >Laguna</a></li>
                    <li><a href="petropolis.php" >Nova Petrópolis</a></li>
                    <li><a href="portoalegre.php">Porto Alegre</a></li>
                    <li><a href="tubarao.php"    >Tubarão</a></li>
                  </ul>
                </li>
                <li class="<?php echo $iaido; ?>">
                  <a href="iaido.php">Iaido</a>
                </li>
                <li class="<?php echo $jodo; ?>">
                  <a href="jodo.php">Jodo</a>
                </li>
                <!-- <li>
                  <a href="videos.php">Vídeos</a>
                </li> -->
                <li class="<?php echo $fotos; ?>">
                  <a href="fotos.php">Fotos</a>
                </li>
                <li class="dropdown <?php echo $glossario; ?>">
                  <a href="#" class="dropdown-toggle">
                    Glossário
                    <i class="icon icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="glossario.php">Informações sobre os treinos</a></li>
                    <li><a href="tecnicas.php">Técnicas por graduação (5º ao 1º kyu)</a></li>
                  </ul>
                </li>
                <li class="dropdown <?php echo $culturaOriental; ?>">
                  <a class="dropdown-toggle" href="#">
                    Cultura Oriental
                    <i class="icon icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="bonsai.php"         >Bonsai</a></li>
                    <li><a href="chanoyu.php"        >Chadô</a></li>
                    <li><a href="fengshui.php"       >Fengshui</a></li>
                    <li><a href="ikebana.php"        >kadô</a></li>
                    <li><a href="shodo.php"          >Shodo</a></li>
                    <li><a href="sumie.php"          >Sumie</a></li>
                    <li><a href="culturaoriental.php">Fotos</a></li>
                  </ul>
                </li>
                <li class="<?php echo $contato; ?>">
                  <a href="contato.php">Contato</a>
                </li>
                <li class="<?php echo $artigos; ?>">
                  <a href="artigos.php">Artigos</a>
                </li>
                <li class="dropdown <?php echo $acupuntura; ?>">
                  <a class="dropdown-toggle" href="#">
                    Acupuntura
                    <i class="icon icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="acupuntura.php">Acupuntura</a></li>
                    <li><a href="shiatsu.php">Shiatsu</a></li>
                  </ul>
                </li>
                
              </ul>
            </nav>
          </div>
        </div>