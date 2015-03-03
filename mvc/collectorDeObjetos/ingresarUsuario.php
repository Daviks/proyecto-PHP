<?php
	$usuario=$_POST["usuario"];
    $contrasena=$_POST["contraseña"];
    $valor = 2;

    include_once("UsuarioCollector.php");
	include_once("Usuario.php");

    $UsuarioCollectorobj = new UsuarioCollector();
	$usuarioobj= new usuario();
    $usuarioobj=$UsuarioCollectorobj->ShowUsuarioNombre($usuario);
	
	if($usuarioobj->getUsuario()=$usuario){
		echo "<meta http-equiv='Refresh' content='1;../../index.php'>";
		}else{
			echo "<meta http-equiv='Refresh' content='1;../../ingresar.php'>";
			}
?>