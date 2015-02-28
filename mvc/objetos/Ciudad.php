<?php
class Ciudad
{
	private $idCiudad;
	private $Nombre;
	
	
	function __constructor($idCiudad, $Nombre){
		$this->idCiudad = $idCiudad;
		$this->Nombre = $Nombre;
		
	}
	
	function setIdCiudad($idCiudad){
		$this->idCiudad = $idCiudad;
	}
	
	function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}
	
	
	function getIdCiudad(){
		return $this->idCiudad;
	}
	
	function getNombre(){
		return $this->Nombre;
	}
	
}
?>