<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Crazy Food</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("PlatoCollector.php");
include_once("Plato.php");
$PlatooCollectorObj = new PlatoCollector();
$ObjPlato = $PlatooCollectorObj->showPlato($id);
?>
<h2>Editar Plato</h2>
						<form action="editarPlato.php" method="post" >
									<div class="wrapper">
										<span>Id:</span>
										<input type="decimal" class="input" name="idplato"  value="<?php echo $ObjPlato->getIdPlato(); ?>" required>								
									</div>
									<div class="wrapper">
										<span>Nombre:</span>
										<input type="decimal" class="input" name="nombre" value="<?php echo $ObjPlato->getNombre(); ?>" required>								
									</div>
                                    <br>
									<div class="wrapper">
										<span>Precio:</span>
										<input type="decimal" class="input" name="precio" value="<?php echo $ObjPlato->getPrecio(); ?>" required>								
									</div>
                                    <br>
									<div class="wrapper">
										<span>Descripción:</span>
										<input type="text" class="input" name="descripcion" value="<?php echo $ObjPlato->getDescripcion(); ?>" required>								
									</div>

                                    <br>											                                     <div class="wrapper">
									<div class="wrapper">
										<span>Imagen:</span>
										<input type="text" class="input" name="imagen" value="<?php echo $ObjPlato->getImagen(); ?>" required>								
									</div>
                                     <br>
                                     
                                    
									<div class="centrar">
                                   <input type="submit" value="Guardar" class="button1">
									<a href="readPlatos.php">Cancelar</a>	
									</div>
								
							</form>
</body>
</html>