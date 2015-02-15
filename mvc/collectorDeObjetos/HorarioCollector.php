<?php
 include_once('../mvc/objetos/Horario.php');
 include_once('../mvc/collector/Collector.php');
 
 class HorarioCollector extends Collector
 {
	function showHorario($id){
    	$row = self::$db->getRows("SELECT * FROM Horario where id= ? ", array("{$id}")); 
    	$ObjHorario = new Horario($row[0]{'id'},$row[0]{'Hora_Entrada'},$row[0]{'Hora_Cierre'});
    	return $ObjHorario;
	}
	
	function createHorario($Hora_Entrada,$Hora_Cierre) {    
    	$insertrow = self::$db->insertRow("INSERT INTO Horario (idHorario, Hora_Entrada, Hora_Cierre) VALUES (?, ?, ?)", array(null, "{$Hora_Entrada}", "{$Hora_Cierre}"));
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
  
  	function updateHorario($idHorario,$Hora_Entrada,$Hora_Cierre) {    
    	$insertrow = self::$db->updateRow("UPDATE Horario SET Horario.Hora_Entrada = ?  WHERE Horario.Hora_Cierre = ?  WHERE Horario.idHorario = ?", array( "{$Hora_Entrada}", "{$Hora_Cierre}",$id));
  	}  

  	function deleteHorario($id) {    
    	$deleterow = self::$db->deleteRow("DELETE FROM Horario WHERE idHorario= ?", array("{$id}"));
  	}
 }
?>