<?php

if(isset($_GET["titulocategorias"])==true){
	$titcat = $_GET["titulocategorias"]; 
}
else
{
	$titcat = "Platos";
}


include_once('../mvc/collectorDeObjetos/CategoriaCollector.php');
include_once('../mvc/collectorDeObjetos/PlatoCollector.php');
include_once('../mvc/collectorDeObjetos/PedidoCollector.php');

$CategoriaCollectorObj = new CategoriaCollector();
$PlatoCollectorObj = new PlatoCollector();
$PedidoCollectorObj = new PedidoCollector();

?>

<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
			
			<?php include '../plantillasphp/headerRCC.php' ; ?>

				<h2 id="titulopag"> Ciudades </h2> <input  href="#" class="button1" id="seccionbuscar" type="submit" value="Buscar"><br><br> <input  id="seccionbuscar" type="search" name="buscar"><br>
				
				<div id="contenido">
				
									<div id="banner_left">
										<ul id="menu_categorias">
											<li id="cate">Categorias</li>
											
											<?php
											foreach ($CategoriaCollectorObj->readCategorias() as $objetoaux){
											  
											  $nombre = $objetoaux->getNombre();
												$idcat = $objetoaux->getIdCategoria();
											  echo "<a href='comida.php?titulocategorias=$nombre&idcategoria=$idcat'><li>$nombre</li></a>";
											  
											}
											?>
										</ul>

									</div>
									
									<div id="banner_right">
										<a href='../pages/restaurante.php?titulo=Quito' title="Quito"><img src="../images/quito.png" id="ima1" class="imares"  alt="res1"></a>
										<a href='../pages/restaurante.php?titulo=Cuenca' title="Cuenca"><img src="../images/cuenca.png" id="ima2" class="imares"  alt="res1" ></a>
										<a href='../pages/restaurante.php?titulo=Guayaquil' title="Guayaquil"><img src="../images/guayaquil.png" id="ima3" class="imares"  alt="res1" ></a>
												
										
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
