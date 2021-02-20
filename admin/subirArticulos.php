<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!--my css -->
    <link rel="stylesheet" href="../css/styleRestringidoAdmin.css">
    <link rel="stylesheet" href="../css/mostrarArticulo.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- iconos -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        
    <!-- mi js: validaciones de formulario -->
    <script type="text/javascript" src="../AdminRestringido.js"></script>

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<img src="../imagenes/logo/Logo.png">

					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">						
						<div class = "d-flex" id= "ome">					
							<form action="" class = "aling-items-center"></form>
								<button class="btn  float-right btn-secondary me-2" data-toggle="collapse" data-target="#d1">Cerrar sesión</button>
                <a class = "btn btn-secondary" href="../cerrar.php"></a>
							</form>
						</div>					
          </div>
          
				</div>
			</nav>

  </header>

  <div class = "container">
    <h1 id = "titleGeneral">Añadir artículos</h1>
    
    <div class = "container" id = "formulario">
      <form action = " " method = "POST" enctype = "multipart/form-data" name = "formLoadArticule" class = "container" id = "formulario1">
          
          <select name ="selecta" class="form-select mb-3" aria-label="Default select example" id = "selectArticulos">
            <option value="0">Selecciona la categoría del articulo</option>
            <option value="1">Accesorios Femeninos</option>
            <option value="2">Accesorios Masculinos</option>
            <option value="3">Calzado Caballero</option>
            <option value="4">Calzado Dama</option>
            <option value="5">Ropa Caballero</option>
            <option value="6">Ropa Dama</option>
          </select>
          <input type="file" name = "imagen" placeholder = "Imagen" class = "mb-2" id = "imagen"><br>
          <input type="text" name = "marca" placeholder = "Marca" class = "mb-2" id = "marca"><br>
          <input type="number" name = "precio" placeholder = "Precio $" class = "mb-2" id = "precio"><br>
          <input type="number" name = "cantidad" placeholder = "Cantidad" class = "mb-2" id = "cantidad"><br>
          <input type="text" name = "descripcion" placeholder = "Descripción" class = "mb-2" id = "descripcion"><br>
          <input type="text" name = "talla" placeholder = "Talla" class = "mb-2" id = "talla"><br>
          <input disabled type = "submit" value = "Subir" name = "subir" class = "mb-3" id = "subir">
      </form>
    </div>

  </div>


    <?php 
    
    include_once '../conexion.php';
    session_start();
    //include_once 'update.php';
    
  // se cargan las imagenes

    $sql_leer = "SELECT * FROM $tablaDatos";
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();
    $resultado = $gsent->fetchAll();
    
    //var_dump($resultado);
    ?>

    <div class = "container mt-3">
        <?php
            foreach($resultado as $dato):?>  
            <?php $aux= $dato['id'];?>

            <div class="card container card-body col-sm" id = "containerCard">
              
              <img src="data:image/jpg;base64,<?php echo base64_encode($dato['imagen']); ?>" id="imgCard">
              
              <div class ="container">
                <div id = "cardMarca">
                  <h5 class="card-title"><?php echo $dato['marca'];?></h5>
                  <p class="card-text"> <?php echo $dato['descripcion'];?> </p>
                </div>
                <div id = "cardPrecio">
                  <p class = "card-text"> <?php echo '$ '. $dato['precio'];?> </p>
                  <p class = "card-text"> <?php echo '$ '. $dato['precio_nuevo'];?> </p>
                  <p class = "card-text"> <?php echo ' Talla: '.$dato['talla'];?> </p>
                </div>
              </div>" 

                <!--<button type = "submit"class = "btn-secondary" > Eliminar</button> -->
                <a href="subirArticulos.php?id=<?php echo $dato['id'];?>&tabla=<?php echo $tablaDatos;?>">eliminar</a>
              

            </div>
          <?php endforeach ?>     
      </div>


<footer class = "container-fluid">
          <h4>Conocenos y contactanos</h4>
        
        <div class = "container-fluid">
          <nav class = "row">
   <!--         <a href="index.php" class = "col-3 text-reset text-uppercase aling-items-center"><img id = "logo" src="imagenes/logo/Logo.png"></a>
      -->     
            <ul class = "col-3 list-unstyled" id = "footerPrivacity">
              <li class = "font-weight-bold text-uppercase ">acerca de Store26</li>
              <li ><a href="#">Términos y Condiciones</a></li>
              <li><a href="#">Política de Privacidad</a></li>
              <li><a href="#">Aviso de Privacidad</a></li>
              <li><a href="#">Política de Datos</a></li>
              
            </ul>

            <ul class = "col-3 list-unstyled">
              <li class = "font-weight-bold text-uppercase">Store26</li>
              <p>Store26 ofrece productos garantizados y de muy alta calidad, nuestro compromiso es brindarte lo mejor a un muy buen precio y en la comodidad de tu casa.</p>
              
            </ul>

            <ul class = "col-3 list-unstyled aling-items-center" >
              <li class = "font-weight-bold text-uppercase">Redes sociales</li>
              <li><img src="https://w7.pngwing.com/pngs/621/612/png-transparent-smartphone-application-icon-logo-business-watsapp-grass-desktop-wallpaper-%D0%B1%D0%B0%D1%80%D0%B0%D1%85%D0%BE%D0%BB%D0%BA%D0%B0.png" alt=""></li>
              <li><img src="https://www.clipartmax.com/png/middle/102-1023713_icono-de-facebook-gratis-png-y-vector-facebook-png.png" alt=""></li>
              <li><img src="https://i.pinimg.com/originals/3b/21/c7/3b21c7efd2ba9c119fb8d361acacc31d.png"></li>
              <li><img src="https://assets.stickpng.com/thumbs/5a4525cd546ddca7e1fcbc84.png"></li>

            </ul>

          </nav>

        </div>
  </footer>

</body>
</html>