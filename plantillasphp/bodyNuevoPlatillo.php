<!-- content -->
<?php include '../plantillasphp/headerBodyNuevaSucursal.php' ; ?>

<!-- content -->
<br>
<br>

			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Ingresar nuevo plato</h2>
                            <br>
							<form id="ContactForm">
								<div>
									<div class="wrapper">
										<span>Nombre del platillo:</span>
										<input type="text" class="input" >
									</div>
                                    <br>
									<div class="wrapper">
										<span>Precio:</span>
										<input type="text" class="input" >								
									</div>
                                    <br>
									<div class="wrapper">
										<span>Descripción:</span>
										<input type="text" class="input" >								
									</div>
                                    <br>											                                     <div class="wrapper">
										<input name='uploadedfile' type='file'>
									</div>
                                     <br>
                                    
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
</html>
