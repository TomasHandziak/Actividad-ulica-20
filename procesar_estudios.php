<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $estudios = $_POST['estudios'];

    echo "<h1>Resultado de Estudios</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Nivel de estudios: $estudios</p>";
}
?>
