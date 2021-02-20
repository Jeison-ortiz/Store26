<?php

include_once 'conexion.php';

if(!$_POST){
    die();
}

$usuario_nuevo = $_POST['nombre'];
$correo_nuevo = $_POST['email'];
$contrasena = $_POST['password1'];
$contrasena2 = $_POST['password2'];
$telefono = $_POST['telefono'];


// se verifica si el usuario "correo" esta en la base da datos
$sql = 'SELECT * FROM usuarios WHERE correo = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($correo_nuevo));
$resultado =$sentencia->fetch();

//var_dump($resultado);

if($resultado){
    echo '<br> Este usuario ya se encuentra registrado';
    header('Location: catalogo/ofertas.php');
    
    die();
}

//echo '<pre>';

//var_dump($usuario_nuevo);
//var_dump($correo_nuevo);
//var_dump($contrasena);
//var_dump($contrasena2);

//echo '</pre>';

$contrasena = password_hash($contrasena,PASSWORD_DEFAULT);

if (password_verify($contrasena2,$contrasena)){
    echo 'contraseña valida <br>';
    $sql_agregar = 'INSERT INTO usuarios (nombre,correo,contrasena,telefono) VALUES(?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);

    if($sentencia_agregar->execute(array($usuario_nuevo,$correo_nuevo,$contrasena,$telefono))){
        echo 'agregado <br>';
        header('Location: catalogo/ofertas.php');
        
    }else{
        echo 'error al agregar <br>';
    }

    $sentencia_agregar = null;
    $pdo = null;

}else{
    echo 'contraseña invalida';
}


?>