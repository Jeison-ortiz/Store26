<?php

    include_once '../conexion.php';
    session_start();

    $id =  $_GET['id'];
    $tabla = $_GET['tabla'];

    echo '<br> hola'.$id;
    echo '<br> hola'.$tabla;
    $sql_eliminar = "DELETE FROM $tabla WHERE id=$id";
    $sentencia_eliminar = $pdo->prepare($sql_eliminar);
    $sentencia_eliminar->execute();

    header('Location: agregarArticulos.php');
      