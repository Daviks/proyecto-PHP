<!-- content -->
<?php include '../plantillasphp/headerBodyNuevaSucursal.php' ; ?>
<!-- content -->
<br>
<br>

			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Ingresar nueva sucursal</h2>
                            <br>
							<form id="ContactForm">
								<div>
									<div class="wrapper">
										<span>Dirección:</span>
									  <select name="cbxCiudad">
                                        <option value="1">(Seleccione ciudad)</option>
                                        <option value="2">Guayaquil</option>
                                        <option value="3">Quito</option>
                                        <option value="4">Cuenca</option>
                                      </select>
                                    </div><br>
                                    
									<div class="wrapper">
										<span>Dirección:</span>
										<input type="text" class="input" >								
									</div>
                                                                        <br>
									<div class="wrapper">
										<span>Referencia:</span>
										<input type="text" class="input" >								
									</div>                                    <br>											                                     <div class="wrapper">
										<span>Teléfono:</span>
										<input type="text" class="input" >								
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






<div class="body3">

		<div class="main zerogrid">
        
        <?php include '../plantillasphp/footRCC.php' ; ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>