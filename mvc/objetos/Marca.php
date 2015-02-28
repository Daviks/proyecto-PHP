<?php
class Marca
{
	private $idMarca;
	private $Nombre;
	
	function __constructor($idMarca, $Nombre){
		$this->idMarca = $idMarca;
		$this->Nombre = $Nombre;
	}
	
	function setIdMarca($idMarca){
		$this->idMarca = $idMarca;
	}
	
	function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}
	
	function getIdMarca(){
		return $this->idMarca;
	}
	
	function getNombre(){
		return $this->Nombre;
	}
}
?>