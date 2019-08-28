<?php include_once 'includes/templates/header.php';?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/amistad.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/accesorios_page.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/contacto2.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/contacto.png" alt="Flower">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">
            Llena el Formulario de Contacto
        </h2>
        <form class="contacto"  name="guardar-contacto" id="guardar-contacto" action="includes/functions/contact.php" method="POST">

            <fieldset class="info-per">
                
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre">
                <div id="mensaje1" class="errores">Porfavor Ingresa tu Nombre</div>

                <label for="nombre">Apellido:</label>
                <input type="text" name="apellido" id="apellido" placeholder="Tu Apellido">
                <div id="mensaje2" class="errores">Porfavor Ingresa tu Apellido</div>

                <label for="e-mail">E-mail:</label>
                <input type="email" name="email" id="e-mail" placeholder="Tu E-mail" required>
                <div id="mensaje3" class="errores">Porfavor Ingresa tu Correo o Correo Invalido</div>


                <label for="telefono">Telefono:</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Tu Telefono" required>
                <div id="mensaje4" class="errores">Porfavor Ingresa tu Telefono</div>


                <label for="mensaje">Mensaje:</label>
                <textarea  name="mensaje" id="Mensaje" ></textarea>
                
               
            </fieldset>

            <fieldset>

                <label for="Cantidad">Cantidad</label>
                <input type="number" name="cantidad" min="0" max="100" id="cantidad">
                <div id="mensaje4" class="errores">Ingresa la Cantidad del Pedido</div>

            </fieldset>

            <fieldset>

                <legend>Contacto</legend>

                <p>Como desea ser Contactado:</p>

                <div class="forma-contacto">
                    
                    <input type="radio" name="contact" value="1" id="1">
                    <label for="1">Telefono</label>
                   
                    <input type="radio" name="contact" value="2" id="2">
                    <label for="2">Correo</label>
                </div>

                <p>Si Eligio Telefono, Por Favor elija Fecha y Hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" name="hora" id="hora" min="09:00" max="18:00">
            </fieldset>
            <div class="box-footer">
                        <input type="hidden" name="contacto" value="nuevo">
                        <button type="submit" class="btn btn-success" id="crear_registro">Añadir</button>
            </div>
        </form>
    </main>

        
<?php include_once 'includes/templates/footer.php';?>