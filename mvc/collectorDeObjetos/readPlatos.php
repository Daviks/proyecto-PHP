<html>
<head>
</head>
<?php
include_once("PlatoCollector.php");
$PlatoCollectorObj = new PlatoCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="../../pages/nuevoPlatillo.php">Nuevo Plato</a></td></tr>
<?php
foreach ($PlatoCollectorObj->readPlatos() as $objetoaux){
  echo "<tr>";
  echo "<td>".$objetoaux->getIdPlato() ."</td>";
  echo "<td>".$objetoaux->getNombre()."</td>";
  echo "<td>".$objetoaux->getPrecio()."</td>";
  echo "<td>".$objetoaux->getDescripcion()."</td>";
  echo "<td>".$objetoaux->getImagen()."</td>";
  echo "<td>".$objetoaux->getCategoria()."</td>";
 echo "<td><a href='formularioUsuarioEditar.php?id=".$objetoaux->getIdPlato()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$objetoaux->getIdPlato()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>