<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app_citas_dentista";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Conexion fallida: " . $conn->connect_error);
}
