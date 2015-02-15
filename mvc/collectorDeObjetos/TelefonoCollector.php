<?php
 include_once('../mvc/objetos/Telefono.php');
 include_once('../mvc/collector/Collector.php');
 
 class TelefonoCollector extends Collector
 {
	function showTelefono($id){
    	$row = self::$db->getRows("SELECT * FROM Telefono where id= ? ", array("{$id}")); 
    	$ObjTelefono = new Telefono($row[0]{'id'},$row[0]{'Secuencia'},$row[0]{'Numero'},$row[0]{'Tipo'},$row[0]{'Descripcion'},$row[0]{'idCliente'},$row[0]{'idSucursal'});
    	return $ObjTelefono;
	}
	
	function createTelefono($Secuencia,$Numero,$Tipo,$Descripcion,$idCliente,$idSucursal) {    
    	$insertrow = self::$db->insertRow("INSERT INTO Telefono (idTelefono, Secuencia, Numero, Tipo, Descripcion, idCliente, idSucursal) VALUES (?, ?, ?, ?, ?, ?, ?)", array(null, "{$Secuencia}", "{$Numero}", "{$Tipo}", "{$Descripcion}", "{$idCliente}", "{$idSucursal}"));
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
  
  	function updateTelefono($idTelefono,$Secuencia,$Numero,$Tipo,$Descripcion,$idCliente,$idSucursal) {    
    	$insertrow = self::$db->updateRow("UPDATE Telefono SET Telefono.Secuencia = ?  WHERE Telefono.Numero = ?  WHERE Telefono.Tipo = ?  WHERE Telefono.Descripcion = ?  WHERE Telefono.idCliente = ?  WHERE Telefono.idSucursal = ?", array( "{$Secuencia}", "{$Numero}", "{$Tipo}", "{$Descripcion}", "{$idCliente}", "{$idSucursal}",$id));
  	}  

  	function deleteTelefono($id) {    
    	$deleterow = self::$db->deleteRow("DELETE FROM Telefono WHERE idTelefono= ?", array("{$id}"));
  	}
 }
?>