<?php
$link ='mysql:host=localhost;dbname=store26';
$usuario ='root';
$password = '';

try{
  $pdo= new PDO($link,$usuario,$password);
  //echo 'conectado <br>';

}catch(PDOException $e){
  print "error: ".$e->getMessage()."<br>";
  die();
}

