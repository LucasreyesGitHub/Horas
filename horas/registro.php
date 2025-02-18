<?php
// Parámetros de conexión a la base de datos
$host = "bh9mruuijpmdvpps5dcm-mysql.services.clever-cloud.com"; // Host de Clever Cloud
$dbname = "bh9mruuijpmdvpps5dcm"; // Nombre de la base de datos
$username = "ubnyscrxodyrk7lx"; // Usuario de MySQL en Clever Cloud
$password = "tu_contgztpvRJ0dbis7xl0OxGCraseña_mysql"; // Contraseña de MySQL en Clever Cloud

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario y sanitizar las entradas
$email = mysqli_real_escape_string($conn, $_POST['email']);
$accion = mysqli_real_escape_string($conn, $_POST['accion']);
$fecha = date('Y-m-d'); // Fecha actual
$hora = date('H:i:s'); // Hora actual

// Mostrar los datos recibidos del formulario para depuración
var_dump($_POST);

// Insertar los datos en la base de datos
$sql = "INSERT INTO registros (email, accion, fecha, hora) VALUES ('$email', '$accion', '$fecha', '$hora')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro guardado exitosamente.";
} else {
    echo "Error: " . $conn->error; // Muestra el error de la base de datos
}

// Cerrar la conexión
$conn->close();
?>
