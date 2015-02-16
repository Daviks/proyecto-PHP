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
      
       function updateUsuario($id,$usuario,$contrase�a,$cliente) {    
       $insertrow = self::$db->updateRow("UPDATE Usuario SET Usuario=?,Contrase�a=?,Cliente_Id=? WHERE Id = ? ", array( "{$usuario},{$contrase�a},{$cliente}",$id));
      } 
      
       function deleteUsuario($id) {    
       $deleterow = self::$db->deleteRow("DELETE FROM Usuario WHERE Id= ?", array("{$id}"));
      }  

        function createUsuario($id,$usuario,$contrase�a,$cliente) {    
        $insertrow = self::$db->insertRow("INSERT INTO Usuario (Id,Usuario,Contrase�a,Cliente_Id) VALUES (?,?,?,?)", array(null,"{$usuario}","{$contrase�a}","{$cliente}"));
       }  
      
  }

?>