<?php
	include_one('../Objetos/Tipo_Cliente.php');
	include_one('../collector/Collector.php');

  class Tipo_ClienteCollector extends Collector{
      
      function ShowCliente($id){
          
          $row=self::$db->getRows("Select * From Tipo_Cliente where Id= ?",array("{$id}"));
          
          $Tipo_Cliente=new Tipo_Cliente($row[0]{'Id'});
          
          return $Tipo_Cliente;
      }
      
      
      function ReadTipo_Cliente(){
          $rows=self::$db->getRows("Select * From Tipo_Cliente");
          
          $arrayTipo_Cliente= array();
          
          foreach($rows as $c){
              $aux=new Tipo_Cliente($c{'Id'});
              array_push($arrayTipo_Cliente,$aux);
          }
          return $arrayTipo_Cliente;
      }
     
       function updateTipo_Cliente($id,$Descripcion) {    
       $insertrow = self::$db->updateRow("UPDATE  Tipo_Cliente SET Descripcion=? WHERE Id = ? ", array( "{$Descripcion}",$id));
      } 
      
       function deleteTipo_Cliente($id) {    
       $deleterow = self::$db->deleteRow("DELETE FROM Tipo_Usuario WHERE Id= ?", array("{$id}"));
      }  

        function createTipo_Usuario($id,$descripcion) {    
        $insertrow = self::$db->insertRow("INSERT INTO Tipo_Usuario (Id,Descripcion) VALUES (?,?)", array(null,"{$descripcion}"));
       }
  }
      ?>