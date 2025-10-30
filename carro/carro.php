<?php
    session_start();

    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de Pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de Baloncesto Molten", "precio" => 20)
    );

    // Si no hay carro
    if(!isset($_SESSION['carro'])){
        $_SESSION['carro'] = array();
    };

    // Selección de vaciar
    if(isset($_GET['accion']) and $_GET['accion'] == 'vaciar'){
        $_SESSION['carro'] = array();
        header("Location: carro.php");
        exit;
    };

    // Selección de artículo
    if (isset($_GET['id'])){
        $id = intval($_GET['id']);
        foreach($articulos as $articulo){
            if($articulo['id'] == $id){
                $_SESSION['carro'][] = $articulo;
                break;
            }
        }
    } 

    // Total precio
    $totalprecio = 0;
    foreach($_SESSION['carro'] as $obj){
        $totalprecio += $obj['precio'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro de la compra</title>
    <style>
        body{
            font-family: Arial;
            margin: 30px;
        }
        h1{
            color: #333;
        }
        ul{
            list-style-type: none;
            padding: 0;
        }
        a{
            text-decoration: none;
            color: #0066cc;
        }
        a:hover{
            text-decoration: underline;
        }
        .carro{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Catálogo de Artículos</h1>
    <ul>
        <?php foreach($articulos as $articulo): ?>
        <li>
            <a href="carro.php?id=<?php echo $articulo['id']; ?>">
            <?php echo $articulo['nombre']; ?> (<?php echo $articulo['precio']; ?> euros)
            </a>
        </li>
        <?php endforeach ?>
    </ul>

    <div class="carro">
        <h2>Carro de la compra</h2>
        <?php if (count($_SESSION['carro']) > 0): ?>
            <ul>
                <?php foreach ($_SESSION['carro'] as $obj): ?>
                    <li><?php echo $obj['nombre'];?> (<?php echo $obj['precio']; ?> euros) </li>
                <?php endforeach ?>
            </ul>
            <p><strong>Total comprado: <?php echo $totalprecio; ?>€</strong></p>
            <a href="carro.php?accion=vaciar">Vaciar carro</a>
        <?php else: ?>
            <p>El carro está vacio</p>
        <?php endif ?>
    </div>
</body>
</html>