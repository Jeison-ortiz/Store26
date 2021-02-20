<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/styleindex.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- iconos -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        
    <!-- mi js: validaciones de formulario -->
    <script type="text/javascript" src="../js/AdminRestringido.js"></script>

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					
					<img src="../imagenes/logo/Logo.png" id = "logoRestringido">
					
						<div class = "d-flex" id= "ome">					
							<form action="" class = "aling-items-center"></form>
							
                <a class = "btn btn-secondary" href="../cerrar.php">Cerrar sesión</a>
							</form>
						</div>					
          
				</div>
			</nav>

  </header>

  <div class = "container">
    <h1 id = "titleGeneral">Añadir artículos</h1>
    
    <div class = "container" id = "formulario">
      <form action = "agregarArticulos.php" method = "POST" enctype = "multipart/form-data" name = "formLoadArticule" class = "container" id = "formulario1">
          
          <select name ="selecta" class="form-select mb-3" aria-label="Default select example" id = "selectArticulos">
            <option value="0">Selecciona la categoría del articulo</option>
            <option value="1">Accesorios Femeninos</option>
            <option value="2">Accesorios Masculinos</option>
            <option value="3">Calzado Caballero</option>
            <option value="4">Calzado Dama</option>
            <option value="5">Ropa Caballero</option>
            <option value="6">Ropa Dama</option>
            <option value="7">Ofertas</option>
          </select>
          <input type="file" name = "imagen" placeholder = "Imagen" class = "mb-2" id = "imagen"><br>
          <input type="text" name = "marca" placeholder = "Marca" class = "mb-2" id = "marca"><br>
          <input type="number" name = "precio" placeholder = "Precio $" class = "mb-2" id = "precio"><br>
          <input type="number" name = "cantidad" placeholder = "Cantidad" class = "mb-2" id = "cantidad"><br>
          <input type="text" name = "descripcion" placeholder = "Descripción" class = "mb-2" id = "descripcion"><br>
          <input type="text" name = "talla" placeholder = "Talla" class = "mb-2" id = "talla"><br>
          <input  type = "submit" value = "Subir" name = "subir" class = "mb-3" id = "subir">
      </form>
    </div>

  </div>

  <footer>
        <?php include '../templates/footer.php'?>
    </footer>

</body>

</html>