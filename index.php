<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de PHP</title>
</head>
<body>
    <h1>Ejercicios de PHP</h1>

    <!-- Ejercicio 4: Número aleatorio y comparación -->
    <?php
    $num = rand(1, 100);
    echo "<p>Número aleatorio generado: $num</p>";
    echo ($num <= 50) ? "<p>El número es menor o igual a 50</p>" : "<p>El número es mayor a 50</p>";
    ?>

    <!-- Ejercicio 5: Tipos de variables -->
    <?php
    $integer = 42;
    $double = 3.1416;
    $string = "Hola, soy un string";
    $boolean = true;

    echo "<p>Entero: $integer</p>";
    echo "<p>Double: $double</p>";
    echo "<p>String: $string</p>";
    echo "<p>Booleano: " . ($boolean ? 'true' : 'false') . "</p>";
    ?>

    <!-- Ejercicio 9: Formulario (text y submit) -->
    <h2>Formulario de Edad</h2>
    <form action="procesar_edad.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="number" name="edad"><br>
        <input type="submit" value="Enviar">
    </form>

    <!-- Ejercicio 10: Formulario (radio) -->
    <h2>Formulario de Estudios</h2>
    <form action="procesar_estudios.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Nivel de estudios:<br>
        <input type="radio" name="estudios" value="Sin estudios"> Sin estudios<br>
        <input type="radio" name="estudios" value="Primarios"> Primarios<br>
        <input type="radio" name="estudios" value="Secundarios"> Secundarios<br>
        <input type="submit" value="Enviar">
    </form>

    <!-- Ejercicio 11: Formulario (checkbox) -->
    <h2>Deportes Practicados</h2>
    <form action="procesar_deportes.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Deportes:<br>
        <input type="checkbox" name="deportes[]" value="Fútbol"> Fútbol<br>
        <input type="checkbox" name="deportes[]" value="Básquet"> Básquet<br>
        <input type="checkbox" name="deportes[]" value="Tenis"> Tenis<br>
        <input type="checkbox" name="deportes[]" value="Vóley"> Vóley<br>
        <input type="submit" value="Enviar">
    </form>

    <!-- Ejercicio 12: Formulario (select) -->
    <h2>Formulario de Ingresos Mensuales</h2>
    <form action="procesar_ingresos.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Ingresos:<br>
        <select name="ingresos">
            <option value="1000">1-1000</option>
            <option value="3000">1001-3000</option>
            <option value="3001">Más de 3000</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
