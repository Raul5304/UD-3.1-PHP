<?php
    function procesarFormulario() {
        $resultado = [
            'mostrarDatos' => false,
            'errores' => [],
            'datos' => []
        ];

        $metodo = $_SERVER['REQUEST_METHOD'];

        if ($metodo == 'POST' || $metodo == 'GET') {
            $nombre = trim($_REQUEST['nombre'] ?? '');
            $email = trim($_REQUEST['email'] ?? '');
            $genero = $_REQUEST['genero'] ?? '';
            $lenguajes = $_REQUEST['lenguajes'] ?? [];

            if ($nombre === '') {
                $resultado['errores'][] = "El campo Nombre es obligatorio.";
            }
            if ($email === '') {
                $resultado['errores'][] = "El campo Email es obligatorio.";
            }
            if ($genero === '') {
                $resultado['errores'][] = "Debe seleccionar un Género.";
            }

            $imagenSubida = "";
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
                $uploadDir = __DIR__ . "/uploads/";
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $nombreImagen = basename($_FILES['imagen']['name']);
                $rutaDestino = $uploadDir . $nombreImagen;

                if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
                    $imagenSubida = "uploads/" . $nombreImagen;
                } else {
                    $resultado['errores'][] = "No se pudo subir la imagen.";
                }
            }

            if (empty($resultado['errores'])) {
                $resultado['mostrarDatos'] = true;
                $resultado['datos'] = [
                    'metodo' => $metodo,
                    'nombre' => $nombre,
                    'email' => $email,
                    'genero' => $genero,
                    'lenguajes' => $lenguajes,
                    'imagen' => $imagenSubida
                ];
            }
        }

        return $resultado;
    }

    function mostrarDatos($datos) {
        ?>
        <h2>Datos Recibidos</h2>
        <p><strong>Método usado:</strong> <?= htmlspecialchars($datos['metodo']) ?></p>
        <p><strong>Nombre:</strong> <?= htmlspecialchars($datos['nombre']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($datos['email']) ?></p>
        <p><strong>Género:</strong> <?= htmlspecialchars($datos['genero']) ?></p>
        <p><strong>Lenguajes favoritos:</strong></p>
        <ul>
            <?php foreach ($datos['lenguajes'] as $l): ?>
                <li><?= htmlspecialchars($l) ?></li>
            <?php endforeach; ?>
        </ul>

        <?php if (!empty($datos['imagen'])): ?>
            <p><strong>Imagen subida:</strong></p>
            <img src="<?= htmlspecialchars($datos['imagen']) ?>" width="150">
        <?php endif; ?>
        <?php
    }
?>

