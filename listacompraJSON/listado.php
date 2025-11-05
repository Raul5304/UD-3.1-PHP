<?php
$fichero = "productos.php";

if (!file_exists($fichero)) {
    echo "<p style='color:red;'>El archivo de productos no existe.</p>";
    exit;
}

json_encode($fichero);

echo "<ul>";
foreach ($fichero as $producto) {
    echo "<li>" . htmlspecialchars($producto) . "</li>";
}
echo "</ul>";
?>