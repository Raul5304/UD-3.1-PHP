<?php
session_start();

$error = "";

// redirigir si ya está loggeado
if (isset($_SESSION['loginusu'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $valido = false;

    // Abrir ficheros de usuarios
    $fichero = fopen("usuarios.txt", "r");
    if ($fichero) {
        while (($linea = fgets($fichero)) !== false) {
            list($user, $pass) = explode(":", trim($linea));
            if ($usuario === $user && $password === $pass) {
                $valido = true;
                break;
            }
        }
        fclose($fichero);
    }

    if ($valido) {
        $_SESSION['loginusu'] = $usuario;
        header("Location: index.php");
        exit;
    } else {
        $error = "❌ Login o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { 
            font-family: Arial, sans-serif; margin: 40px; 
        }
        form { 
            max-width: 300px; margin: auto; 
        }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 8px; margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #004c99;
        }
        .error { 
            color: red; text-align: center; margin-bottom: 15px; 
        }
    </style>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="login.php">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>