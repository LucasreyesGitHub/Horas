<?php
$servername = "bh9mruuijpmdvpps5dcm-mysql.services.clever-cloud.com";
$username = "ubnyscrxodyrk7lx"; // Tu usuario
$password = "gztpvRJ0dbis7xl0OxGC"; // Tu contraseña
$dbname = "bh9mruuijpmdvpps5dcm"; // Tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
