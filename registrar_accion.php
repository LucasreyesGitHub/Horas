<?php
require_once('db_connect.php');

// Obtener datos del formulario
$email = $_POST['email'];
$accion = $_POST['accion'];
$fecha = date("Y-m-d");
$hora = date("H:i:s"); // Hora actual

// Insertar en la base de datos
$query = "INSERT INTO registros (email, accion, fecha, hora) 
          VALUES ('$email', '$accion', '$fecha', '$hora')";

if ($conn->query($query) === TRUE) {
    echo "Acción registrada con éxito!";
    echo "<br><a href='empleados.html'>Volver</a>";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
