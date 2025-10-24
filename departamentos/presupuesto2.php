<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="departamento">Departamento</label><br>

        <select id="departamento" name="departamento">
            <option value="INFORMÁTICA">Informática</option>
            <option value="LENGUA">Lengua</option>
            <option value="MATEMÁTICAS">Matemáticas</option>
            <option value="INGLÉS">Inglés</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form><br><br>
    <?php
        $department = $_POST["departamento"];

        $presupuesto = [
            "INFORMÁTICA" => 500,
            "LENGUA" => 300,
            "MATEMÁTICAS" => 300,
            "INGLÉS" => 400
        ];

        if (array_key_exists($department, $presupuesto)){
            echo "El departamento $department tiene un presupuesto de " . $presupuesto[$department] . " euros";
        }else{
            echo "El departamento seleccionado no existe";
        }
        ?>
</body>
</html>