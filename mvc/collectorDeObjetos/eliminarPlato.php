<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de DemoCollector
include_once("PlatoCollector.php");
//creo una instancia de DemoCollector
$PlatoCollectorObj = new PlatoCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$PlatoCollectorObj->deletePlato($id);

echo "<meta http-equiv='Refresh' content='1;readPlatos.php'>";
?>