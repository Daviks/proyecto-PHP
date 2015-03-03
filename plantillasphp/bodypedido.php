
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
//$id=$_GET["titulo"];
if(isset($_GET["titulocategorias"])==true){
	$titcat = $_GET["titulocategorias"]; 
}
else
{
	$titcat = "Pedido";
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
												foreach ($PedidoCollectorObj->readPedidos() as $objetoauxpedido){
												$idpedido = $objetoauxpedido->getIdPedido();
												$lineapedido = $objetoauxpedido->getTotal();
												
												
												echo "<a href='#'><li>$idpedido</li></a>";
												
												echo "<a href='#'><li>$lineapedido</li></a>";
											
											}
											
											
											?>
											
											
											
												<?php
													
													
													/*function accion(){
															$linea = 1;
															$cant = 2;
															$cabe = 1;
															$precio = 1.23;
															$idplato = 1;
															$PedidoCollectorObj->createPedido($linea, $cant, $precio, $cabe, $idplato);
													}*/
													
													
													echo"
													
													<script type='text/javascript'>
														function accion(){
														
														
														
															alert('Compra realizada con Exito');
														}

														</script>
													<button type='submit'  onclick='accion();'> comprar </button>
												";
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