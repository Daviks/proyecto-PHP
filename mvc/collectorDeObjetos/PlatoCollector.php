<?php

include_once('../objetos/Plato.php');
include_once('../collector/Collector.php');

class PlatoCollector extends Collector
{
  
  function showPlato($id) {
    
    $row = self::$db->getRows("SELECT * FROM Plato where id= ? ", array("{$id}")); 
    
    $ObjPlato = new Plato($row[0]{'id'},$row[0]{'Nombre'},$row[0]{'Precio'},$row[0]{'Descripcion'},$row[0]{'imagen'},$row[0]{'Categoria'});
    return $ObjPlato;
  }

  function createPlato($nombre) { 

    $insertrow = self::$db->insertRow("INSERT INTO Plato (id, Nombre, Precio, Descripcion, imagen, Categoria) VALUES (?, ?)", array(null, "{$nombre}"));
  }  

  function readPlatos() {
   
    $rows = self::$db->getRows("SELECT * FROM Plato ");        
    $arrayPlato= array();        
   
    foreach ($rows as $c){
      $aux = new Plato($c{'id'},$c{'Nombre'},$c{'Precio'},$c{'Descripcion'},$c{'imagen'},$c{'Categoria'});
      array_push($arrayPlato, $aux);
    }
    return $arrayPlato;        
  }
  
  function updatePlato($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE Plato SET Plato.nombre = ?  WHERE Plato.id = ? ", array( "{$nombre}",$id));
  }  

  function deletePlato($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM Plato WHERE id= ?", array("{$id}"));
  }  
}
?>

