<?php
	include_once('Usuario.php');
	include_once('Collector.php');

  class UsuarioCollector extends Collector{
      
        function createUsuario($usuario,$contrasena,$cliente) {    
        $insertrow = self::$db->insertRow("INSERT INTO usuario (Id,Usuario,Contraseña,Cliente_Id) VALUES (?,?,?,?)", array(null,"{$usuario}","{$contrasena}","{$cliente}"));
       }  
   
  }

?>
