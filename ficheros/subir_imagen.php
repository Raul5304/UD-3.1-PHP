<?php
    $titulo = htmlspecialchars($_POST["titulo"]);

    $directorio = "img/";
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true); // Check de directorio
    }

    $nombreArchivo = basename($_FILES['imagen']['name']);
    $rutaDestino = $directorio . $nombreArchivo;

    if (empty($titulo) or empty($nombreArchivo)){
        header("Location:error.php");
        exit;
    }

    // Pa mover el archivo a la carpeta img
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
        echo "<h2>Imagen subida correctamente</h2>";
        echo "<p>Título: " . htmlspecialchars($titulo) . "</p>";
        echo "<img src='$rutaDestino' alt='Imagen subida' style='max-width:400px;'>";
    } else {
        echo "Error al mover el archivo.";
    }
?>