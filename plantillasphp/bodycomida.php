
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
<!-- header -->
				<?php include '../plantillasphp/headerRCC.php' ; ?>
				<h2 id="titulopag"> 
				<?php 
				echo $titcat;
				?>  
				</h2>  
				
				<input  href="#" class="button1" id="seccionbuscar" type="submit" value="Buscar"><br><br> <input  id="seccionbuscar" type="search" name="buscar"><br>
				
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
													function agregarAPedido(){
													$PedidoCollectorObj->createPedido($numLinea, $cantidad, $precioplato, $cabecera, $idplato);
													}
													function sumar(){
													$numLinea = $numLinea +1;
													alert('Pedido realizado!');
													echo "AAAAABBBBBBBBBCCCCCCCCCCCCCC";
													}
										$numLinea=1;
												
											if(isset($_GET["idcategoria"])==true){
											
												$cantidad = 1;
												$cabecera =1;
												$idcat = $_GET["idcategoria"]; 
												foreach ($PlatoCollectorObj->leerPlatoPorCategoriaId($idcat) as $objetoauxplato){
												$idplato = $objetoauxplato->getIdPlato();
												$nombreplato = $objetoauxplato->getNombre();
												$nombreimagen = $objetoauxplato->getImagen();
												$precioplato = $objetoauxplato->getPrecio();
												echo "<a href='#'><li>$nombreplato</li></a>";
												echo "<img src='../images/$nombreimagen' class='imares'  alt='res'>";
												echo "<a href='#'><li>$precioplato</li></a>";
												
												
												}
												
											}
											else
											{
												foreach ($PlatoCollectorObj->readPlatos() as $objetoauxplato){
												$nombreplato = $objetoauxplato->getNombre();
												$nombreimagen = $objetoauxplato->getImagen();
												$precioplato = $objetoauxplato->getPrecio();
												echo "<img src='../images/$nombreimagen' class='imares'  alt='res'>";
												echo "&nbsp;&nbsp;&nbsp;$nombreplato";
												echo "&nbsp;&nbsp;&nbsp;$precioplato &nbsp;&nbsp;";
												echo "<a href='#' class='button1' >+</a>";
											}
											}
											
											
											?>
										<!--
										<img src="../images/Mousse.png" class="imares"  alt="res1">
										<img src="../images/Chicken.png" class="imares"  alt="res1">
										<img src="../images/Churrasco.png" class="imares"  alt="res1">
-->
										<a class="button1" href="pedido.php" >Realizar Pedido</a>
									</div>
									<div>
									
									
									
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