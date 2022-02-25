<?php
//declaramos las variables y las inicializamos con cadena vacia
$nombre = $email = $telefono = $fecha = $hora = $observaciones = '';
$fechasolicitud = date("d-m-Y H:i:s");
//recogemos las variables que nos llegan del formulario.
// solo cogemos si nos llegan con metodo post
if ($_SERVER['REQUEST_METHOD']=='POST'){
    //las asignamos a las variables filtradas,no nos podran meter codigo script
  $nombre= htmlspecialchars($_POST['nombre']);
  $email= htmlspecialchars($_POST['email']);
  $telefono= htmlspecialchars($_POST['telefono']);
  $fecha= htmlspecialchars($_POST['fecha']);
  $hora= htmlspecialchars($_POST['hora']);
  $observaciones= htmlspecialchars($_POST['observaciones']);
}
//enviar por email
/* $asunto ="cita medico de $nombre ";
$smg="
Datos de la cita
Fecha: $fechasolicitud
nombre:$nombre
email:$email
telefono:$telefono
fecha:$fecha
hora:$hora
Observaciones:$observaciones
"; */
//para mandar con copia el $headers
/* $headers= "CC: $email";
mail("nachobelmar@yahoo.es",$asunto,$smg,$headers);
 */

//registrarlo en la base de datos
$fechahora = "$fecha $hora";
include 'conexion-db.php';
$sql="INSERT INTO citas(paciente,telefono,email,fecha_cita,observaciones)
VALUES('$nombre','$telefono','$email','$fechahora','$observaciones')";
$result = $conn -> query($sql);

$conn->close();

//le mandamos a lista-citas.php
header('Location:lista-citas.php');




?>