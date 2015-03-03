

<?php

$usuario=$_POST["usuario"];
$contrasena=$_POST["contraseña"];
$valor = 2;

include_once("UsuarioCollector.php");

$UsuarioCollectorobj = new UsuarioCollector();
$UsuarioCollectorobj->createUsuario($usuario, $contrasena,$valor);



echo "<meta http-equiv='Refresh' content='1;../../index.php'>";

?>

