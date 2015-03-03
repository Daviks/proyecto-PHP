<?php
 include_once('Sucursal.php');
 include_once('Collector.php');
 
 class SucursalCollector extends Collector
 {
	function showSucursal($id){
    	$row = self::$db->getRows("SELECT * FROM Sucursal where id= ? ", array("{$id}")); 
    	$ObjSucursal = new Sucursal($row[0]{'id'},$row[0]{'Ruc'},$row[0]{'Nombre'},$row[0]{'Horario_ID'},$row[0]{'Marca_Id'});
    	return $ObjSucursal;
	}
	
	function createSucursal($Ruc,$Nombre,$Horario_ID,$Marca_Id) {    
    	$insertrow = self::$db->insertRow("INSERT INTO Sucursal (Id, Ruc, Nombre, Horario_ID, Marca_Id) VALUES (?, ?, ?, ?, ?)", array(null, "{$Ruc}", "{$Nombre}", "{$Horario_ID}", "{$Marca_Id}"));
	}  

  	/*function readHorario($Horario_ID) {
    	$rows = self::$db->getRows("SELECT * FROM Horario WHERE Horario_ID = ?", array("{$Horario_ID}"));     
    	$arrayHorario= array();        
    	foreach ($rows as $c){
      		$aux = new Horario($c{'Horario_ID'},$c{'Hora_Entrada'},$c{'Hora_Cierre'});
      		array_push($arrayHorario, $aux);
    	}
    	return $arrayHorario;        
  	}*/
  
  	function updateSucursal($idSucursal,$Ruc,$Nombre,$Horario_ID,$Marca_Id) {    
    	$insertrow = self::$db->updateRow("UPDATE Sucursal SET Sucursal.Ruc = ?  WHERE Sucursal.Nombre = ?  WHERE Sucursal.Horario_ID = ?  WHERE Sucursal.Marca_Id = ?"  , array( "{$Ruc}", "{$Nombre}", "{$Horario_ID}", "{$Marca_Id}" ,$id));
  	}  

  	function deleteSucursal($id) {    
    	$deleterow = self::$db->deleteRow("DELETE FROM Sucursal WHERE idSucursal= ?", array("{$id}"));
  	}
 }
?>
