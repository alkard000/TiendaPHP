<?php include_once 'includes/templates/header.php';?>
<style>

    .swiper-container {
      width: 100%;
      height: 100%;
      background: #000;
    }
    .swiper-slide {
      font-size: 18px;
      color:#fff;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      padding: 40px 60px;
      display: flex;
    }
    .parallax-bg {
      position: absolute;
      left: 0;
      top: 0;
      width: 130%;
      height: 100%;
      -webkit-background-size: cover;
      background-size: cover;
      background-position: center;
    }
    .swiper-slide .title {
      font-size: 41px;
      font-weight: 300;
      color: greenyellow;
    }
    .swiper-slide .subtitle {
      font-size: 21px;
    }
    .swiper-slide .text {
      font-size: 17px;
      max-width: 400px;
      line-height: 1.3;
    }
  </style>


<div class="swiper-container">
    <div class="parallax-bg" style="background-image:url(img/tyr_tech.jpg); " data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">ENDO COMPRESSION CAGE™</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Soportes Flexibles</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>La cinta y el tejido interno forman una jaula de soporte flexible y compresiva para los abdominales, oblicuos y cuadriceps que crea un efecto de retroceso y aumenta la distancia por golpe.</p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.tyr.com/wp-content/uploads/2018/11/241x241_ENDO_Compression_Cage.jpg">
        </div>
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">Frictionless Fiber Construction™</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Sin Fricción</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Como el primer y único traje tecnológico en la industria que analiza el arrastre desde una perspectiva microscópica, el Venzo utiliza fibra ultra suave para enhebrar un tejido duradero sin fricción.</p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.tyr.com/wp-content/uploads/2018/11/241x241_Frictionless_Fiber_Construction.jpg">
        </div>
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">Seamless Exo Shell</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Hidrodinamismo</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Este diseño hidrodinámico utiliza una construcción sin costura para racionalizar la posición del cuerpo mientras disminuye la resistencia general.</p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.tyr.com/wp-content/uploads/2018/11/241x241_Seamless_EXO_Shell.jpg">
        </div>
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">Surface Lift Technology™</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Impenetrable</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>La tecnología Surface Lift evita que el agua penetre en la tela, lo que resulta en una posición más alta del cuerpo en el agua.</p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.tyr.com/wp-content/uploads/2018/11/241x241_Surface_Lift_Technology.jpg">
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>
<h2>TECNOLOGIAS DESTACADAS</h2>
<div class="contenedor info-marc">
    <div class="image-marc">
        <img src="img/TYR.png" width="50%">
    </div>
    <div class="text-marc">
        <h3>Mas Sobre TYR</h3>
        <p>TYR fabrica uno de los equipos más técnicos en el mercado de la natación y el triatlón. Empresa creada por deportistas e impulsada por atletas. La misión de TYR es crear los productos de más alta calidad, comodidad y que proporcionen el máximo rendimiento a nuestros atletas.</p>
            <ul class="r-s" >
                    <li style="color:greenyellow;"><a href="https://www.instagram.com/tyrsport/?hl=es-la" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li style="color:greenyellow;"><a href="https://www.facebook.com/TYRSportInc/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li style="color:greenyellow;"><a href="https://twitter.com/TYRSport" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </ul>

    </div>
</div>
<div class=" contenedor  video-marc">
    <h3>Videos de presentacion</h3>
    <hr>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/u3snvDttpaY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/grDvfZSpLYY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?php include_once 'includes/templates/footer.php';?>
