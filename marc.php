<?php include_once 'includes/templates/header.php';?>
<?php
  require_once('includes/functions/bd_conection_cloth.php');
  $marca = $_GET['id_cat_marc'];
  $sql= " SELECT * FROM info_cloth WHERE id_cat_type=1 AND id_cat_marc= '$marca' ";
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
    <li><a href="mans.php?pagina=1">Hombre<i class="fas fa-chevron-right"></i></a></li>
    <li><a href="camiseta_man.php?pagina=1" >Camisetas</a></li>
  </ul>
</div>

<aside>
<span >Marcas</span>
  <ul>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=1" ><span>Adidas</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=2" ><span>Nike</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=3" ><span>Everlast</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=4" ><span>Umbro</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=5" ><span>Luanvi</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=6" ><span>Under Armour</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=7" ><span>Puma</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=8" ><span>Sketcher</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=9" ><span>Le Coq</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=10" ><span>Mikasa</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=11" ><span>Nahuen</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=12" ><span>Train</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=13" ><span>Mitre</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=14" ><span>Penalty</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=15" ><span>Babolat</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=16" ><span>Tyr</span><span></span></a>
    </li>
    <li>
      <span>
        <label><span></span>
      </span>
      <a href="marc.php?id_cat_marc=17" ><span>UK Time</span><span></span></a>
    </li>
  </ul>
</aside>

<?php include_once 'includes/templates/number.php';?>


<section class="contenedor seccion">
  <h2>Diseños exclusivos</h2>

<?php 

  $iniciar = ($_GET['pagina']-1) * $pag;
  $marca = $_GET['id_cat_marc'];
  $sql_articulos = " SELECT * FROM info_cloth WHERE id_cat_type=1 AND id_cat_marc= '$marca' LIMIT :iniciar, :narticulos ";
  $sen_art = $pdo -> prepare($sql_articulos);
  $sen_art -> bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
  $sen_art -> bindParam(':narticulos', $pag, PDO::PARAM_INT);
  $sen_art -> execute();

  $res_art = $sen_art -> fetchAll();

?>

<?php  foreach($res_art as $articulo): ?>
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
            <li><a href="product.php?id_cloth= <?php echo $articulo['id_cloth'] ?>" class="tranparent button-vendidos"><i class="fas fa-arrow-circle-right"></i>Ver Detalles</a></li>
          </ul>
        </div>
<?php endforeach ?>

<nav class="">
  <ul class="list-pag">
    <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : ''; ?>">
    <i class="fas fa-arrow-circle-left"></i>
      <a class="but" href="marc.php?id_cat_marc=<?php echo $marca ?>&pagina=<?php echo $_GET['pagina']-1; ?>">
        Anterior
      </a>
    </li>

    <?php for($i = 0; $i < $num_for_pag ; $i++): ?>

    <li class="page-item <?php echo $_GET['pagina']== $i + 1 ? 'activos' : ''; ?>">
      <a class="but " href="marc.php?id_cat_marc=<?php echo $marca ?>&pagina=<?php echo $i + 1; ?>">
        <?php echo $i + 1; ?>
      </a>
    </li>

    <?php endfor ?>
    
    <li class="page-item <?php echo $_GET['pagina'] >= $num_for_pag ? 'disabled' : ''; ?>">
      <a class="but" href="marc.php?id_cat_marc=<?php echo $marca ?>&pagina=<?php echo $_GET['pagina']+1; ?>">
       Siguiente
       <i class="fas fa-arrow-circle-right"></i>
      </a>
    </li>
  </ul>
</nav>
</section>

<?php include_once 'includes/templates/footer.php';?>

