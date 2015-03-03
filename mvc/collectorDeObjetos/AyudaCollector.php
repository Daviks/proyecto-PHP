
<?php

include_once('Ayuda.php');
include_once('Collector.php');

class AyudaCollector extends Collector{
  

 function createAyuda($nombre,$email,$mensaje) {    
    $insertrow = self::$db->insertRow("INSERT INTO ayuda (Id, Nombre,Email,Mensaje) VALUES (?, ?, ?, ?)", array(null, "{$nombre}", "{$email}", "{$mensaje}"));
  }  
 }
?>

