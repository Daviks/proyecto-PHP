<?php
 
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$email=$_POST["email"];
	$numetarjeta=$_POST["numtarjeta"];
	$nombre=$_POST["nombre"];
	
    $usuario=$_POST["usuario"];
	$contrasena=$_POST["contrasena"];
	
	include_once("ClienteCollector.php");
	include_once("UsuarioCollector.php");
	include_once("Cliente.php");
	
	$clientecollectorobj=new ClienteCollector();
	$usuarioobj= new UsuarioCollector();
	
	$tipocliente=1;
	$clientecollectorobj->createCliente($nombre,$apellido,$email,$numetarjeta,$tipocliente);
	
	$clienteobj=$clientecollectorobj->ShowClienteNombre($nombre);
	
	$usuarioobj->createUsuario($usuario,$contrasena,$clienteobj->getID_Cliente());
	

 echo "<meta http-equiv='Refresh' content='1;../../ingresar.php'>";
?>