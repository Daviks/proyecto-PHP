<?php
	include_once('Cliente.php');
	include_once('Collector.php');

  class ClienteCollector extends Collector{
      
      function ShowCliente($id){
          
          $row=self::$db->getRows("Select * From Cliente where Id= ?",array("{$id}"));
          
          $Cliente=new Cliente($row[0]{'Id'});
          
          return $Cliente;
      }
      function ShowClienteNombre($nombre){
          
          $row=self::$db->getRows("Select * From Cliente where Nombre= ?",array("{$nombre}"));
          
          $Cliente=new Cliente($row[0]{'Id'});
          
          return $Cliente;
      }
      
      
      function ReadCliente(){
          $rows=self::$db->getRows("SELECT * FROM cliente");
          
          $arrayCliente= array();
          
          foreach($rows as $c){
              $aux=new Cliente($c{'Id'},$c{'Nombre'},$c{'Apellido'},$c{'Email'},$c{'Numero_Tarjeta'},$c{'Tipo_Cliente_Id'});
              array_push($arrayCliente, $aux);
          }
          return $arrayCliente;
      }
      
       function updateCliente($id,$nombre,$apellido,$email,$numero_tarjeta,$tipo_cliente) {    
       $insertrow = self::$db->updateRow("UPDATE Cliente SET Nombre=?, Apellido= ?,Email= ?,Numero_tarjeta= ?,Tipo_Cliente_Id= ? WHERE Id = ? ", array( "{$nombre}","{$apellido}","{$email}","{$numero_tarjeta}","{$tipo_cliente}",$id));
      } 
      
       function deleteCliente($id) {    
       $deleterow = self::$db->deleteRow("DELETE FROM Cliente WHERE Id= ?", array("{$id}"));
      }  

        function createCliente($nombre,$apellido,$email,$numero_tarjeta,$tipo_cliente) {    
        $insertrow = self::$db->insertRow("INSERT INTO Cliente(Id,Nombre,Apellido,Email,Numero_Tarjeta,Tipo_Cliente_Id) VALUES (?,?,?,?,?,?)", array(null,"{$nombre}","{$apellido}","{$email}","{$numero_tarjeta}","{$tipo_cliente}"));
       }  
	   
        function ultimoid(){
			$query= mysql_query("SELECT MAX(Id) AS id FROM cliente");
			 if ($row = mysql_fetch_row($query)) 
			 {
			   $id = trim($row[0]);
			 }
		return $id;
	  }
  }
  


?>
