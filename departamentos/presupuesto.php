<?php
$department = $_GET["departamento"];

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
<br><br>
<a href="form_dep2.php">Volver al formulario</a>