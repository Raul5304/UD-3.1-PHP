<?php
$nombre = $_POST['nombre'] ?? '';
$color = $_POST['color'] ?? '';

setcookie("nombreusu", $nombre, time() + 300, "/");
setcookie("colorusu", $color, time() + 300, "/");


header("Location: index.php");
exit;
?>