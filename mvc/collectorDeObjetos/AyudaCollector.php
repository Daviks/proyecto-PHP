
<?php

include_once('../mvc/objetos/Ayuda.php');
include_once('../mvc/baseDeDatos/Collector.php');

class AyudaCollector extends Collector
{
  
  function showAyuda($id) {
    $row = self::$db->getRows("SELECT * FROM  CrazzyFood.Ayuda where Id= ? ", array("{$id}")); 
    $ObjAyuda = new Ayuda($row[0]{'Id'},$row[0]{'Nombre'},$row[0]{'Email'},$row[0]{'Mensaje'});
    return $ObjAyuda;
  }

 /* function createUsuario($nombre,$login,$clave) {    
    $insertrow = self::$db->insertRow("INSERT INTO clase.usuario (idusuario, nombre,login,clave) VALUES (?, ?, ?, ?)", array(null, "{$nombre}", "{$login}", "{$clave}"));
  }  
*/
  function readAyudas() {
    $rows = self::$db->getRows("SELECT * FROM CrazzyFood.Ayuda ");        
    $arrayAyuda= array();        
    foreach ($rows as $c){
      $aux = new Ayuda($c{'Id'},$c{'Nombre'},$c{'Email'},$c{'Mensaje'});
      array_push($arrayAyuda, $aux);
    }
    return $arrayAyuda;        
  }
 /* 
  function updateUsuario($id,$nombre,$login,$clave) {    
    $insertrow = self::$db->updateRow("UPDATE mydb.Ayuda SET Ayuda.Nombre = ?  WHERE Ayuda.Id = ? ", array("{$nombre}",$id));
  }  
*/
  function deleteAyuda($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM CrazzyFood.Ayuda WHERE Id= ?", array("{$id}"));
  }  

}
?>

