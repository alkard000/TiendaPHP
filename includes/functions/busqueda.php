
<?php include_once 'includes/templates/header.php';?>

<?php require_once('includes/functions/bd_conection_all.php'); ?>
    
<?php 

    $buscar = htmlentities($_GET['busca'],ENT_QUOTES,'utf-8'); 

?>

<?php
$sql = " SELECT * FROM info_cloth WHERE name_cloth LIKE '%" .$buscar. "%' ";
$sentencia = $pdo -> prepare($sql);
$sentencia -> execute();

$result = $sentencia -> fetchAll();

$pag=20;
  $num_rows=$sentencia -> rowCount();
  //echo $num_rows;
  $num_for_pag=ceil($num_rows/$pag);
?>

  <?php 

  $iniciar = ($_GET['pagina']-1) * $pag;

  $sql_articulos = " SELECT * FROM info_acc WHERE name_cloth LIKE '%" .$buscar. "%'  LIMIT :iniciar, :narticulos ";
  $sen_art = $pdo -> prepare($sql_articulos);
  $sen_art -> bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
  $sen_art -> bindParam(':narticulos', $pag, PDO::PARAM_INT);
  $sen_art -> execute();

  $res_art = $sen_art -> fetchAll();

  var_dump ($res_art);

?>

<?php  foreach($res_art as $articulo): ?>
<div id="productos" class="<?php echo $articulo['id_cat_marc'] ?> mas-vendidos v-pehmea " style="background-image: url(<?php echo $articulo['url_image']; ?>) ">
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
}


<?php include_once 'includes/templates/footer.php';?>