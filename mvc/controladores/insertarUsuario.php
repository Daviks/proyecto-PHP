<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$numtarjeta=$_POST["numtarjeta"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
//$valor="manuel";

include_once("../collectorDeObjetos/UsuarioCollector.php");
include_once("../collectorDeObjetos/ClienteCollector.php");
include_once("../collectorDeObjetos/Tipo_ClienteCollector.php");
include_once("../objetos/Usuario.php");
include_once("../objetos/Cliente.php");
include_once("../objetos/Tipo_Cliente.php");


$clientecol= new ClienteCollector();
$tipo=1;
$clientecol->createCliente($nombre,$apellido,$email,$numtarjeta,$tipo);
$clientecol->showClienteNombre($nombre);
$id=$clientecol.id;
$Usuario = new UsuarioCollector();
$Usuario->createUsuario($usuario,$contrasena,$id);

header("Location:../../index.php");

?>
