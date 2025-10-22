<?php
$department = $_REQUEST["departamento"];

switch($department){
    case "INFORMÁTICA":
        echo "$department = 500 euros";
        break;
    case "LENGUA":
        echo "$department = 300 euros";
        break;
    case "MATEMÁTICAS":
        echo "$department = 300 euros";
        break;
    case "INGLÉS":
        echo "$department = 400 euros";
        break;
}

?>
<br><br>
<a href="form_dep.php">Volver al formulario</a>