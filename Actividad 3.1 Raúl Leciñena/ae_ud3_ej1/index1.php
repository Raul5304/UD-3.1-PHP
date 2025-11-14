<?php
    include "functions1.inc.php";

    $resultado = procesarFormulario();
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="styles1.css">
    </head>
    <body>

    <h2>Formulario de Registro</h2>

    <form action="index1.php" method="POST" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="nombre"><br><br>

        Email: <br>
        <input type="email" name="email"><br><br>

        Género: <br>
        <input type="radio" name="genero" value="Hombre"> Hombre<br>
        <input type="radio" name="genero" value="Mujer"> Mujer<br>
        <input type="radio" name="genero" value="Otro"> Otro<br><br>

        Lenguajes favoritos:<br>
        <input type="checkbox" name="lenguajes[]" value="PHP"> PHP<br>
        <input type="checkbox" name="lenguajes[]" value="JavaScript"> JavaScript<br>
        <input type="checkbox" name="lenguajes[]" value="Python"> Python<br>
        <input type="checkbox" name="lenguajes[]" value="Java"> Java<br><br>

        Subir imagen:<br>
        <input type="file" name="imagen" accept="image/*"><br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>
    <h3>Enlaces para enviar datos por GET:</h3>
    <p>
        <a href="index1.php?nombre=Pepe">Enviar sólo nombre pepe</a><br>

        <a href="index1.php?nombre=Pepe&email=Pepe@gmail.com">Enviar nombre Pepe con su email</a><br>

        <a href="index1.php?nombre=Pepe&genero=Hombre&lenguajes[]=PHP&lenguajes[]=JavaScript">
            Enviar nombre pepe, género hombre y Lenguajes PHP + JS
        </a>
    </p>
    <hr>

    <?php
    if ($resultado['mostrarDatos']) {
        mostrarDatos($resultado['datos']);
    }

    if (!empty($resultado['errores'])) {
        echo "<h3>Errores:</h3><ul class='errores'>";
        foreach ($resultado['errores'] as $e) {
            echo "<li>" . htmlspecialchars($e) . "</li>";
        }
        echo "</ul>";
    }
    ?>
    </body>
</html>

