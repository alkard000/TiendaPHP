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
    <div class="parallax-bg" style="background-image:url(https://www.deportestotales.cl/wp-content/uploads/2019/06/luanvi-info.jpg); " data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">POLIÉSTER</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Estabilidad</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Fibra sintética  resistente a las roturas y de fácil mantenimiento al no producir casi arrugas en la prenda. Posee un secado rapido y óptimo. </p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.deportestotales.cl/wp-content/uploads/2019/06/fibra1.png">
        </div>
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">ALGODÓN</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Comodo a todas partes</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Fibra natural que se caracteriza por ser un material fresco de gran comodidad al vestir. Se utiliza para hacer telas suaves y con propiedades únicas de durabilidad y resistencia.
                        Material con propiedad de absorcioón ya que puede retener hasta 50% de su propio peso en humedad.
                    </p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.deportestotales.cl/wp-content/uploads/2019/06/fibra2.png">
        </div>
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">POLIAMIDA</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Resistencia</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Fibra sintética de gran resistencia ante la rotura y al frotamiento. Seca rápidamente y es de fácil mantenimiento.</p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.deportestotales.cl/wp-content/uploads/2019/06/fibra3.png">
        </div>
        <div class="swiper-slide">
            <div class="info-tech">
                <h3 class="title" data-swiper-parallax="-300">ELASTANO</h3>
                <h4 class="subtitle" data-swiper-parallax="-200">Ligero y flexible</h4>
                <div class="text" data-swiper-parallax="-100">
                    <p>Fibra sintética de gran elasticidad y resistencia. Es confortable, flexible, ligera y resistente. Propiedad de secado raápido. Ideal para prendas ajustadas que permiten gran movilidad.</p>
                </div>
            </div>
            <img width="241" height="241" src="https://www.deportestotales.cl/wp-content/uploads/2019/06/fibra4.png">
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
    <div class="image-marc" style="width:50%;">
        <img src="https://www.deportestotales.cl/wp-content/uploads/2019/06/LUANVI.png" width="100%">
    </div>
    <div class="text-marc">
        <h3>Mas Sobre LUANVI</h3>
        <p>Luanvi es una empresa española textil fabricante de ropa deportiva, cuya sede se encuentra en Paterna, España. Fue creada a principios de los años 1970. El nombre de la empresa viene del nombre de los tres fundadores (Luis, Antonio y Vicente).</p>
        <ul class="r-s">
            <li><a href="https://www.facebook.com/luanvicl/" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/luanvi_official/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/Luanvi" target="_blank"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
</div>
<div class="contenedor seccion equipos-luanvi">
    <h3>EQUIPOS A LOS QUE REPRESENTA</h3>
    <hr>
    <img src="img/equipos-luanvi.png">
</div>
<div class="contenedor seccion">
    <h2>CATALOGOS</h2>
    <ul class="documents">
        
        <li> 
            <div>   
            <img src="img/dc1-luanvi.jpg">      
            <a  href="http://www.luanvi.es/var/pool/pdf/TEAM_2019.pdf" target="_blank">VER CATALOGO</a>
            </div>
        </li>
        <li>  
            <div>  
            <img src="img/dc2-luanvi.jpg">        
            <a  href="http://www.luanvi.es/var/pool/pdf/SUBLIMACION_2019.pdf" target="_blank">VER CATALOGO</a>
            </div>
        </li>
    </ul>
</div>
<?php include_once 'includes/templates/footer.php';?>
