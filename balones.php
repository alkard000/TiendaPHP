<?php include_once 'includes/templates/header.php';?>
<?php
  require_once('includes/functions/bd_conection_acc.php');
  $sql= " SELECT * FROM info_acc WHERE id_cat_type=1 AND id_cat_marc=".$_GET['lista1'];
  $sentencia = $pdo -> prepare($sql);
  $sentencia -> execute();

  $resultado = $sentencia -> fetchAll();

  //var_dump ($resultado);

  $pag=20;
  $num_rows=$sentencia -> rowCount();
  //echo $num_rows;
  $num_for_pag=ceil($num_rows/$pag);

?>

<div class="menu-resumen">
  <ul class="section-resumen" >
    <li><a href="index.php" >Inicio<i class="fas fa-chevron-right"></i></a></li>
    <li><a href="Accesorios.php?pagina=1">Accesorios<i class="fas fa-chevron-right"></i></a></li>
    <li><a href="balones.php?pagina=1" >Balones</a></li>
  </ul>
</div>

<?php include_once 'includes/templates/number.php';?>


<?php include_once 'includes/templates/filtro_marc.php';?>


<section class="contenedor seccion">
  <h2>Una buena eleccion</h2>

<?php 
  $iniciar = ($_GET['pagina']-1) * $pag;

  $sql_articulos = " SELECT * FROM info_acc WHERE id_cat_type=1 AND id_cat_marc='$_GET[lista1]'  LIMIT :iniciar, :narticulos ";
  $sen_art = $pdo -> prepare($sql_articulos);
  $sen_art -> bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
  $sen_art -> bindParam(':narticulos', $pag, PDO::PARAM_INT);
  $sen_art -> execute();

  $res_art = $sen_art -> fetchAll();

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
            <li><a href="product4.php?id_cloth= <?php echo $articulo['id_cloth'] ?>" class="tranparent button-vendidos"><i class="fas fa-arrow-circle-right"></i>Ver Detalles</a></li>
          </ul>
        </div>
<?php endforeach ?>

<nav class="">
  <ul class="list-pag">
    <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : ''; ?>">
    <i class="fas fa-arrow-circle-left"></i>
      <a class="but" href="balones.php?pagina=<?php echo $_GET['pagina']-1; ?>">
        Anterior
      </a>
    </li>

    <?php for($i = 0; $i < $num_for_pag ; $i++): ?>

    <li class="page-item <?php echo $_GET['pagina']== $i + 1 ? 'activos' : ''; ?>">
      <a class="but " href="balones.php?pagina=<?php echo $i + 1; ?>">
        <?php echo $i + 1; ?>
      </a>
    </li>

    <?php endfor ?>
    
    <li class="page-item <?php echo $_GET['pagina'] >= $num_for_pag ? 'disabled' : ''; ?>">
      <a class="but" href="balones.php?pagina=<?php echo $_GET['pagina']+1; ?>">
       Siguiente
       <i class="fas fa-arrow-circle-right"></i>
      </a>
    </li>
  </ul>
</nav>
</section>
<?php include_once 'includes/templates/footer.php';?>
