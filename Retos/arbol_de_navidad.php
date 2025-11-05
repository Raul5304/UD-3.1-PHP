<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árbol de navidad</title>
</head>
<body>
<h1>ARBOL DE NAVIDAD</h1>
 Dificultad: MEDIA<br><br>
 <p>Enunciado: Escribe un programa que le pida al usuario un entero N y
 dibuje un árbol de navidad de esa altura.</p><br><br>
<?php

 $numero = 10;
 $contador = $numero;

    for ($i = 1; $i <= $numero; $i++){
        $fila = '';
        $contador -= 1;
        if($i % 2 == 0){
            continue;
        }else{
            for ($z = 1; $z <= $contador; $z++){
                echo "&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++){
                $fila .= "*";
            }
            echo "$fila <br>";
        }
    }

?>
</body>
</html>
