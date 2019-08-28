<?php include_once 'includes/templates/header.php';?>

<?php require_once('includes/functions/bd_conection.php');?>

<section class="contenedor">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">Sala de Eventos</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="eventos" class="table table-striped table-bordered table-event">
                        <thead>
                            <tr>
                                <th>Nombre Evento</th>
                                <th>Fecha Evento</th>
                                <th>Hora Evento</th>
                                <th>Categorias</th>
                                <th>Tipo de deporte</th>
                                <th>Categoria evento</th>
                                <th>Imagen</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            try{
                            $sql = " SELECT   id_event, 
                                                name_event, 
                                                date_event, 
                                                hour_event,
                                                pass, 
                                                sport_type, 
                                                id_event_category, 
                                                ID_type_sport, 
                                                url_image  
                                                FROM eventos ";
                            $resultado = $conn->query($sql);
                            }catch (Exception $e){
                            $error = $e->getMessage();
                            echo $error;
                            }
                            while($admin = $resultado->fetch_assoc()){ ?>
                            <tr>
                                <td>
                                <?php echo $admin['name_event'];?>
                                <td>
                                <?php echo $admin['date_event']; ?> 
                                </td>
                                <td>
                                <?php echo $admin['hour_event']; ?>
                                </td>
                                <td>
                                <?php echo $admin['pass']; ?>
                                </td>
                                <td>
                                <?php echo $admin['sport_type']; ?>
                                </td>
                                <td>
                                <?php echo $admin['id_event_category']; ?>
                                </td>
                                <td>
                                <img src="<?php echo $admin['url_image']; ?>" width="25%">
                                </td>
                                <td>
                                <a href="info_events.php?id_event=<?php echo $admin['id_event']; ?>"class="btn"><i class="fas fa-arrow-circle-right"></i>
                                Ver Mas</a>
                                </td>
                            </tr>
                            <?php }; ?>
                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <th>Nombre Evento</th>
                                <th>Fecha Evento</th>
                                <th>Hora Evento</th>
                                <th>Categorias</th>
                                <th>Tipo de deporte</th>
                                <th>Categoria evento</th>
                                <th>Imagen</th>
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
