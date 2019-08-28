<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Deportes Totales</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/LOGO-FINAL.ico">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
  <link rel="stylesheet" href="css/sweetalert2.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="  https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

  <link rel="stylesheet" href="css/main.css">




  

  <?php 
    $archivo = basename($_SERVER[PHP_SELF]);
    $pagina = str_replace(".php", "", $archivo);
  ?>
  <meta name="theme-color" content="#fafafa">
</head>

<body class=" <?php echo $pagina ?> ">


  <header class="site-header menu-fixed">
    <div class="">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="https://www.facebook.com/DistribuidoraDeportesTotales/"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com/deportestotales1/"><i class="fab fa-instagram"></i></a>
        </nav><!-- NETWORKS REDS-->
      </div>
      <div class="barra">
        <div class="menu">
          <div class=" clearfix">
            <div class="logo">
              <a href="index.php">
              <img src="img/LOGO-FINAL.jpg" alt="Logo ">
              </a>
            </div>
            <div class="overlay">
              <a class="mk-search-trigger mk-fullscreen-trigger" href="#"  " id="search-button-listener">
                <div id="search-button"><i class="fa fa-search"></i></div>
              </a>
              <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
                <div id="mk-fullscreen-search-wrapper">
                  <form method="GET" id="mk-fullscreen-searchform" action="includes/functions/busqueda.php">
                    <input type="text"  name="buscar" placeholder="Buscar..." id="mk-fullscreen-search-input">
                    <i class="fa fa-search fullscreen-search-icon"><input value=""  type="submit"></i>
                  </form>
                </div>
              </div>
            </div>
            <div class="menu-movil">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <nav class="navegacion-principal clearfix">
              <ul class="menu-principal">
                <li class="submenu"><a href="mujeres.php">Mujeres<i class="fas fa-chevron-down"></i></a><i class="fas fa-chevron-down"></i>
                    <ul>
                      <li><a href="camiseta_woman.php?pagina=1">Camisetas</a></li>
                      <li><a href="chaquetawoman.php?pagina=1">Chaquetas</a></li>
                      <li><a href="cortavientowoman.php?pagina=1">Cortavientos</a></li>
                      <li><a href="mallawoman.php?pagina=1">Mallas</a></li>
                      <li><a href="pantswoman.php?pagina=1">Pantalones</a></li>
                      <li><a href="short&falda.php?pagina=1">Short & Faldas</a></li>
                      <li><a href="thermwoman.php?pagina=1">Ropas termincas</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="hombre.php">Hombres<i class="fas fa-chevron-down"></i></a><i class="fas fa-chevron-down"></i>
                    <ul>
                      <li><a href="camiseta_man.php?pagina=1">Camiseta</a></li>
                      <li><a href="chaquetaman.php?pagina=1">Chaquetas</a></li>
                      <li><a href="cortavientoman.php?pagina=1">Cortavientos</a></li>
                      <li><a href="conjuntoman.php?pagina=1">Conjuntos Deportivos</a></li>
                      <li><a href="mallaman.php?pagina=1">Mallas</a></li>
                    </ul>               
                </li>
                <li class="submenu"><a href="Accesorios.php">Accesorios<i class="fas fa-chevron-down"></i></a><i class="fas fa-chevron-down"></i>
                    <ul>
                      <li><a href="balones.php?pagina=1">Balones</a></li>
                      <li><a href="natacion.php?pagina=1">Natacion</a></li>
                      <li><a href="box&karate.php?pagina=1">Box & Karate</a></li>
                      <li><a href="mochilas&bolsos.php?pagina=1">Mochilas & Bolsos</a></li>
                      <li><a href="lentes.php?pagina=1">Lentes</a></li>
                      <li><a href="mallaman.php?pagina=1">Zapatillas</a></li>
                    </ul>               
                </li>
                <li class="submenu"><a href="#">Blog<i class="fas fa-chevron-down"></i></a><i class="fas fa-chevron-down"></i>                  
                    <ul>
                      <li><a href="#">Concursos</a></li>
                      <li><a href="#">Experiencias</a></li>
                      <li><a href="experto.php">Comunicate con un Experto</a></li>
                    </ul>             
                </li>
                <li class="submenu"><a >Nosotros</a>                 
                    <ul>
                      <li><a href="quienessomos.php">Quienes Somos?</a></li>
                      <li><a href="objetivos.php">Nuestros Objetivos</a></li>
                    </ul>                
                </li>
                <li class="submenu"><a href="events.php">Eventos</a>                                  
                </li>
                <li ><a href="patrocinadores.php">Patrocinadores</i></a>                  
              </li>
                <li><a href="registro.php">Contactanos</a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- CLOSE CONTAINER -->
      </div>
    </div><!-- CLOSE BAR -->
  </header>