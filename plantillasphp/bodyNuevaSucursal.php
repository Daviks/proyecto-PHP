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
							<h2 class="letter_spacing">Ingresar nueva sucursal</h2>
                            <br>
							<form id="ContactForm" method="post">
								<div>
									<div class="wrapper">
										<span>Ciudad:</span>
									  <select name="cbxCiudad">
                                        <option value="1">(Seleccione ciudad)</option>
                                        <option value="2">Guayaquil</option>
                                        <option value="3">Quito</option>
                                        <option value="4">Cuenca</option>
                                      </select>
                                    </div><br>
                                    <div class="wrapper">
										<span>Ruc:</span>
										<input type="text" class="input" name="ruc" required>								
									</div>
                                                                        <br>
                                    <div class="wrapper">
										<span>Nombre:</span>
										<input type="text" class="input" name="nombre" required>								
									</div>
                                                                        <br>
                                    
									<div class="wrapper">
										<span>Dirección:</span>
										<input type="text" class="input" name="direccion" required>								
									</div>
                                                                        <br>
									<div class="wrapper">
										<span>Referencia:</span>
										<input type="text" class="input" name="referencia" required>								
									</div>                                    <br>											                                     <div class="wrapper">
										<span>Teléfono:</span>
										<input type="text" class="input" name="telefono" required>								
									</div>                                    <br>											                                     <div class="wrapper">
										<span>Hora de Apertura:</span>
										<input type="text" class="input" name="apertura" required>								
									</div>                                    <br>											                                     <div class="wrapper">
										<span>Hora de Cierre:</span>
										<input type="text" class="input" name="cierre" required>								
									</div>                                    <br>											                                     <div class="wrapper">
										<span>Nombre de La Marca:</span>
										<input type="text" class="input" required>								
									</div>
                                     
                                    
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
