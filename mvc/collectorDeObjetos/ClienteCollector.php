<?php
	include_one('../baseDeDatos/Cliente.php');
	include_one('../collector/Collector.php');

  class ClienteCollector extends Collector{
      
      function ShowCliente($id){
          
          $row=self::$db->getRows("Select * From Cliente where Id= ?",array("{$id}"));
          
          $Cliente=new Cliente($row[0]{'Id'});
          
          return $Cliente;
      }
      
      
      function ReadCliente(){
          $rows=self::$db->getRows("Select * From Cliente");
          
          $arrayCliente= array();
          
          foreach($rows as $c){
              $aux=new Cliente($c{'Id'});
              array_push($arrayCliente,$aux);
          }
          return $arrayCliente;
      }
      
       function updateCliente($id,$nombre,$apellido,$email,$numero_tarjeta,$tipo_cliente) {    
       $insertrow = self::$db->updateRow("UPDATE Cliente SET Nombre=?, Apellido= ?,Email= ?,Numero_tarjeta= ?,Tipo_Cliente_Id= ? WHERE Id = ? ", array( "{$nombre}","{$apellido}","{$email}","{$numero_tarjeta}","{$tipo_cliente}",$id));
      } 
      
       function deleteCliente($id) {    
       $deleterow = self::$db->deleteRow("DELETE FROM Cliente WHERE Id= ?", array("{$id}"));
      }  

        function createCliente($id,$nombre,$apellido,$email,$numero_tarjeta,$tipo_cliente) {    
        $insertrow = self::$db->insertRow("INSERT INTO Cliente(Id,Nombre,Apellido,Email,Numero_Tarjeta,Tipo_Cliente_Id) VALUES (?,?,?,?,?,?)", array(null,"{$nombre}","{$apellido}","{$email}","{$numero_tarjeta}","{$tipo_cliente}"));
       }  
      
  }

?>
