
<?php
$fichero = "productos.txt";

if (!file_exists($fichero)) {
    echo "<p style='color:red;'>El archivo de productos no existe.</p>";
    exit;
}

$lineas = file($fichero, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "<ul>";
foreach ($lineas as $producto) {
    echo "<li>" . htmlspecialchars($producto) . "</li>";
}
echo "</ul>";
?>