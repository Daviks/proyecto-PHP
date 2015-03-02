<?php
	include_once('Usuario.php');
	include_once('Collector.php');

  class UsuarioCollector extends Collector{
      
      function ShowUsuario($id){
          
          $row=self::$db->getRows("Select * From CrazzyFood.Usuario where Id= ?",array("{$id}"));
          
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
      
       function updateUsuario($id,$usuario,$contrasena,$cliente) {    
       $insertrow = self::$db->updateRow("UPDATE Usuario SET Usuario=?,contrasena=?,Cliente_Id=? WHERE Id = ? ", array( "{$usuario},{$contrasena},{$cliente}",$id));
      } 
      
       function deleteUsuario($id) {    
       $deleterow = self::$db->deleteRow("DELETE FROM Usuario WHERE Id= ?", array("{$id}"));
      }  

        function createUsuario($id,$usuario,$contrasena,$cliente) {    
        $insertrow = self::$db->insertRow("INSERT INTO Usuario (Id,Usuario,contrasena,Cliente_Id) VALUES (?,?,?,?)", array(null,"{$usuario}","{$contrasena}","{$cliente}"));
       }  
      
  }

?>
