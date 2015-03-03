<?php


$idplato=$_POST["idplato"];
$valor1=$_POST["nombre"];
$valor2=$_POST["precio"];
$valor3=$_POST["descripcion"];
$valor4=$_POST["imagen"];
$valor5= 1;

include_once("PlatoCollector.php");
$PlatoCollectorObj = new PlatoCollector();
$PlatoCollectorObj->updatePlato($idplato,$valor1,$valor2,$valor3,$valor4,$valor5);


?>