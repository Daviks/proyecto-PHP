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
							<form id="ContactForm" name="Ingresarsucursal" method="post">
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
										<span>Dirección:</span>
										<input name="direccionsucursal" type="text" class="input" >								
									</div>
                                                                        <br>
									<div class="wrapper">
										<span>Referencia:</span>
										<input name="referenciasucursal" type="text" class="input" >								
									</div>                                    <br>											                                     <div class="wrapper">
										<span>Teléfono:</span>
										<input name="telefonosucursal" type="number" max="10" class="input" >								
									</div>
                                     
                                    
									<div class="centrar">
                                    <br>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Registrar</a>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()">Cancelar</a>		
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
