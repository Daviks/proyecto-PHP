

<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
			
			<?php include '../plantillasphp/headerRCC.php' ; ?>

				<h2 id="titulopag"> Registrar </h2> 
				
				
	
				
<!-- / header -->
<!-- content -->
				<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Registrar</h2>
                            <br>
				
                            <form action="../mvc/controladores/insertarUsuario.php" method="POST" id="ContactForm">
								<div>
									<div class="wrapper">
										<span>Nombre:</span>
                                                                                <input type="text" name="nombre" class="input" >
									</div>
                                    <br>
									<div class="wrapper">
										<span>Apellidos:</span>
                                                                                <input type="text" name="apellido" class="input" >								
									</div>
                                                                        <br>
									<div class="wrapper">
										<span>Email:</span>
                                                                                <input type="text" name="email" class="input" >								
									</div>                                    <br>
									<div class="wrapper">
										<span>Usuario:</span>
										<input type="text" name="usuario"  class="input" >								
									</div>                                    <br>
									<div class="wrapper">
										<span>Contrase&ntilde;a:</span>
										<input type="text" name="contrasena" class="input" >								
									</div><br>
									<div class="wrapper">
										<span>Repetir contrase&ntilde;a:</span>
										<input type="text" name="repetircontraseña" class="input" >								
									</div>
                                                                       <br>
                                                                       									<div class="wrapper">
										<span>Numero Tarjeta:</span>
										<input type="text" name="numtarjeta" class="input" >								
									</div>
                                    <br>
									<div class="wrapper">
										<span>DirecciÃ³n:</span>
										<input type="text" name="direccion" class="input" >								
									</div>
                                    <br>											                                     <div class="wrapper">
										<span>TelÃ©fono:</span>
										<input type="text" name="telefono" class="input" >								
									</div>
                                     <br>
                                    
									<div class="centrar">
                                    <br>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Registrar</a>
									<a href="../index.php" class="button1" onClick="document.getElementById('ContactForm').reset()">Cancelar</a>		
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
