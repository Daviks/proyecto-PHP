

<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
			
			<?php include '../plantillasphp/headerRCC.php' ; ?>
				
<!-- / header -->
<!-- content -->
				<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Registrar</h2>
                            <br>
				
                            <form action="../mvc/collectorDeObjetos/insertarCliente.php"  method="POST" id="ContactForm">
								<div>
									<div class="wrapper">
										<span>Nombre:</span>
                                         <input type="text" name="nombre" class="input" required>
									</div>
                                    <br>
									<div class="wrapper">
										<span>Apellidos:</span>
                                        <input type="text" name="apellido" class="input" required>								
									</div>
                                                                        <br>
									<div class="wrapper">
										<span>Email:</span>
                                         <input type="email" name="email" class="input" required>								
									</div>                                    <br>
									<div class="wrapper">
										<span>Usuario:</span>
										<input type="text" name="usuario"  class="input" required>								
									</div>                                    <br>
									<div class="wrapper">
										<span>Contraseña:</span>
										<input type="password" name="contrasena" class="input" required>								
									</div><br>
									<div class="wrapper">
										<span>Repetir Contraseña:</span>
										<input type="password" name="repetircontraseña" class="input" required>								
									</div>
                                                                       <br>
                                                                       									<div class="wrapper">
										<span>Número Tarjeta:</span>
										<input type="text" name="numtarjeta" class="input" required>								
									</div>
                                    <br>
									<div class="wrapper">
										<span>Dirección:</span>
										<input type="text" name="direccion" class="input" required>								
									</div>
                                    <br>											                                     <div class="wrapper">
										<span>Teléfono:</span>
										<input type="text" name="telefono" class="input" required>								
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
</div>

<?php include '../plantillasphp/footRCC.php' ; ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
