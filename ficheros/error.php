<?php
    include_once 'subir_imagen.php';
    include 'form_imagen.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR EN FORMULARIO</title>
</head>
<body>
    <h1>ERROR!</h1><br><br>

    <?php
        $titulo = $_POST['titulo'];
        $nombreArchivo = basename($_FILES['imagen']['name']);

        if (empty($titulo)){
            echo "No has introducido un nombre <br>";
        }
        elseif(empty($nombreArchivo)){
            echo "No has introducido una imágen <br>";
        };
    ?>
    <a href="form_imagen.php">Volver al formulario<a>
</body>
</html>