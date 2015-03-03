<?php

include_once('Plato.php');
include_once('Collector.php');

class PlatoCollector extends Collector
{
  
  function createPlato($nombre,$precio,$descripcion,$imagen,$categoria) { 

    $insertrow = self::$db->insertRow("INSERT INTO Plato (Id, Nombre, Precio, Descripcion, imagen, Categoria_Id) VALUES (?, ?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$precio}", "{$descripcion}", "{$imagen}", "{$categoria}"));
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

    function showPlato($id) {
    
    $row = self::$db->getRows("SELECT * FROM plato where plato.Id= ? ", array("{$id}")); 
    
    $ObjPlato = new Plato($row[0]{'Id'},$row[0]{'Nombre'},$row[0]{'Precio'},$row[0]{'Descripcion'},$row[0]{'imagen'},$row[0]{'Categoria_Id'});
    return $ObjPlato;
  }


 function updatePlato($Id,$nombre,$precio,$descripcion,$imagen,$categoria) {    
    $insertrow = self::$db->updateRow("UPDATE crazzyfood.plato SET plato.Nombre = ?, 
	plato.Precio = ?, plato.Descripcion = ?, plato.imagen = ?, plato.Categoria_Id = ? WHERE plato.Id = ? ",
	array("{$nombre}","{$precio}","{$descripcion}","{$imagen}","{$categoria}",$Id));
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

