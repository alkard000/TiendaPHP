<?php include_once 'includes/templates/header.php';?>


<?php

$conn = new mysqli('localhost', 'root', 'root', 'CLOTH_ALL');

if($conn->connect_error){
    echo $error -> $conn->connect_error;
}

?>


<div class="box-body">
              <table id="productos" class="table table-bordered table-striped">

                <tbody>
                  <?php

                    try{
                      $sql = " SELECT id_cloth, url_images, url_image, name_cloth, price, pass FROM info_cloth WHERE id_cloth_cat=4 ";
                      $resultado = $conn->query($sql);
                    }catch (Exception $e){
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while($admin = $resultado->fetch_assoc()){ ?>
<tr>
<td>
<div  class="mas-vendidos v-pehmea" style="background-image: url(<?php echo $articulo['url_images']; ?>) ">
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
</td>
</tr>              
                  <?php }; ?>
                </tbody>
                
        
              </table>
            </div>
            <!-- /.box-body -->

<?php include_once 'includes/templates/footer.php';?>



