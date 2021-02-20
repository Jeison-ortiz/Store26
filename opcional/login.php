<?php

include_once 'conexion.php';
session_start();

$correo_login = $_POST['correo_usuario'];
$contrasena_login = $_POST['contrasena'];
  
// se verifica si el usuario "correo" esta en la base da datos
$sql = 'SELECT * FROM usuarios WHERE correo = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($correo_login));
$resultado =$sentencia->fetch();

//echo '<pre>';
//var_dump($resultado);
//echo '</pre>';

if(!$resultado){
    echo 'no existe el usuario';
    header('Location: catalogo/ofertas.php');
    die();
}

//echo 'usuario veriicado';

//echo '<pre>';
//var_dump($resultado['contrasena']);
//echo '</pre>';

// se verifica las contrasenas
if(password_verify($contrasena_login, $resultado['contrasena'])){
    $_SESSION['user'] = $correo_login;
    header('Location: catalogo/ofertas.php');
}else{
    $_SESSION['user'] = "";
    echo 'No coinciden las contrasenas';
    header('user/index.php');

}