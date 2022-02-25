<?php
// declaramos las varibles y las inicializamos con cadena vacía.
$nombre=$email=$telefono=$fecha=$hora=$observaciones='';
$fechasolicitud = date("d-m-Y H:i:s");
// recogemos las variables que nos llegan por el formulario
if($_SERVER['REQUEST_METHOD']=='POST'){
    // las asignamos a las variables filtradas
    $id =htmlspecialchars($_POST['id']);
    $nombre =htmlspecialchars($_POST['nombre']);
    $email =htmlspecialchars($_POST['email']);
    $telefono =htmlspecialchars($_POST['telefono']);
    $fecha =htmlspecialchars($_POST['fecha']);
    $hora =htmlspecialchars($_POST['hora']);
    $observaciones =htmlspecialchars($_POST['observaciones']);
}
//registrarlo en la base de datos
$fechahora="$fecha $hora";
include 'conexion-db.php';
$sql="UPDATE  citas
SET paciente= '$nombre',
telefono ='$telefono',
email ='$email',
fecha_cita = '$fechahora',
observaciones ='$observaciones'
WHERE id = $id;
";
$result = $conn -> query($sql);
$conn->close();
 // le mandamos a lista-citas.php
 header("location:lista-citas.php?modificar=ok&id=$id");