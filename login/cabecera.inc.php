<?php
    session_start();

    if(!isset($_SESSION['loginusu'])){
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera</title>
    <style>
        body{
            font-family: Arial;
            margin: 20px;
        }
        nav a{
            margin-right: 15px;
            text-decoration: none;
            color: #0066cc;
        }
        nav a:hover{
            text-decoration: underline;
        }
        hr{
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Página de inicio</a>
        <a href="pag1.php">Página 1</a>
        <a href="pag2.php">Página 2</a>
        <a href="logout.php" style="color: red;">Cerrar sesión</a>
    </nav>
    <hr>
</body>
</html>