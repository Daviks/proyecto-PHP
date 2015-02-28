<?php
class Telefono
{
	private $idTelefono;
	private $Secuencia;
	private $Numero;
	private $Tipo;
	private $Descripcion;
	private $idCliente;
	private $idSucursal;
	
	function __constructor($idTelefono, $Secuencia, $Numero, $Tipo, $Descripcion, $idCliente, $idSucursal){
		$this->idTelefono = $idTelefono;
		$this->Secuencia = $Secuencia;
		$this->Numero = $Numero;
		$this->Tipo = $Tipo;
		$this->Descripcion = $Descripcion;
		$this->idCliente = $idCliente;
		$this->idSucursal = $idSucursal;
	}
	
	function setIdTelefono($idTelefono){
		$this->idTelefono = $idTelefono;
	}
	
	function setSecuencia($Secuencia){
		$this->Secuencia = $Secuencia;
	}
	
	function setNumero($Numero){
		$this->Numero = $Numero;
	}
	
	function setTipo($Tipo){
		$this->Tipo = $Tipo;
	}
	
	function setDescripcion($Descripcion){
		$this->Descripción = $Descripcion;
	}
	
	function setIdCliente($idCliente){
		$this->idCliente = $idCliente;
	}
	
	function setIdSucursal($idSucursal){
		$this->idSucursal = $idSucursal;
	}
	
	function getIdTelefono(){
		return $this->idTelefono;
	}
	
	function getSecuencia(){
		return $this->Secuencia;
	}
	
	function getNumero(){
		return $this->Numero;
	}
	
	function getTipo(){
		return $this->Tipo;
	}
	
	function getDescripcion(){
		return $this->Descripcion;
	}
	
	function getIdCliente(){
		return $this->idCliente;
	}
	
	function getIdSucursal(){
		return $this->idSucursal;
	}
}
?>