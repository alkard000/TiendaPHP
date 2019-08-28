<?php

$conn = new mysqli('localhost', 'root', 'root', 'ussers');

if($conn->connect_error){
    echo $error -> $conn->connect_error;
}

?>
<?php



$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$cantidad=$_POST['cantidad'];
$contacto=$_POST['contact'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];


if($_POST['contacto'] == 'nuevo') {
   

    try{

        $stmt = $conn -> prepare(" INSERT INTO  datos 
                                                (nombre, 
                                                apellido, 
                                                email, 
                                                telefono, 
                                                mensaje, 
                                                cantidad, 
                                                contact, 
                                                fecha, 
                                                hora ) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param("sssssssss", $nombre, $apellido, $email, $telefono, $mensaje, $cantidad, $contacto, $fecha, $hora  );
        $stmt->execute();
        $id_contacto = $stmt->insert_id;
        if($id_contacto > 0){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_usser' => $id_contacto
            );
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
        }catch (Exception $e){
            echo "Error" . $e->getMessage();
        }
        die(json_encode($respuesta)); 
}


?>