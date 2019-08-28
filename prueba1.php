<?php include_once 'includes/templates/header.php';?>

<?php require_once('includes/functions/conn-prueba.php');?>

<style>
    .table-bordered>tbody>tr>td{
    border: 0px solid #ddd;
}
table.dataTable {
    background-color: #ffffff;
}
</style>

<section class="">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body clothes-box">
                <aside class="filters">
                <table  border="0" cellspacing="5" cellpadding="5">
                    <tbody>
                        <tr>
                            <td>Minimum age:</td>
                            <td><input type="number" id="min" name="min"></td>
                        </tr>
                        <tr>
                            <td>Maximum age:</td>
                            <td><input type="number" id="max" name="max"></td>
                        </tr>
                    </tbody>
                </table>
                </aside>
                    <table id="clothes" class="table table-cloth">
                    <thead style="display:none;">
                            <tr>
                                <th>Imagenes</th>
                                <th>Marca</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            try{
                            $sql = " SELECT     id_cloth, 
                                                url_images, 
                                                url_image, 
                                                name_cloth,
                                                price, 
                                                pass, 
                                                marca, 
                                                cloth_type, 
                                                category_sports,
                                                cat_genre ";
                            $sql .= " FROM info_cloth ";
                            $sql .= " INNER JOIN cat_marc ";
                            $sql .= " ON info_cloth.id_cat_marc = cat_marc.id_marc ";
                            $sql .= " INNER JOIN cat_type ";
                            $sql .= " ON info_cloth.id_cat_type = cat_type.id_type ";
                            $sql .= " INNER JOIN clothes_category ";
                            $sql .= " ON info_cloth.id_cloth_cat = clothes_category.ID_clothes_sports ";
                            $sql .= " INNER JOIN clothes_genre ";
                            $sql .= " ON info_cloth.id_cloth_genre = clothes_genre.id_cat_genre ";

                            $resultado = $conn->query($sql);
                            }catch (Exception $e){
                            $error = $e->getMessage();
                            echo $error;
                            }
                            while($admin = $resultado->fetch_assoc()){ 
                            ?>
                            
                            <tr>
                                <td>
                                    <img src="<?php echo $admin['url_images'];?>" alt="" width="70%" class="main-img" />
                                </td>
                            
                                <td> <?php echo $admin['marca']; ?> </td>
                                <td class="info-clothes">

                                    <?php echo $admin['name_cloth']; ?>
                                    <a href="product.php?id_cloth=<?php echo $admin['id_cloth']; ?>"class="btn">
                                    <i class="fas fa-arrow-circle-right"></i>Cotizar</a>
                                    <a>$<?php echo $admin['price']; ?></a>
                                </td>
                            </tr>
                            <?php }; ?>
                        </tbody>
                        <tfoot style="display:none;">
                            <tr>
                                <th>Nombre Evento</th>
                                <th>Marca</th>
                                <th>URL</th>  
                            </tr>
                        </tfoot>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div><!-- /.row -->
</section>


<?php include_once 'includes/templates/footer.php';?>
