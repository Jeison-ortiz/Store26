<?php

session_start();

if(isset($_SESSION['admin'])){
    echo 'Bienvenido! '.$_SESSION['admin'];
    echo '<br><a href="cerrar.php">Cerrar Sesión<br></a>';
}else{
    header('Location:registro.php');
}
