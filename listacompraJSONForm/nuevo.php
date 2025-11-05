<?php
header("Content-Type: application/json; charset=UTF-8");

$archivo = "compra.txt";

if (isset($_POST["articulo"]) && trim($_POST["articulo"]) !== "") {
    $nuevo = trim($_POST["articulo"]);
    
    file_put_contents($archivo, $nuevo . PHP_EOL, FILE_APPEND);
}

include("listado.php");
?>