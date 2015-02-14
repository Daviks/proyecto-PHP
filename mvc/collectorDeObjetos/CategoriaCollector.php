<?php

include_once('../objetos/Categoria.php');
include_once('../collector/Collector.php');

class CategoriaCollector extends Collector
{
  function showCategoria($id) {
    $row = self::$db->getRows("SELECT * FROM Categoria where id= ? ", array("{$id}")); 
    $ObjCategoria = new Categoria($row[0]{'id'},$row[0]{'Nombre'});
    return $ObjCategoria;
  }

  function readCategorias() {
   
    $rows = self::$db->getRows("SELECT * FROM Categoria ");        
    $arrayCategoria= array();        
   
    foreach ($rows as $c){
      $aux = new Categoria($c{'id'},$c{'Nombre'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

}
?>

