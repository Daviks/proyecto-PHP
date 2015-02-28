<?php


class Menu 
{
	private $idMenu;
	private $sucursal;
	private $plato;
	
	function __construct($idMenu, $sucursal, $plato){
		$this->idMenu = $idMenu;
       	$this->sucursal = $sucursal;
       	$this->plato = $plato;
	}

	function setIdMenu($idMenu){
       $this->idMenu = $idMenu;
     } 
     function getIdMenu(){
       return $this->idMenu;
     }

     function setSucursal($sucursal){
       $this->sucursal = $sucursal;
     } 
     function getSucursal(){
       return $this->sucursal;
     }

     function setPlato($plato){
       $this->plato = $plato;
     } 
     function getPlato(){
       return $this->plato;
     }
}

?>