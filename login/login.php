<?php
    session_start();

    $error = "";

    if(isset($_SESSION['loginusu'])){
        header("Location: index.php");
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = htmlspecialchars(trim($_POST['usuario']));
        $contrasena = htmlspecialchars(trim($_POST['password']));
        $valido = false;
    }

    $fichero = fopen("usuarios.txt", "r");

    if($fichero){
        while(($linea = fgets($fichero)) !== false){
            list($user, $pass) = explode(":", trim($linea));
            if($usuario === $user and $contrasena === $pass){
                $valido = true;
                break;
            }
        }
        fclose($fichero);
    }
?>