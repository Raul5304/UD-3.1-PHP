<?php
header("Content-Type: application/json; charset=UTF-8");

$archivo = "compra.txt";

if (file_exists($archivo)) {
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo json_encode($lineas, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode([]);
}
?>