<?php

include_once'../conexion.php';

$sql_leer = 'SELECT * FROM zapatosfemeninos';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();
//var_dump($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/mostrarArticulo.css">

    <title>Document</title>
</head>

<body>
    <div class = "container mt-5">
        <?php
            foreach($resultado as $dato):?>          
            <?php echo 'entre'?>
            <div class="card">
            <img src="data:image/jpg;base64,<?php echo base64_encode($dato['imagen']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dato['marca'];?></h5>
                <p class="card-text"> <?php echo $dato['descripcion'];?> </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php endforeach ?>     
    </div>
</body>
</html>