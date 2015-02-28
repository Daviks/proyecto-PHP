<?php
class Sucursal
{
	private $idSucursal;
	private $Ruc;
	private $Nombre;
	private $idHorario;
	private $idMarca;
	private $idCliente;
	private $idasasa;
	
	function __constructor($idSucursal, $Ruc, $Nombre, $idHorario, $idMarca){
		$this->idSucursal = $idSucursal;
		$this->Ruc = $Ruc;
		$this->Nombre = $Nombre;
		$this->idHorario = $idHorario;
		$this->idMarca = $idMarca;
		
	}
	
	function setIdSucursal($idSucursal){
		$this->idSucursal = $idSucursal;
	}
	
	function setRuc($Ruc){
		$this->Ruc = $Ruc;
	}
	
	function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}
	
	function setidHorario($idHorario){
		$this->idHorario = $idHorario;
	}
	
	function setidMarca($idMarca){
		$this->idMarca = $idMarca;
	}
	
	
	function getIdSucursal(){
		return $this->idSucursal;
	}
	
	function getRuc(){
		return $this->Ruc;
	}
	
	function getNombre(){
		return $this->Nombre;
	}
	
	function getidHorario(){
		return $this->idHorario;
	}
	
	function getidMarca(){
		return $this->idMarca;
	}
	
	
}
?>