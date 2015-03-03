<?Php
	include_once("ClienteCollector.php");
	include_once("UsuarioCollector.php");
	include_once("Cliente.php");
	
	$clienteCollector = new ClienteCollector();

	$cliente = new Cliente();

	foreach($clienteCollector->ReadCliente()as $objaux){
	  $id = $objaux->getID_Cliente();
       echo "$id<br>";
	   var_dump($objaux);
		}
	
?>