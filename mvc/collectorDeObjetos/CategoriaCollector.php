<?php
//echo realpath (dirname(__FILE__));
include_once('Collector.php');
include_once('Categoria.php');

class CategoriaCollector extends Collector
{
  function showCategoria($id) {

    $row = self::$db->getRows("SELECT * FROM categoria where Id= ? ", array("{$id}")); 
    $ObjCategoria = new Categoria($row[0]{'id'},$row[0]{'Nombre'});
    return $ObjCategoria;
  }

  function readCategorias() {
   
    $rows = self::$db->getRows("SELECT * FROM categoria ");        
    $arrayCategoria= array();        
   
    foreach ($rows as $c){
      $aux = new Categoria($c{'Id'},$c{'Nombre'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

}
?>

