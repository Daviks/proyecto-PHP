<!-- content -->
<br>
<br>

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
										<span>Contraseña:</span>
										<input type="text" name="contrasena" class="input" >								
									</div><br>
									<div class="wrapper">
										<span>Repetir contraseña:</span>
										<input type="text" name="repetircontrase�a" class="input" >								
									</div>
                                                                       <br>
									<div class="wrapper">
										<span>Dirección:</span>
										<input type="text" name="direccion" class="input" >								
									</div>
                                    <br>											                                     <div class="wrapper">
										<span>Teléfono:</span>
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
