<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bookName = $_REQUEST["name"];
    $search = $_REQUEST["search"];
    $booktype = $_REQUEST["booktype"];

    echo "Tu nombre de libro es " . $bookName . "<br>";
    echo "Buscaste por " . $search . "<br>";
    echo "Tu tipo de libro es " . $booktype . "<br>";
    ?>

    <a href="form_libros.php">Volver al formulario</a>
</body> 
</html>
