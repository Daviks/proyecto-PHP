
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
//$id=$_GET["titulo"];
if(isset($_GET["titulocategorias"])==true){
	$titcat = $_GET["titulocategorias"]; 
}
else
{
	$titcat = "Platos";
}


include_once('../mvc/collectorDeObjetos/CategoriaCollector.php');
include_once('../mvc/collectorDeObjetos/PlatoCollector.php');
$CategoriaCollectorObj = new CategoriaCollector();
$PlatoCollectorObj = new PlatoCollector();
?>
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
<!-- header -->
				<?php include '../plantillasphp/headerRCC.php' ; ?>
<<<<<<< HEAD
				<h2 id="titulopag"> 
				<?php 
				echo $titcat;
				?>  
				</h2>  
				
				<input  href="#" class="button1" id="seccionbuscar" type="submit" value="Buscar"><br><br> <input  id="seccionbuscar" type="search" name="buscar"><br>
=======
				<h2 id="titulopag"> Comida </h2><form method="post" name="buscar">  <input  href="#" class="button1" id="seccionbuscar" type="submit" value="Buscar"><br><br> <input  id="seccionbuscar" type="search" name="buscar"></form><br>
>>>>>>> origin/master
				
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
											<!--
											<li>Caf&eacute</li>
											<li>Pizza</li>
											<li>Mariscos</li>
											<li>Carnes</li>
											-->
										</ul>

									</div>
									
									<div id="banner_right">
										
									<?php
											
											if(isset($_GET["idcategoria"])==true){
												$idcat = $_GET["idcategoria"]; 
												foreach ($PlatoCollectorObj->leerPlatoPorCategoriaId($idcat) as $objetoauxplato){
												$nombreplato = $objetoauxplato->getNombre();
												$nombreimagen = $objetoauxplato->getImagen();
												echo "<a href='#'><li>$nombreplato</li></a>";
												echo "<img src='../images/$nombreimagen' class='imares'  alt='res'>";
												}
												
											}
											else
											{
												foreach ($PlatoCollectorObj->readPlatos() as $objetoauxplato){
												$nombreplato = $objetoauxplato->getNombre();
												echo "<a href='#'><li>$nombreplato</li></a>";
											}
											}
											
											
											?>
										<!--
										<img src="../images/Mousse.png" class="imares"  alt="res1">
										<img src="../images/Chicken.png" class="imares"  alt="res1">
										<img src="../images/Churrasco.png" class="imares"  alt="res1">
-->
									</div>
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