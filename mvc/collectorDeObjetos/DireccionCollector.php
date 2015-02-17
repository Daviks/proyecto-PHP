<?php
 include_once('../mvc/objetos/Direccion.php');
 include_once('../mvc/collector/Collector.php');
 
 class DireccionCollector extends Collector
 {
	function showDireccion($id){
    	$row = self::$db->getRows("SELECT * FROM Direccion where id= ? ", array("{$id}")); 
    	$ObjDireccion = new Direccion($row[0]{'id'},$row[0]{'secuencia'},$row[0]{'Parroquia'},$row[0]{'Calle_principal'},$row[0]{'numero_domicilio'},$row[0]{'descripcion'},$row[0]{'Cliente_Id'}, $row[0]{'Ciudad_Id'}, $row[0]{'Sucursal_Id'});
    	return $ObjDireccion;
	}
	
	function createDireccion($secuencia,$Parroquia,$Calle_principal,$numero_domicilio,$descripcion,$Cliente_Id,$Ciudad_Id,$Sucursal_Id) {    
    	$insertrow = self::$db->insertRow("INSERT INTO Direccion (Cliente_Id, secuencia, Parroquia, Calle_principal, numero_domicilio, descripcion, Cliente_Id, Ciudad_Id, Sucursal_Id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", array(null, "{$secuencia}", "{$Parroquia}", "{$Calle_principal}", "{$numero_domicilio}", "{$descripcion}", "{$Cliente_Id}", "{$Ciudad_Id}", "{$Sucursal_Id}"));
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
  
  	function updateDireccion($Cliente_Id,$secuencia,$Parroquia,$Calle_principal,$numero_domicilio,$descripcion,$Cliente_Id,$Ciudad_Id,$Sucursal_Id) {    
    	$insertrow = self::$db->updateRow("UPDATE Direccion SET Direccion.secuencia = ?  WHERE Direccion.Parroquia = ?  WHERE Direccion.Calle_principal = ?  WHERE Direccion.numero_domicilio = ?  WHERE Direccion.descripcion = ?  WHERE Direccion.Cliente_Id = ?  WHERE Direccion.Ciudad_Id = ?  WHERE Direccion.Sucursal_Id = ?", array( "{$secuencia}", "{$Parroquia}", "{$Calle_principal}", "{$numero_domicilio}", "{$descripcion}", "{$Cliente_Id}", "{$Ciudad_Id}", "{$Sucursal_Id}",$id));
  	}  

  	function deleteDireccion($id) {    
    	$deleterow = self::$db->deleteRow("DELETE FROM Direccion WHERE Cliente_Id= ?", array("{$id}"));
  	}
 }
?>