<?php
$nombre = htmlspecialchars($_POST["nombre"]);
$apellidos = htmlspecialchars($_POST["apellidos"]);
$direccion = htmlspecialchars($_POST["direccion"]);
$poblacion = htmlspecialchars($_POST["poblacion"]);
$sexo = $_POST["sexo"];
$terminosAceptados = $_POST["terminos"];

if (empty($nombre) or empty($apellidos) or empty($direccion) or empty($sexo)){
    header("Location: redirección.html");
    exit;
}

if (!empty($nombre) and !empty($apellidos) and !empty($direccion) and !empty($poblacion) and !empty($sexo)){
    $patron_población = "/^[0-9]{5}[-][a-zA-Z]+$/";
    if (preg_match($patron_población, $poblacion)){
        if ($sexo === "masculino"){
            $saludo = "Bienvenido";
        } else{
            $saludo = "Bienvenida";
        }
        echo "$saludo, $nombre $apellidos";
    } else{
        echo "Has introducido una población inválida, asegurate de seguir los patrones indicados.";
    }
}

?>