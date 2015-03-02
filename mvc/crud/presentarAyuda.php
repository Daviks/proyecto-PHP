<html>
<head>
</head>
<?php
include_once("../mvc/collectorDeObjetos/AyudaCollector.php");
$AyudaCollectorObj = new AyudaCollector();
?>
<body>
<div id="main">
<table>

<?php
/* imprimir arreglo*/
foreach ($AyudaCollectorObj->readAyudas() as $c){
  echo "<tr>";
  echo "<br>".$c->getId() ."</td>";
  echo "<br>".$c->getNombre()."</td>";
  echo "<br>".$c->getEmail()."</td>";
  echo "<br>".$c->getMensaje() ."</td>";
  
  /*echo "<td><a href='formularioUsuarioEditar.php?id=".$c->getIdUsuario()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdUsuario()."'>eliminar</a></td>"; 
  */
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
