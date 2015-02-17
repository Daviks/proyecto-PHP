<?php
class Direccion
{
	private $idDireccion;
	private $Secuencia;
	private $Parroquia;
	private $Calle_principal;
	private $Numero_domicilio;
	private $Descripcion;
	private $idCliente;
	private $idCiudad;
	private $idSucursal;
	
	function __constructor($idDireccion, $Secuencia, $Parroquia, $Calle_principal, $Numero_domicilio, $Descripcion, $idCliente, $idCiudad, $idSucursal){
		$this->idDireccion = $idDireccion;
		$this->Secuencia = $Secuencia;
		$this->Parroquia = $Parroquia;
		$this->Calle_principal = $Calle_principal;
		$this->Numero_domicilio = $Numero_domicilio;
		$this->Descripcion = $Descripcion;
		$this->idCliente = $idCliente;
		$this->idCiudad = $idCiudad;
		$this->idSucursal = $idSucursal;
	}
	
	function setIdDireccion($idDireccion){
		$this->idDireccion = $idDireccion;
	}
	
	function setSecuencia($Secuencia){
		$this->Secuencia = $Secuencia;
	}
	
	function setParroquia($Parroquia){
		$this->Parroquia = $Parroquia;
	}
	
	function setCalle_principal($Calle_principal){
		$this->Calle_principal = $Calle_principal;
	}
	
	function setNumero_domicilio($Numero_domicilio){
		$this->Numero_domicilio = $Numero_domicilio;
	}
	
	function setDescripcion($Descripcion){
		$this->Descripcion = $Descripcion;
	}
	function setIdCliente($idCliente){
		$this->idCliente = $idCliente;
	}

	function setIdCiudad($idCiudad){
		$this->idCiudad = $idCiudad;
	}

	
	function setIdSucursal($idSucursal){
		$this->idSucursal = $idSucursal;
	}
	
	function getIdDireccion(){
		return $this->idDireccion;
	}
	
	function getSecuencia(){
		return $this->Secuencia;
	}
	
	function getParroquia(){
		return $this->Parroquia;
	}
	
	function getCalle_principal(){
		return $this->Calle_principal;
	}
	
	function getNumero_domicilio(){
		return $this->Numero_domicilio;
	}
	
	function getDescripcion(){
		return $this->Descripcion;
	}

	function getIdCliente(){
		return $this->idCliente;
	}
	
	function getIdCiudad(){
		return $this->idCiudad;
	}

	
	function getIdSucursal(){
		return $this->idSucursal;
	}
}
?>