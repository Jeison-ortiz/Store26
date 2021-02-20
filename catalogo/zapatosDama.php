<?php
    include_once '../conexion.php';
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>

    <link rel="stylesheet" href="../css/styleRestringidoAdmin.css">
    <link rel="stylesheet" href="../css/mostrarArticulo.css">

    <link rel="stylesheet" href="../css/styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- iconos -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    
</head>
<body>
    <header>
        <?php include '../templates/header.php'?>
    </header>
    
</body>
</html>

<?php
    
    $sql_leer = 'SELECT * FROM zapatosfemeninos';
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();
    $resultado = $gsent->fetchAll();
?>
    <div class = "container">
        <?php
   
        foreach($resultado as $dato):?>  
            <?php $aux= $dato['id'];?>

            <div class="card container card-body col-sm" id = "containerCard">
            
                <img src="data:image/jpg;base64,<?php echo base64_encode($dato['imagen']); ?>" id="imgCard">
                
                <div class ="container">
                    <div >
                        <b> <p class="card-title"><?php echo $dato['marca'];?></p></b>
                        <p class="card-text"> <?php echo $dato['descripcion'];?> </p>
                        
                    </div>
                    <div >
                        <div id = "cardMarca">
                            <b>  <p class = "card-text" > <?php echo '$ '. $dato['precio'];?> </p></b>
                            <p class = "card-text"> <?php echo ' Talla: '.$dato['talla'];?> </p>
                        </div>
                        <div id = "cardPrecio">
                            <img src="../imagenes/logo/favoritos.png" id="favoritos">
                            <a href="actualizarArticulos.php?id=<?php echo $dato['id'];?>&tabla=<?php echo $tablaDatos;?>"><img src="../imagenes/logo/carrito.png" id="carrito"></a>
                        </div>
                    </div>
                </div>
            
            </div>
        <?php endforeach ?> 
    </div>
    <footer>
        <?php include '../templates/footer.php'?>
    </footer>