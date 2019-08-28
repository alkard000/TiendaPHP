<?php include_once 'includes/templates/header.php';?>

 <!-- Slider -->
  <div id="slider">
    <div class="slides">
      <div class="slider">
        <div class=" contenido contenedor content">
          <div class="contenido contenedor content-txt">
            <p>Para Hombres</p>
            <h3>Fuerza y <br>Resistencia</h3>
            <a href= "mans.php?pagina=1" class="button transparent button-slider">Ver catalogo</a>
          </div>
        </div>
        <div class="image">
          <img src="img/luanvi.jpg">
        </div>
      </div>
      <div class="slider">
          <div class="contenido contenedor content">
            <div class="contenido contenedor content-txt">
              <p>Para Mujeres</p>
              <h3>equilibrio y <br>figura</h3>
              <a href="womans.php?pagina=1" class="button transparent button-slider">Ver catalogo</a>
            </div>
          </div>
        <div class="image">
          <img src="img/luanvimujer.jpg">
        </div>
      </div>
      <div class="slider">
        <div class="contenido contenedor content">
          <div class="contenido contenedor content-txt">
            <p>Zapatillas</p>
            <h3>comodo a <br> todos lados</h3>
            <a href="#" class="button transparent button-slider">Ver catalogo</a>
          </div>
        </div>
        <div class="image">
          <img src="img/zapatillas.jpg">
        </div>
      </div>
      <div class="slider">
        <div class="contenido contenedor content">
          <div class="contenido contenedor content-txt">
            <p>Accesorios</p>
            <h3>lo que <br> te falta</h3>
            <a href="#" class="button transparent button-slider">Ver catalogo</a>
          </div>
        </div>
        <div class="image">
          <img src="img/accesorios.jpg">
        </div>
      </div>
    </div>
    <div class="switch">
      <ul>
        <li>
          <div class="on"></div>
        </li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
   
  
  </div>
    <!--<div class="contenido contenedor">
      <p>Ropa e implementos deportivos </p>
      <h3>nuestro proposito es la calidad</h3>
      <a href="#" class="button transparent">Ver catalogo</a>
    </div><!-- CLOSE CONTENT -->
  <!-- CLOSE intro -->


 <section class="deportes contenedor seccion">
    <h2 class="important">Porque nos importan tus preferencias</h2>
    <ul class="lista-deporte clearfix">
      <li>
        <div class="deporte">
          <a href="futbol.php?pagina=1">
          <img src="img/football.jpg" alt="Football">
          <p>Football</p>
          </a>
        </div>
      </li>
      <li>
        <div class="deporte">
          <a href="basquetbol.php?pagina=1">
          <img src="img/basquetball.jpg" alt="basquetball">
          <p>basquetball</p>
          </a>
        </div>
      </li>
      <li>
        <div class="deporte">
          <a href="voleibol.php?pagina=1">
          <img src="img/voleibol.jpg" alt="voleibol">
          <p>voleibol</p>
          </a>
        </div>
      </li>
      <li>
        <div class="deporte">
          <a href="atletismo.php?pagina=1">
          <img src="img/atletismo.jpg" alt="atletismo">
          <p>atletismo</p>
          </a>
        </div>
      </li>
      <li>
        <div class="deporte">
          <a href="natacion&t.php?pagina=1">
          <img src="img/natacion.jpg" alt="natacion">
          <p>Natacion</p>
          </a>
        </div>
      </li>
      <li>
        <div class="deporte">
          <a href="#">
          <img src="img/karate.jpg" alt="karate">
          <p>Karate & Box</p>
          </a>
        </div>
      </li>
    </ul>
  </section>

  <div class=" contenedor contenedor-vendidos">
    <div class="">
      <ul class="filtrador">
        <li><a href="#mas-vendidos"><i class="fas fa-chart-line"></i>Mas Vendidos</a></li>
        <li><a href="#mas-populares"><i class="fas fa-chart-line"></i>Mas Populares</a></li>
        <li><a href="#recomendados"><i class="fas fa-chart-line"></i>Recomendados</a></li>
      </ul>
    </div>
    <!-- BEST SELLERS -->
    <ul class="clasificador">
      <li id="mas-vendidos" class="vendidos bloque">
        <?php
          require_once('includes/functions/bd_conection_popular.php');
          $sql= " SELECT * FROM info_cloth4 ";
          $sentencia = $pdo -> prepare($sql);
          $sentencia -> execute();

          $resultado = $sentencia -> fetchAll();
        ?>
        <?php  foreach($resultado as $articulo): ?>
          <div class="mas-vendidos v-pehmea" style="background-image: url(<?php echo $articulo['url_images']; ?>) ">
            <h3><?php echo $articulo['name_cloth']; ?></h3>
            <ul class="content-block">
              <li>
                <ul class="horizontal">
                  <li><i class="fas fa-square"></i></li>
                  <li><i class="fas fa-square"></i></li>
                  <li><i class="fas fa-square"></i></li>
                </ul>
              </li>
              <li>
                <ul class="lista-tallas">
                  <li>S</li>
                  <li>M</li>
                  <li>L</li>
                  <li>XL</li>
                </ul>
              </li>
              <li class="precio"><span>Precio:</span>$ <?php echo $articulo['price'] ?></li>
              <li><a href="product3.php?id_cloth= <?php echo $articulo['id_cloth'] ?>" class="tranparent button-vendidos"><i class="fas fa-arrow-circle-right"></i>Ver Detalles</a></li>
            </ul>
          </div>
        <?php endforeach ?>

      </li>

      
      <!-- MOST POPULARS -->
      <li id="mas-populares" class="mas-populares bloque">
        <?php
          require_once('includes/functions/bd_conection_popular.php');
          $sql= " SELECT * FROM info_cloth5";
          $sentencia = $pdo -> prepare($sql);
          $sentencia -> execute();

          $resultado = $sentencia -> fetchAll();
        ?>
        <?php  foreach($resultado as $articulo): ?>
          <div class="mas-vendidos v-pehmea" style="background-image: url(<?php echo $articulo['url_images']; ?>) ">
            <h3><?php echo $articulo['name_cloth']; ?></h3>
            <ul class="content-block">
              <li>
                <ul class="horizontal">
                  <li><i class="fas fa-square"></i></li>
                  <li><i class="fas fa-square"></i></li>
                  <li><i class="fas fa-square"></i></li>
                </ul>
              </li>
              <li>
                <ul class="lista-tallas">
                  <li>S</li>
                  <li>M</li>
                  <li>L</li>
                  <li>XL</li>
                </ul>
              </li>
              <li class="precio"><span>Precio:</span>$ <?php echo $articulo['price'] ?></li>
              <li><a href="product3.php?id_cloth= <?php echo $articulo['id_cloth'] ?>" class="tranparent button-vendidos"><i class="fas fa-arrow-circle-right"></i>Ver Detalles</a></li>
            </ul>
          </div>
        <?php endforeach ?> 
      </li>
      <!-- RECOMEND -->
      <li id="recomendados" class="recomendados bloque">
        <?php
          require_once('includes/functions/bd_conection_popular.php');
          $sql= " SELECT * FROM info_cloth6 ";
          $sentencia = $pdo -> prepare($sql);
          $sentencia -> execute();

          $resultado = $sentencia -> fetchAll();
        ?>
        <?php  foreach($resultado as $articulo): ?>
          <div class="mas-vendidos v-pehmea" style="background-image: url(<?php echo $articulo['url_images']; ?>) ">
            <h3><?php echo $articulo['name_cloth']; ?></h3>
            <ul class="content-block">
              <li>
                <ul class="horizontal">
                  <li><i class="fas fa-square"></i></li>
                  <li><i class="fas fa-square"></i></li>
                  <li><i class="fas fa-square"></i></li>
                </ul>
              </li>
              <li>
                <ul class="lista-tallas">
                  <li>S</li>
                  <li>M</li>
                  <li>L</li>
                  <li>XL</li>
                </ul>
              </li>
              <li class="precio"><span>Precio:</span>$ <?php echo $articulo['price'] ?></li>
              <li><a href="product3.php?id_cloth= <?php echo $articulo['id_cloth'] ?>" class="tranparent button-vendidos"><i class="fas fa-arrow-circle-right"></i>Ver Detalles</a></li>
            </ul>
          </div>
        <?php endforeach ?>
      </li>
    </ul>
  </div><!-- container-->
