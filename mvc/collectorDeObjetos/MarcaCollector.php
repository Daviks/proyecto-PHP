<?php
 include_once('../mvc/objetos/Marca.php');
 include_once('../mvc/collector/Collector.php');
 
 class HorarioCollector extends Collector
 {
	function showMarca($id){
    	$row = self::$db->getRows("SELECT * FROM Marca where id= ? ", array("{$id}")); 
    	$ObjMarca = new Marca($row[0]{'id'},$row[0]{'Nombre'});
    	return $ObjMarca;
	}
	
	function createMarca($Nombre) {    
    	$insertrow = self::$db->insertRow("INSERT INTO Marca (idMarca, Nombre) VALUES (?, ?)", array(null, "{$Nombre}"));
	}  

  	function readMarca($idMarca) {
    	$rows = self::$db->getRows("SELECT * FROM Marca");     
    	$arrayMarca = array();        
    	foreach ($rows as $c){
      		$aux = new Marca($c{'idMarca'},$c{'Nombre'});
      		array_push($arrayMarca, $aux);
    	}
    	return $arrayHorario;
  	}
  
  	function updateMarca($idMarca,$Nombre) {    
    	$insertrow = self::$db->updateRow("UPDATE Marca SET Marca.Nombre = ?  WHERE Horario.idMarca = ?", array( "{$Nombre}",$id));
  	}  

  	function deleteMarca($id) {    
    	$deleterow = self::$db->deleteRow("DELETE FROM Marca WHERE idMarca= ?", array("{$id}"));
  	}
 }
?>