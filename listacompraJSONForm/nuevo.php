<?php
header("Content-Type: application/json; charset=UTF-8");

$archivo = "compra.txt";

// Recoger el nuevo artículo del formulario
if (isset($_POST["articulo"]) && trim($_POST["articulo"]) !== "") {
    $nuevo = trim($_POST["articulo"]);
    
    // Añadir al archivo
    file_put_contents($archivo, $nuevo . PHP_EOL, FILE_APPEND);
}

// Incluir listado.php para devolver la lista actualizada como JSON
include("listado.php");
?>