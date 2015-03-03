<?php

	include_once("MarcaCollector.php");
	include_once("HorarioCollector.php");
	include_once("SucursalCollector.php");
	
	include_once("Marca.php");
	include_once("Horario.php");
	include_once("Sucursal.php");

	$nombre=$_POST["nombre"];
	$ruc=$_POST["ruc"];
	$direccion=$_POST["referencia"];
	$telefono=$_POST["telefono"];
	$horaapertura=$_POST["apertura"];
	$cierre=$_POST["cierre"];
	$marca=$_POST["marca"];
	$direccion=$_POST["direccion"];


	$MarcaCollectorobj = new MarcaCollector();
	$MarcaCollectorobj->createMarca($marca);
	
	$horarioCollectorobj= new HorarioCollector();
	$horarioCollectorobj->createHorario($horaapertura,$cierre);

	$marcaobj=new Marca();
	$marcaobj=$MarcaCollectorobj->createMarca($marca);
	
	$horarioobj=new Horario();
	$horarioobj=$horarioCollectorobj->showHorarioHora($horaapertura,$cierre);
	
	
	$sucursalCollector= new SucursalCollector();
	$sucursalCollector->createSucursal($ruc,$nombre,$horarioobj->getIdHorario(),$marcaobj->getIdMarca());


	echo "<meta http-equiv='Refresh' content='1;../../index.php'>";



?>