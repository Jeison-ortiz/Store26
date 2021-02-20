<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- iconos -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <!-- mi js: validaciones de formulario -->
    <script type="text/javascript" src="../js/loginAdminJs.js"></script>
	<!-- para agregar los formularios de registro y login -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body class = "container"id = "bodyAdmin">

    <div class="col-md-3 aling-items-center container mt-5 border border-secondary rounded" id="loginAdmin">
        <div class="sesion-details">
            <h1>Iniciar Sesión</h1>
            <form id = "login" name = "login" method = "POST">
                <label >Correo electrónico</label>
                <input type="email" name="correo" class="form-control form-control-sm" id="correo" value = "">
                <label >Contraseña</label>
                <input type="password" name="contrasena" class="form-control form-control-sm" id="password" value ="">

                <button id = "iniciar" disabled class="btn btn_outline-success btn-secondary mt-2" type="submit">Iniciar</button>
            </form>
        </div>
      

        <div class="sesion help">   
            <a href="#">¿Has olvidado la contraseña?</a><br>
        </div>
    </div>
</body>

</html>



<?php

 // se verifica en usuario administrador

include_once '../conexion.php';
session_start();    

if(!$_POST){
    die();
}


$correo_admin = $_POST['correo'];
$contrasena_admin = $_POST['contrasena'];

//echo gettype($contrasena_admin);

//var_dump($correo_admin);
//var_dump($contrasena_admin);
//echo 'voy aqui';
  
// se verifica si el usuario "correo" esta en la base da datos
$sql = 'SELECT * FROM administrador WHERE correo = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($correo_admin));
$resultado =$sentencia->fetch();

//echo '<pre>';
//var_dump($resultado);
//echo '</pre>';

if(!$resultado){
    echo '<br><div class = "container"> Correo o contraseña incorrectos! <br>Verifica e intenta nuevamente.</div>';
    die();
}

//echo 'corre usuario veriicado';

//echo '<pre>';
//var_dump($resultado['contrasena']);
//echo '</pre>';
//echo '<br> hola <br> '.$contrasena_admin;
// se verifica las contrasenas
if($contrasena_admin == $resultado['contrasena']){
    $_SESSION['admin'] = $correo_admin;
    header('Location: RestringidoAdmin.php');
}else{
    echo '<br><div class = "container"> Correo o contraseña incorrectos! <br>Verifica e intenta nuevamente.</div>';
    header('Location: loginAdmin.php');
    
    die();
    
}

?>
