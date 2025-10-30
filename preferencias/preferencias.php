<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preferencias del usuario</title>
</head>
<body>
    <h2>Selecciona tus preferencias</h2>
    <form action="guardar_prefs.php" method="post">
        <label for="nombre">Tu nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="color">Tu color favorito:</label><br>
        <input type="color" id="color" name="color" value="#ffffff"><br><br>

        <button type="submit">Guardar preferencias</button>
    </form>
</body>
</html>