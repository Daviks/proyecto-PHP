<?php
 include_once('../mvc/objetos/Ciudad.php');
 include_once('../mvc/collector/Collector.php');
 
 class CiudadCollector extends Collector
 {
	function showCiudad($id){
    	$row = self::$db->getRows("SELECT * FROM Ciudad where id= ? ", array("{$id}")); 
    	$ObjCiudad = new Ciudad($row[0]{'id'},$row[0]{'Nombre'});
    	return $ObjCiudad;
	}
	
	function createCiudad($Nombre) {    
    	$insertrow = self::$db->insertRow("INSERT INTO Ciudad (idCiudad, Nombre) VALUES (?, ?)", array(null, "{$Nombre}"));
	}  

  	/*function readHorario($idHorario) {
    	$rows = self::$db->getRows("SELECT * FROM Horario WHERE idHorario = ?", array("{$idHorario}"));     
    	$arrayHorario= array();        
    	foreach ($rows as $c){
      		$aux = new Horario($c{'idHorario'},$c{'Hora_Entrada'},$c{'Hora_Cierre'});
      		array_push($arrayHorario, $aux);
    	}
    	return $arrayHorario;        
  	}*/
  
  	function updateCiudad($idCiudad,$Nombre) {    
    	$insertrow = self::$db->updateRow("UPDATE Ciudad SET Ciudad.Nombre = ?", array( "{$Nombre}",$id));
  	}  

  	function deleteCiudad($id) {    
    	$deleterow = self::$db->deleteRow("DELETE FROM Ciudad WHERE idCiudad= ?", array("{$id}"));
  	}
 }
?>