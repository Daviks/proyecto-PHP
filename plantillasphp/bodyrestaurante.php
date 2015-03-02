
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
//$id=$_GET["titulo"];
if(isset($_GET["titulo"])==true){
	$id = $_GET["titulo"]; 
}
else
{
	$id = "Restaurantes";
}


include_once('../mvc/collectorDeObjetos/CategoriaCollector.php');
include_once('../mvc/collectorDeObjetos/PlatoCollector.php');
$CategoriaCollectorObj = new CategoriaCollector();
$PlatoCollectorObj = new PlatoCollector();
?>
<?php

?>
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
			
			<?php include '../plantillasphp/headerRCC.php' ; ?>

				
				<h2 id="titulopag"> 
				<?php 
				echo $id;
				?>  
				</h2> <input  href="#" class="button1" id="seccionbuscar" type="submit" value="Buscar"><br><br> <input  id="seccionbuscar" type="search" name="buscar"><br>
				
				<div id="contenido">
				
									<div id="banner_left">
										<ul id="menu_categorias">
										<li id="cate">Categor&iacuteas</li>
										<!--codigo php para obtener las categorias-->
										
										<?php
											foreach ($CategoriaCollectorObj->readCategorias() as $objetoaux){
											  
											  $nombre = $objetoaux->getNombre();
												$idcat = $objetoaux->getIdCategoria();
											  echo "<a href='comida.php?titulocategorias=$nombre&idcategoria=$idcat'><li>$nombre</li></a>";
											  
											  //echo $idcat;
											  
											  //echo "<td>".$objetoaux->getNombre()."</td>";
											  //echo "<a href='formularioUsuarioEditar.php?id=".$objetoaux->getIdUsuario()."'>editar</a>";
											  //echo "<td><a href='eliminar.php?id=".$objetoaux->getIdUsuario()."'>eliminar</a></td>"; 
											  //echo "<td><a href='pages/restaurante.php?titulo=".$objetoaux->getNombre()."'>Nueva con titulo</a></td>"; 
											  //echo "</tr>"; 
											}
											?>
										<!--
											<li id="cate">Categor&iacuteas</li>
											<li>Caf&eacute</li>
											<li>Pizza</li>
											<li>Mariscos</li>
											<li>Carnes</li>
											-->
										</ul>

									</div>
									
									<div id="banner_right">
									
									
										<img src="../images/Tomate.png" class="imares"  alt="res1">
										<img src="../images/mcdonalds.png" class="imares"  alt="res1" >
										<img src="../images/Menestras_Del_Negro_Logo.jpg" class="imares"  alt="res1" >
										
										
									</div>
								  <br/> 
				</div>
	
				
<!-- / header -->
<!-- content -->
				<article id="content">							
				</article>

			</div>
		</div>
				</div>
</div>

<?php include '../plantillasphp/footRCC.php' ; ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
