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
							<h2 class="letter_spacing">Contactenos</h2>
							<form id="ContactForm" action="../mvc/collectorDeObjetos/insertarAyuda.php" method="post">
								<div>
									<div class="wrapper">
										<span>Nombre:</span>
										<input type="text" name:"nombre" class="input" required>
									</div>
									<div class="wrapper">
										<span>Email:</span>
										<input type="email" name:"email" class="input" required>								
									</div>
									<div class="textarea_box">
										<span>Mensaje:</span>
										<textarea name="mensaje" cols="1" rows="1" required></textarea>								
									</div>
								<div class="centrar">
								<input type="submit" value="Enviar" class="button1"> 
									</div>
								</div>
							</form>
						</div>
											<?php
include_once('../mvc/crud/presentarAyuda.php'); ?>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<div class="body2">
	<div class="main zerogrid">
		<article id="content2">
			<section>
				<div class="wrapper">
					<div class="col-1-3"><div class="wrap-col">
						<h2 class="nuevo_estilo">Nuestros contactos</h2>
						<div class="wrapper pad_bot1">

							<p class="address">
								Carlos León,Andres Morales,Arturo Ramirez, David Loor , David moran.<br>
								<span>Telefonos:</span>    +1 800 559 6580<br>
								<span>Celulares:</span>    +1 959 603 6035<br>
								<span>Email:</span>             <a href="mailto:">crazyfood@crazyfood.org</a>
							</p>
					
					</div></div>
					</div>
				</div>
			</section>
		</article>
<!-- / content -->
	</div>
</div>

<?php include '../plantillasphp/footRCC.php' ; ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
