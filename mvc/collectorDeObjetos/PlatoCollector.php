<?php

include_once('Plato.php');
include_once('Collector.php');

class PlatoCollector extends Collector
{
  
  function createPlato($nombre,$precio,$descripcion,$imagen,$categoria) { 

    $insertrow = self::$db->insertRow("INSERT INTO Plato (Id, Nombre, Precio, Descripcion, imagen, Categoria_Id) VALUES (?, ?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$precio}", "{$descripcion}", "{$imagen}", "{$categoria}"));
  }  


  function showPlato($id) {
    
    $row = self::$db->getRows("SELECT * FROM Plato where Id= ? ", array("{$Id}")); 
    
    $ObjPlato = new Plato($row[0]{'id'},$row[0]{'Nombre'},$row[0]{'Precio'},$row[0]{'Descripcion'},$row[0]{'imagen'},$row[0]{'Categoria'});
    return $ObjPlato;
  }

  

  function readPlatos() {
   
    $rows = self::$db->getRows("SELECT * FROM Plato ");        
    $arrayPlato= array();        
   
    foreach ($rows as $c){
      $aux = new Plato($c{'Id'},$c{'Nombre'},$c{'Precio'},$c{'Descripcion'},$c{'imagen'},$c{'Categoria_Id'});
      array_push($arrayPlato, $aux);
    }
    return $arrayPlato;        
  }
  
  function updatePlato($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE plato SET plato.nombre = ?  WHERE plato.Id = ? ", array( "{$nombre}",$id));
  }  

  function deletePlato($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM plato WHERE Id= ?", array("{$id}"));
  }

	function leerPlatoPorCategoriaId($idcat) {
   
    $rows = self::$db->getRows("SELECT * FROM plato WHERE plato.Categoria_Id = ?", array($idcat));
    $arrayPlato= array();        
   
    foreach ($rows as $c){
      $aux = new Plato($c{'Id'},$c{'Nombre'},$c{'Precio'},$c{'Descripcion'},$c{'imagen'},$c{'Categoria_Id'});
      array_push($arrayPlato, $aux);
    }
    return $arrayPlato;        
  }
  
}
?>

