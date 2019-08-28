<?php include_once 'includes/templates/header.php';?>

<?php
  require_once('includes/functions/bd_conection_acc.php');
  $sql= " SELECT * FROM info_acc WHERE id_cloth=".$_GET['id_cloth'];
  $sentencia = $pdo -> prepare($sql);
  $sentencia -> execute();

  $resultado = $sentencia -> fetchAll();

?>

  <?php  foreach($resultado as $articulo): ?>
  <div class="product contenedor">
  
  <div class="zoom-area">
		
    <!-- It's container of the magnify glass -->
    <ul class="images-cloth">
      <li id="first">
        <div class="large" style="transform:scale(2);"></div>
          <!-- It's for the small image -->
          <img class="small" src="<?php echo $articulo['url_images']; ?>"  />

      </li>
          <!-- It's container of the magnify glass -->
      <li id="second">
        <!-- It's for the small image -->
        <img class="small" src="<?php echo $articulo['url_image']; ?>"  />
      </li>
    </ul>
  </div>

  
  
  <div class="info-product">
    <h3><?php echo $articulo['name_cloth']; ?></h3>
    <li><?php echo $articulo['pass']; ?></li>

      <ul class="content-block">
          <li>
          <ul class="horizontal">
            <li><i class="fas fa-square"></i></li>
            <li><i class="fas fa-square"></i></li>
            <li><i class="fas fa-square"></i></li>
          </ul>
        </li>
        <li>
          
        </li>
        <li><a href="registro.php" class="button-vendidos"><i class="fas fa-arrow-circle-right"></i>Obtener </a></li>
      </ul>
      <div class="content-gal">
      <ul class="galeria">
        <li><a href="#first"><img  src="<?php echo $articulo['url_images']; ?>" width="50px" height="50px" /></a></li>
        <li><a href="#second"><img  src="<?php echo $articulo['url_image']; ?>" width="50px" height="50px" /></a></li>
      </ul>
  </div>
  </div>
</div>
<?php endforeach ?>


<?php include_once 'includes/templates/footer.php';?>