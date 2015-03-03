<!-- content -->
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
<!-- header -->
				<?php include '../plantillasphp/headerRCC.php' ; ?>
	

<br>
<br>
			
			
			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Ingresar Nuevo Plato</h2>
                            <br>
							<form id="ContactForm" action="../mvc/collectorDeObjetos/insertarPlato.php" method="post">
								<div>
									<div class="wrapper">
										<span>Nombre del Plato:</span>
										<input type="text" class="input" name="nombre" required>
									</div>
                                    <br>
									<div class="wrapper">
										<span>Precio:</span>
										<input type="number" class="input" name="precio"required>								
									</div>
                                    <br>
									<div class="wrapper">
										<span>Descripción:</span>
										<input type="text" class="input" name="descripcion" required>								
									</div>

                                    <br>											                                     <div class="wrapper">
									<div class="wrapper">
										<span>Imagen:</span>
										<input type="text" class="input" name="imagen" required>								
									</div>
                                     <br>
                                     
                                    
									<div class="centrar">
                                    <br>
									<input type="submit" value="Registrar" class="button1"> 	
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</article>
			
		</div>
	</div>
</div>
<div class="body2">
	<div class="main zerogrid">
		
<!-- / content -->
	</div>
</div>
</div>
<?php include '../plantillasphp/footRCC.php' ; ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
