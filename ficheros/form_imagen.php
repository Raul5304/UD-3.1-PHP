<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>
<body>
    <form action="subir_imagen.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título de la imagen:</label><br>
        <input type="text" name="titulo" id="titulo" maxlength="200"><br><br>

        <label for="imagen">Selecciona una imagen:</label><br>
        <input type="file" name="imagen" id="imagen" accept="image/*"><br><br>

        <button type="submit">Subir imagen</button>
    </form>
</body>
</html>