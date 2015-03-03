<?php
 include_once('Marca.php');
 include_once('Collector.php');
 
 class MArcaCollector extends Collector
 {
	function showMarca($id){
    	$row = self::$db->getRows("SELECT * FROM marca where Id= ? ", array("{$id}")); 
    	$ObjMarca = new Marca($row[0]{'id'},$row[0]{'Nombre'});
    	return $ObjMarca;
	}
	
		function showMarcaNombre($id){
    	$row = self::$db->getRows("SELECT * FROM marca where marca.Nombre= ? ", array("{$id}")); 
    	$ObjMarca = new Marca($row[0]{'id'},$row[0]{'Nombre'});
    	return $ObjMarca;
	}
	
	function createMarca($Nombre) {    
    	$insertrow = self::$db->insertRow("INSERT INTO marca (Id, Nombre) VALUES (?, ?)", array(null, "{$Nombre}"));
	}  

  	function readMarca($idMarca) {
    	$rows = self::$db->getRows("SELECT * FROM marca");     
    	$arrayMarca = array();        
    	foreach ($rows as $c){
      		$aux = new Marca($c{'id'},$c{'Nombre'});
      		array_push($arrayMarca, $aux);
    	}
    	return $arrayHorario;
  	}
  
  	function updateMarca($idMarca,$Nombre) {    
    	$insertrow = self::$db->updateRow("UPDATE marca SET marca.Nombre = ?  WHERE marca.Id = ?", array( "{$Nombre}",$id));
  	}  

  	function deleteMarca($id) {    
    	$deleterow = self::$db->deleteRow("DELETE FROM marca WHERE Id= ?", array("{$id}"));
  	}
 }
?>
