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
<div class="body2">
	<div class="main zerogrid">
		
<!-- / content -->
	</div>
</div>
</div>
<?php include '../plantillasphp/footRCC.php' ; ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
