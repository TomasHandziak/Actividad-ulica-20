<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $deportes = $_POST['deportes'];
    $cantidad = count($deportes);

    echo "<h1>Deportes Practicados</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Deportes seleccionados:</p><ul>";
    foreach ($deportes as $deporte) {
        echo "<li>$deporte</li>";
    }
    echo "</ul>";
    echo "<p>Total de deportes practicados: $cantidad</p>";
}
?>
