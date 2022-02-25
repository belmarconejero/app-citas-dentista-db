<?php
if(isset( $_GET['id'])):
    $id = $_GET['id'];

    include 'conexion-db.php';

    $sql = "DELETE FROM citas
    WHERE id = $id;
    ";
$resultado = $conn -> query($sql);
if($resultado){
    header('Location:lista-citas.php?eliminar=ok');
}else{
    header('Location:lista-citas.php?eliminar=ko');
}

endif;