<h2>Calendario de Eventos</h2>
  <section class="contenedor next-event">
        

        <?php
        try{
            require_once('includes/functions/bd_conection_next.php');
            $sql = " SELECT * FROM new_event ";
            $resultado = $conn -> query($sql);
        } catch(\Exception $e){

            echo $e->getMessage();
        }
        ?>
        <div class="calendar-new">
            <?php
                $calendario= array();
                while($eventos = $resultado -> fetch_assoc()){ 

                    //catch date of event

                    $fecha = $eventos['date_event'];

                    $evento = array(
                        'title' => $eventos['name_event'],
                        'date' => $eventos['date_even'],
                        'hour' => $eventos['hour_event'],
                        'categories' => $eventos['pass'],
                        'sport' => $eventos['sport_type'],
                        'image' => $eventos['url_image']
                    );  
                    
                $calendario[$fecha][] = $evento;

                ?>
                
            <?php  }//while of fetch_assoc()  ?>
            <?php
                //PRINT EVENTE
                foreach($calendario as $dia => $lista_eventos){ ?>

                    <?php foreach($lista_eventos as $evento){ ?>
                        <div class="dia-new">
                          <div class="image-event-new">
                            <img src="<?php echo $evento['image']; ?>">
                            <p><a href="#" class="btn"><i class="fas fa-arrow-circle-right"></i>Ver Detalles</a></p>
                          </div>
                          <div class="info-event-new">
                            <ul class=>
                                <li>
                                    <h3 class="titulo-new" ><?php echo $evento['title'] ?></h3>
                                </li>
                                <li>
                                    <p class="hora-new" >
                                    <i class="far fa-clock" aria-hidden="true" ></i>
                                    <?php echo $evento['date'] . "   " . $evento['hour']; ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    <i class="fas fa-hand-rock"></i><?php echo $evento['categories'] ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-volleyball-ball" aria-hidden="true" ></i>  
                                        <?php echo $evento['sport'] ?>
                                    </p>
                                </li>
                                <li>
                                  <p class="description-new" >Ven a disfrutar de este maravillosos deporte con un campeonato de primera clase</p>
                                </li>
                            </ul>
                          </div>


                            <!--<pre>
                                <?php //var_dump($evento); ?>
                            </pre>-->
                        </div>
                    <?php } //end foreach event?>
                <?php } //end foreahc day?>

        </div>

        <?php 
            $conn -> close();
        ?>
      </section>

    <!-- Swiper -->

    <div class="swiper-container">
    <div class="parallax-bg" style="background-image:url(img/dark-parallax.jpg)" data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
    <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">TYR&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Experto En Natacion</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>TYR Sport, Inc. es un fabricante estadounidense de ropa y equipo de natación y triatlón competitivos. 
                        La compañía también se enfoca en el waterpolo, el fitness acuático, la natación recreativa y más. </p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="https://www.instagram.com/tyrsport/?hl=es-la" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.facebook.com/TYRSportInc/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/TYRSport" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/TYR.png" alt="TYR" width="30%" height="30%">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">ADIDAS&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Experto Deportivo</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Empresa alemana con decadas de trayectoria en el rubro deportivo, patrocinador de innumerables eventos y figuras deportivas a nivel mundial.</p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="https://www.facebook.com/adidasCL/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/adidascl/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/adidasfootball" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/ADIDAS.png" alt="ADIDAS" width="50%" height="50%">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">BABOLAT&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Experto en Tennis</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Empresa Francesa que se dedica principalmente a la fabricacion de raaquetas. Profesionales alrededor del mundo usan sus producto con resultados mas que satisfactorios.</p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="https://www.facebook.com/Babolat/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/babolat/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/babolat" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/BABOLAT.svg" alt="BABOLAT" width="50%" height="50%">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">UK SPORT&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Experto Deportivo</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p></p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/UK SPORT.png" alt="UK SPORT">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">LUANVI&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Calidad Deportiva</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Empresa textil española, dedicado principalmente al area deportiva.</p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="https://www.facebook.com/luanvicl/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/luanvi_official/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/Luanvi" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/LUANVI.png" alt="LUANVI">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">MIKASA&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Experto Deportivo</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Empresa estadounidense dedicada a la fabricacion de balones, usados en diversas diciplinas deportivas</p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="https://www.facebook.com/MikasaSportsUSA" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/mikasasportsusa/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/MikasaUSA" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/MIKASA.png" alt="MIKASA" width="50%" height="50%">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">MITRE&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Experto Deportivo</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>MITRE&copy es una empresa britanica dedicada a la fabricacion de uniformes, balones, zapatillas y accesorios deportivos. Esta a cargo de proveer equipamiento a varios quipos y figuras depotivas en todo el mundo.</p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="http://www.facebook.com/mitrechile" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://instagram.com/mitresports_chile" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/MitreSports" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/MITRE.png" alt="MITRE" width="50%" height="50%">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">NAHUEN&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Expeto Deportivo</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p></p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/NAHUEN.png" alt="NAHUEN" style="transform:scale(.7)">
        </div>
        <div class="swiper-slide">
            <div>
                <h3 class="title" data-swiper-parallax="-300">PENALTY&#174</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Experto Deportivo</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Marca de indumentaria deportiva brasileña que fabrica desde calzados, hasta balones.</p>
                </div>
                <a class="marc-button" href="#" target="_blank" >Ver Mas</a>
                <ul class="r-s">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <img src="img/PENALTY.png" alt="PENALTY" style="margin-left:200px">
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-black"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev swiper-button-black"></div>
    <div class="swiper-button-next swiper-button-black"></div>
  </div>

  

  <section class="preference contenedor">
    <h3 style="font-weight:100; font-size:30px;">Porque Preferirnos</h3>
    <ul class="list-preference">
     
      <li>
        <div class="image-pref">
          <img  src="img/movegreen.png" alt="move-green" >
        </div>
        <div style="background-color:yellowgreen;">
          <p class="p1">Hoy en dia sabemos el gran peligro que corre nuestra Naturaleza, es por eso que cada uno de nuestros
            productos se alinean con el <span>Move Green</span>. Usando productos Biodegradables, queremos que tu y tus
            preferencias ayuden  a nuestro ambiente y su presevacion para futuras generaciones, ya que es uno de los principales
            objetivos de la generacion actual. Todas la marcas que representamos y comercializamos poseen este sello de garantia,
            por lo que la preferencia hacia nuestros servicios va de la mano con conciencia ambiental que se necesita. <span>Somos el futuro y 
             embajadores de la sustentabilidad.<span>
          </p>
        </div>
      </li>
      <li>
        <div class="image-pref2" >
          <img  src="img/engranes-2.png" alt="move-green" style="width:65%;">
          <div class="eng1">
            <img  class="eng1" src="img/engranes-3.png" alt="move-green"  >
          </div>
          <div class="eng2">
            <img  class="eng2" src="img/engranes-3.png" alt="move-green" >
          </div>
          <div class="eng3">
            <img  class="eng3" src="img/engranes-3.png" alt="move-green" >
          </div>

        </div>
        <div style="background-color:#D3D3D3;">
          <p class="p2">El sello del engrane se refiere a la <span>gran personalizacion</span> que se puede llegar a tener en nuestros servicios, nosotros como 
            expertos en ropa e implementos deportivos, nuestra obligacion es guiarte y apoyarte en todo el proceso de compra y, evidentemente posterior a este.
            Dicho lo anterior, ya sea ropa individual, o para un equipo, te daremos la mejores opciones para que el desarrollo y la actividad fisica sea 
            la mas comoda y eficiente. <span>Somos personalizacion y eficiencia.</span>
          </p>
        </div>
      </li>
      <li>
        <div class="image-pref3">
          <img src="img/femenino.png" alt="femenino" style="width:50%;">
        </div>
        <div style="background-color:purple;">
          <p class="p3" style="color:#ffffff;">Antes e incluso ahora las mujeres son muy poco apoyadas en cuanto al deporte se refiere, entonces nosotros como empresa les daremos 
            a ellas todo el apoyo que necesitan en cuanto a consejos. Porque el deporte no es un negocio, si no que es union, union de cada una de la personas
            que lo practiquen, y es obvio que daremos el apoyo <span>igualitario y equitativo</span> que cada uno desee, solo nos importa tu comodidad con nosotros y tu 
            gratificante preferencia. <span>Somos igualdad.</span>
          </p>
        </div>
      </li>
    </ul>
  </section>
 
  <section class="seccion ">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia l
              ibero tenetur quisquam, esse possimus quas illum porro perferendis 
              rem harum voluptatem, sequi fuga perspiciatis minima vel 
              repellendus eius eos delectus.
            </p>
            <footer class="info-testimonial clearfix">
              <img src="img/Elivan.png" alt="Testimonial">
              <cite>El choro ivan <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div><!-- CLOSE TESTAMENT -->
        <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia l
                ibero tenetur quisquam, esse possimus quas illum porro perferendis 
                rem harum voluptatem, sequi fuga perspiciatis minima vel 
                repellendus eius eos delectus.
              </p>
              <footer class="info-testimonial clearfix">
                <img src="img/Elivan.png" alt="Testimonial">
                <cite>El choro ivan <span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div><!-- CLOSE TESTAMENT -->
          <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia l
                ibero tenetur quisquam, esse possimus quas illum porro perferendis 
                rem harum voluptatem, sequi fuga perspiciatis minima vel 
                repellendus eius eos delectus.
                lorem
              </p>
              <footer class="info-testimonial clearfix">
                <img src="img/Elivan.png" alt="Testimonial">
                <cite>El choro ivan <span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div><!-- CLOSE TESTAMENT -->
        </div>
    </section>
  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>comunicate con nosotros:</p>
      <h3>deportes totales</h3>
      <a href="registro.php" class="button transparent">Contacto</a>
    </div><!-- CLOSE CONTENT -->
  </div><!-- CLOSE NEWSLETTER -->
  <?php include_once 'includes/templates/footer.php';?>

