<?php

include_once("PlatoCollector.php");

$valor1=$_POST["nombre"];
$valor2=$_POST["precio"];
$valor3=$_POST["descripcion"];
$valor4=$_POST["imagen"];
$valor5= 1;


$PlatoCollectorobj = new PlatoCollector();
$PlatoCollectorobj->createPlato($valor1,$valor2,$valor3,$valor4,$valor5);

echo "<meta http-equiv='Refresh' content='1;../../index.php'>";

?>