<?php
$host = "localhost";
$db = "guia";
$user = "root";
$password = "";

// Crear la conexión
$conexion = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
