<?php
    $color = $_COOKIE['colorusu'] ?? '';
    $nombre = $_COOKIE['nombreusu'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <style>
        body{
            background-color: <?= htmlspecialchars($color) ?>;
        }
    </style>
</head>
<body>
    <?php
    if ($nombre) {
        echo "<h2>Bienvenido, " . htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') . "!</h2>";
        echo "<p>Tu color preferido es: <span style='color:$color;'>$color</span></p>";
        echo "<a href='borrar_prefs.php'>Borrar preferencias</a><br><br>";
    } else {
        echo "<h2>Página de inicio</h2>";
    }
    
    echo "<a href='preferencias.php'>Cambiar preferencias</a>";
    echo "</body></html>";
    ?>
</body>
</html>