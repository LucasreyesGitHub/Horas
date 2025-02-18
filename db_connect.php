<?php
// Conexión con la base de datos en Clever Cloud
$host = "tu_host_de_clever_cloud"; // Ejemplo: bh9mruuijpmdvpps5dcm-mysql.services.clever-cloud.com
$dbname = "tu_nombre_de_base_de_datos";
$username = "tu_usuario_mysql";
$password = "tu_contraseña_mysql";

// Conectar a la base de datos
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}
?>
