<?php
	include_one('../Objetos/Usuario.php');
	include_one('../collector/Collector.php');

  class UsuarioCollector extends Collector{
      
      function ShowUsuario($id){
          
          $row=self::$db->getRows("Select * From Usuario where Id= ?",array("{$id}"));
          
          $Usuario=new Usuario($row[0]{'Id'});
          
          return $Usuario;
      }
      
      
      function ReadUsuario(){
          $rows=self::$db->getRows("Select * From Usuario");
          
          $arrayUsuario= array();
          
          foreach($rows as $c){
              $aux=new usuario($c{'Id'});
              array_push($arrayUsuario,$aux);
          }
          return $arrayUsuario;
      }
      
       function updateUsuario($id,$usuario,$contraseña,$cliente) {    
       $insertrow = self::$db->updateRow("UPDATE Usuario SET Usuario=?,Contraseña=?,Cliente_Id=? WHERE Id = ? ", array( "{$usuario},{$contraseña},{$cliente}",$id));
      } 
      
       function deleteUsuario($id) {    
       $deleterow = self::$db->deleteRow("DELETE FROM Usuario WHERE Id= ?", array("{$id}"));
      }  

        function createUsuario($id,$usuario,$contraseña,$cliente) {    
        $insertrow = self::$db->insertRow("INSERT INTO Usuario (Id,Usuario,Contraseña,Cliente_Id) VALUES (?,?,?,?)", array(null,"{$usuario}","{$contraseña}","{$cliente}"));
       }  
      
  }

?>