<?php
class Horario
{
	private $idHorario;
	private $Hora_Entrada;
	private $Hora_Cierre;
	
	function __constructor($idHorario, $Hora_Entrada, $Hora_Cierre){
		$this->idHorario = $idHorario;
		$this->Hora_Entrada = $Hora_Entrada;
		$this->Hora_Cierre = $Hora_Cierre;
	}
	
	function setIdHorario($idHorario){
		$this->IdHorario = $idHorario;
	}
	
	function setHora_Entrada($Hora_Entrada){
		$this->Hora_Entrada = $Hora_Entrada;
	}
	
	function setHora_Cierre($Hora_Cierre){
		$this->Hora_Cierre = $Hora_Cierre;
	}
	
	function getIdHorario(){
		return $this->IdHorario;
	}
	
	function getHora_Entrada(){
		return $this->Hora_Entrada;
	}
	
	function getHora_Cierre(){
		return $this->Hora_Cierre;
	}
}
?>