<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="datos_personales.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" maxlength="20" /><br><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" maxlength="40" /><br><br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" maxlength="50" /><br><br>
        <label for="poblacion">Población ej. 12345-Madrid:</label>
        <input type="text" name="poblacion" id="poblacion" maxlength="50" /><br><br>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br><br>
        <label for="terminos">He aceptado los términos y condiciones</label>
        <input type="checkbox" name="terminos" id="terminos" required>
        <br><br>

        <button type="submit">Enviar</button>
</body>
</html>