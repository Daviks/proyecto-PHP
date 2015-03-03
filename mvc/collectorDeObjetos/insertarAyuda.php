<?php

include_once("AyudaCollector.php");

$valor1=$_POST["nombre"];
$valor2=$_POST["email"];
$valor3=$_POST["mensaje"];


$AyudaCollectorobj = new AyudaCollector();
$AyudaCollectorobj->createAyuda($valor1,$valor2,$valor3);

echo "<meta http-equiv='Refresh' content='1;../../index.php'>";

?>