<?php
//echo realpath (dirname(__FILE__));
include_once('Pedidos.php');
include_once('Collector.php');

class PedidoCollector extends Collector
{
  
  function showPedido($Id) {
    
    $row = self::$db->getRows("SELECT * FROM pedido where Id= ? ", array("{$Id}")); 
    
    $ObjPedIdo = new Pedido($row[0]{'Id'},$row[0]{'Linea'},$row[0]{'cantidad'},$row[0]{'Total'},$row[0]{'Cabecera_Orden_Id'},$row[0]{'Plato_Id'});
    return $ObjPedIdo;
  }
  

  function createPedido($Linea, $Cantidad, $Total, $CabeceraOrdenId, $PlatoId) { 

    $insertrow = self::$db->insertRow("INSERT INTO crazzyfood.pedido 
	(Id, Linea, cantidad, Total, Cabecera_Orden_Id, Plato_Id) 
	VALUES (?, ?, ?, ?, ?, ?)", 
	array(null,"{$Linea}","{$Cantidad}","{$Total}","{$CabeceraOrdenId}","{$PlatoId}"));
  }  
  function readPedidos() {
   
    $rows = self::$db->getRows("SELECT * FROM Pedido ");        
    $arrayPedido= array();        
   
    foreach ($rows as $c){
      $aux = new Pedidos($c{'Id'},$c{'Linea'},$c{'cantidad'},$c{'Total'},$c{'Cabecera_Orden_Id'},$c{'Plato_Id'});
      array_push($arrayPedido, $aux);
    }
    return $arrayPedido;        
  }
  
  function updatePedIdo($Id,$Linea, $Cantidad, $Total, $CabeceraOrdenId, $PlatoId ) {    
    $insertrow = self::$db->updateRow("UPDATE pedido SET pedido.Linea = ?, pedido.cantidad = ?, pedido.Total = ?, pedido.Cabecera_Orden_Id = ?, pedido.Plato_Id = ?  WHERE pedido.Id = ? ", array( "'$Linea',$'Cantidad','$Total','$CabeceraOrdenId','$PlatoId'"));
  }  

  function deletePedIdo($Id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM pedido WHERE pedido.Id= ?", array("{$Id}"));
  }

	function leerPedidosPorCabecera($IdCabecera) {
   
    $rows = self::$db->getRows("SELECT * FROM pedido WHERE pedido.Cabecera_Orden_Id = ?", array($IdCabecera));
    $arraydetalle= array();        
   
    foreach ($rows as $c){
      $aux = new Pedido($c{'Id'},$c{'Linea'},$c{'cantidad'},$c{'Total'},$c{'Cabecera_Orden_Id'},$c{'Plato_Id_Id'});
      array_push($arraydetalle, $aux);
    }
    return $arraydetalle;        
  }
  function obtenerPrecioParcial() {
   
    $row = self::$db->getRow("SELECT sum(total) FROM pedido");
    
    return $row;        
  }
  
}
?>
