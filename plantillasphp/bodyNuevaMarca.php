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
							<h2 class="letter_spacing">Registrar nuevo restaurante</h2>
                            <br>
							<form id="ContactForm" name="NuevaMarca" method="post">
								<div>
									<div class="wrapper">
										<span>Razón social:</span>
										<input name="razon" type="text" class="input" >
									</div>
                                    <br>
									<div class="wrapper">
										<span>RUC:</span>
										<input name="ruc" type="number" max="15" class="input" >								
									</div>                                    <br>
									<div class="wrapper">
										<span>Contraseña:</span>
										<input name="contraseña" type="password" class="input" >								
									</div>
                                                                       <br>
									<div class="wrapper">
										<span>Dirección:</span>
										<input name="direccion" type="text" class="input" >								
									</div>
                                    <br>											                                     <div class="wrapper">
										<span>Teléfono:</span>
										<input name="telefono" type="number" max="10" class="input" >								
									</div>
                                     <br>
                                    
									<div class="centrar">
                                    <br>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Registrar</a>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()">Cancelar</a>		
									</div>
								</div>
							</form>
						
                            <br>
                            <div class="linea">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
                             <br>
                                          <div class="col-3-6">
                            <figure class="pad_bot1"><a href="nuevoPlatillo.php"><img src="../images/disfruta.png" alt="" ></a></figure>
                                  <p class="estilomarca"><a href="nuevoPlatillo.php">Nuevo <br> Plato</a></p>
                            </div>
                                  
							<div class="col-3-6">
								<figure class="pad_bot1"><a href="nuevaSucursal.php"><img src="../images/elige.png" alt="" ></a></figure>
                                  <p class="estilomarca"><a href="nuevaSucursal.php">Nueva <br> Sucursal</a></p>
                            </div>
                            
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
