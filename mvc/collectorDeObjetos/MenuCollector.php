<?php

include_once('../objetos/Menu.php');
include_once('../collector/Collector.php');

class MenuCollector extends Collector
{
  
  function showMenu($id) {
    
    $row = self::$db->getRows("SELECT * FROM Menu where id= ? ", array("{$id}")); 
    
    $Menu = new Menu($row[0]{'id'});
    return $Menu;
  }

  function readMenus() {
   
    $rows = self::$db->getRows("SELECT * FROM Menu ");        
    $arrayMenu= array();        
   
    foreach ($rows as $c){
      $aux = new Menu($c{'id'});
      array_push($arrayMenu, $aux);
    }
    return $arrayMenu;        
  } 
}
?>

