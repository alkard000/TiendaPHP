<?php include_once 'includes/templates/header.php';?>
<?php  
    $id = $_GET['id_event'] ;
    if(!filter_var($id, FILTER_VALIDATE_INT)){
        die("ERROR");
    }
?>
    <script src="js/mapa.js"></script>
    <section class="seccion clearfix calendario">
        <h2>Informacion del Evento</h2>

        <?php
        try{
            require_once('includes/functions/bd_conection.php');
            $sql = " SELECT * FROM eventos WHERE id_event=$id ";
            $resultado = $conn -> query($sql);
        } catch(\Exception $e){

            echo $e->getMessage();
        }
        ?>
        <div class=" contenedor info-calendar">
            <?php
                $calendario= array();
                while($eventos = $resultado -> fetch_assoc()){ 

                    //catch date of event

                    $fecha = $eventos['date_event'];

                    $evento = array(
                        'title' => $eventos['name_event'],
                        'date' => $eventos['date_event'],
                        'hour' => $eventos['hour_event'],
                        'categories' => $eventos['pass'],
                        'sport' => $eventos['sport_type'],
                        'image' => $eventos['url_image']
                    );  
                    
                $calendario[$fecha][] = $evento;

                ?>
                
            <?php  }//while of fetch_assoc()  ?>
            <?php
                //PRINT EVENTE
                foreach($calendario as $dia => $lista_eventos){ ?>

                    <?php foreach($lista_eventos as $evento){ ?>
                        <div class="info-dia">
                            <div class="info-image">
                            <img src="<?php echo $evento['image']; ?>">
                        </div>
                        <div class="info-info">
                            <ul>
                                <li>
                                    <h3 class="info-titulo" ><?php echo $evento['title'] ?></h3>
                                </li>
                                <li>
                                    <p class="info-hora" >
                                    <i class="far fa-clock" aria-hidden="true" ></i>
                                    <?php echo $evento['date'] . "  " . $evento['hour']; ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    <i class="fas fa-hand-rock"></i><?php echo $evento['categories'] ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-volleyball-ball" aria-hidden="true" ></i>  
                                        <?php echo $evento['sport'] ?>
                                    </p>
                                </li>
                                <li><p class="description-event">Deportes Totales estara presente en este campeonato.<br>La competencia será en la Piscina Temperada de Peñalolén (Ricardo Grellet de los Reyes 2101), de 25 metros y con 6 pistas. <br>Se seguirá la reglamentación Fina Máster y la fiscalización estará a cargo de AJUNACH.

Las categorías en las que se disputará la copa, serán Novicios, Pre Máster y Máster. Los nadadores podrán participar como máximo en dos pruebas individuales y una prueba de relevos. El club que logre obtener la mayor cantidad de puntos a nivel de Pre Máster y Máster, será el ganador de la VIII Copa Peñalolén Máster.

El horario de partida de las competencias está programado a las 14:00.</p></li>
                            </ul>
                        </div>
                        


                            <!--<pre>
                                <?php //var_dump($evento); ?>
                            </pre>-->
                        </div>
                    <?php } //end foreach event?>
                <?php } //end foreahc day?>

        </div>

        <?php 
            $conn -> close();
        ?>
       
       


<div class="contenedor redes-sociales-info">
    <h3>Mas informacion en:</h3>
    <ul>
        <li><i class="fab fa-chrome"></i><a href="https://portal.deportespenalolen.cl/" >Portal Web</a></li>
        <li><i class="fab fa-facebook"></i><a href="https://www.facebook.com/munipena/">Facebook</a></li>
        <li><i class="fab fa-instagram"></i><a href="https://www.instagram.com/cordeportes/?hl=es-la">Instagram</a></li>
    </ul>
</div>
    </section>
     <div id="map" class="map"></div>

<h2>Galeria de imagenes</h2>

<p class="contenedor">Aun no hay Imagenes disponibles</p>


<?php include_once 'includes/templates/footer.php';?>
