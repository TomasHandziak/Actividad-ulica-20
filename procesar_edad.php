<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $edad = (int)$_POST['edad'];

    echo "<h1>Resultado</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Edad: $edad</p>";
    echo $edad >= 18 ? "<p>Es mayor de edad</p>" : "<p>Es menor de edad</p>";
}
?>
