<?php include_once 'includes/templates/header.php';?>

    <section class="container-mens">
      <div class="img-mens">
        <img class="parallax" src="img/mens.jpg" alt="MENS">
      </div>
      <ul class="txt-mens">
        <h3>PARA HOMBRES</h3>
        <li><a href="#">ARMA TU EQUIPO</a></li>
        <li><a href="#">LO MEJOR DE LA SEMANA</a></li>
        <li><a href="#">CONTACTATE CON UN EXPERTO</a></li>
      </ul> 
    </section><!-- CLOSE MENS -->

    <section class="mens">
      <h2>TENDENCIA Y CALIDAD PURA </h2> 
      <div class="contenedor seccion-hombre contenedor-vendidos">
        <!-- BEST SELLERS -->
        <?php
          require_once('includes/functions/bd_conection_popular.php');
          $sql= " SELECT * FROM info_cloth ";
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
      </div><!-- container-->
    </section>
    <div class=" contenedor section-hombre">
      <div class="section-hombre-text">
        <img  src="img/mens-shorts.png" alt="mens">
      </div>
      <div class="section-hombre-img">
        <h3>Ropa Ideal de Hombre</h3>
        <a href="#" class="button transparent">ver catalogos</a>
        <p>Disfruta de los mejores y mas confiables implementos<br>
          para hombres, catalogado por expertos en 
          el tema con mas de 10 años de Experiencia</p>
      </div>
    </div>
    <div class="contenedor">
      <ul class="tecnologias">
        <li>Alta Tecnologia<br><i class="fas fa-microchip"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui saepe numquam perspiciatis sapiente, est dicta quis vel totam amet nihil nisi dignissimos 
            vitae magni libero sit, reprehenderit doloremque nam nostrum?</p>
        </li>
        <li>Costuras Resistentes<br><i class="fas fa-hand-rock"></i>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos a sit eum necessitatibus inventore. Magnam quidem non provident suscipit, tempore cumque 
            voluptate sunt deleniti vel facilis ea debitis, esse impedit!</p>
        </li>
        <li>Full Deportes<br><i class="fas fa-volleyball-ball"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolor, doloremque soluta praesentium culpa cumque rem repellendus dicta exercitationem enim, voluptates
             beatae nihil quibusdam natus dolorem fuga omnis excepturi odit.</p>
        </li>
      </ul>
    </div>
    <?php include_once 'includes/templates/footer.php';?>