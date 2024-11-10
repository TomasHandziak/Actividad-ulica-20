<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $ingresos = (int)$_POST['ingresos'];

    echo "<h1>Verificación de Ingresos</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Ingresos mensuales: $ingresos</p>";
    if ($ingresos > 3000) {
        echo "<p>Debe pagar impuestos a las ganancias.</p>";
    } else {
        echo "<p>No debe pagar impuestos a las ganancias.</p>";
    }
}
?>
