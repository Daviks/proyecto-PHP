<?php
echo realpath (dirname(__FILE__));
class Pedidos 

{
	private $idPedido;
	private $Linea;
	private $Cantidad;
	private $Total;
	private $CabeceraordenId;
    private $Pedido_Id;

	function __construct($idPedido, $Linea, $Cantidad, $Total, $CabeceraordenId, $Pedido_Id){
		$this->idPedido = $idPedido;
       	$this->Linea = $Linea;
       	$this->Cantidad = $Cantidad;
       	$this->Total = $Total;
		$this->CabeceraordenId = $CabeceraordenId;
        $this->Pedido_Id = $Pedido_Id;
 
	}
	function setIdPedido($idPedido){
       $this->idPedido = $idPedido;
     } 
     function getIdPedido(){
       return $this->idPedido;
     }

     function setLinea($Linea){
       $this->Linea = $Linea;
     } 
     function getLinea(){
       return $this->Linea;
     }

     function setCantidad($Cantidad){
       $this->Cantidad = $Cantidad;
     } 
     function getCantidad(){
       return $this->Cantidad;
     }

      function setTotal($Total){
       $this->Total = $Total;
     } 
     function getTotal(){
       return $this->Total;
     }
	 function setCabeceraordenId($CabeceraordenId){
       $this->CabeceraordenId = $CabeceraordenId;
     } 
     function getCabeceraordenId(){
       return $this->CabeceraordenId;
     }
     function setPedido_Id($Pedido_Id){
       $this->Pedido_Id = $Pedido_Id;
     } 
     function getPedido_Id(){
       return $this->Pedido_Id;
     }
}

?> 