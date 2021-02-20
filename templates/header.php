
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>header</title>

	<link rel="stylesheet" href="../css/styleIndex.css">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- iconos -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
	<!-- validacion registro usuario -->
	
	<script type="text/javascript" src="../js/registroUsuario.js"></script>

	
	
	<!-- para agregar los formularios de registro y login -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </head>

   <body>
	
	<?php
		//echo $_SESSION['user'];
	//	echo $_SESSION['admin'];	
	?>

		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<img src="../imagenes/logo/Logo.png" alt="">

					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">			
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="active" href="../catalogo/ofertas.php" >Ofertas</a>
							</li>

							<li class = "nav-item ">
								<a href="#">Femenino</a>
								<ul>
									<li><a href="../catalogo/zapatosDama.php">Zapatos</a></li>
									<li><a href="../catalogo/ropaDama.php">Ropa</a></li>
									<li><a href="../catalogo/accesoriosDama.php">Accesorios</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="active" aria-current="page" href="#">Masculino</a>
								<ul>
									<li><a href="../catalogo/zapatosCaballero.php">Zapatos</a></li>
									<li><a href="../catalogo/ropaCaballero.php">Ropa</a></li>
									<li><a href="../catalogo/accesoriosCaballero.php">Accesorios</a></li>
								</ul>
							</li>

							
						
						</ul>

						<div class = "d-flex" id= "ome">					
							<form class="d-flex">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outlin-esuccess me-2 btn-secondary" type="submit">Buscar</button>
							</form>

							<form action="" class = "aling-items-center"></form>
								<button class="btn  float-right btn-secondary me-2" data-toggle="collapse" data-target="#d1">Iniciar
									
								</button>

								<button class="btn  float-right btn-secondary" data-toggle="collapse" data-target="#d2">Registrarse
									
								</button>

							</form>

						</div>
					
					</div>
				</div>
			</nav>

			<form action="../login.php" method = "POST" name = "iniciarSesion">
				<div class="collapse col-md-3 aling-items-center container" id="d1">
					<div class="sesion-details">
						<h1>Iniciar Sesión</h1>
							<div class="sesion email">
								<label for="">Correo electrónico</label>
								<input type="email" name="email" class="form-control form-control-sm" id = "correo">

							</div>
							<div class="sesion password">
								<label for="password">Contraseña</label>
								<input type="password" name="password" class="form-control form-control-sm" id = "pass">
							</div>
					</div>
					<div class="sesion iniciar-sesion">  
						<button disabled class="btn btn_outline-success btn-secondary mt-2" type="submit" id = "iniciarSesion">Iniciar</button>
						<a href="../admin/loginAdmin.php">Iniciar como admin</a>
					</div>

					<div class="divide-line">
					</div>

					<div class="sesion help">
							<a href="#">¿Has olvidado la contraseña?</a><br>
					</div>
				</div>
			</form>


			<form action="../agregar_usuario.php" method = "POST" name = "registro_user">
				<div class="collapse col-md-3 aling-items-center container" id="d2" >
					<div class="sesion-details aling-items-center" id = "especialome">
						<h1>Registrase</h1>
						<div class="sesion email">
							<label for="">Nombre</label>
							<input type="name" name="nombre" class="form-control form-control-sm" id = "nombre_user">

						</div>

						<div class="sesion email">
							<label for="">Télefono</label>
							<input type="phone" name="telefono" class="form-control form-control-sm" id = "telefono_user">

						</div>
						<div class="sesion email">
							<label for="">Correo electrónico</label>
							<input type="email" name="email" class="form-control form-control-sm" id = "correo_user">

						</div>
						<div class="sesion password">
							<label for="password">Contraseña</label>
							<input type="password" name="password1" class="form-control form-control-sm" id = "pass1_user">
						</div>

						<div class="sesion password">
							<label for="password">Repetir contraseña</label>
							<input type="password" name="password2" class="form-control form-control-sm" id = "pass2_user">
						</div>
					</div>
					<div class="sesion iniciar-sesion">
						<button disabled class="btn btn-secondary mt-2" type="submit" id = "btn_registrar">Registrarse</button>
					</div>

					<div class="divide-line">
					</div>


				</div>

			</form>

			<!-- Optional JavaScript; choose one of the two! -->

			<!-- Option 1: Bootstrap Bundle with Popper -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

			<!-- Option 2: Separate Popper and Bootstrap JS -->
			<!--
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
			-->
		</header>
			
	</body>

 
</html>