<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Agregar Artículo | Control Comercial</title>
		<link rel="shortcut icon" href="img/logo.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

		<header>
			
			<div class="encabezado" id="top">
				<img src="img/logo.png" class="img-responsive">
				<h1><a href="index.php"><strong>Control Comercial</strong></a></h1>
			</div>

		</header>

		<div id="nav">
				<a href="index.php">Inicio</a>
				<a href="seccion_articulos.php">Art&iacute;culos</a>
				<a href="seccion_transacciones.php">Transacciones</a>
				<a href="seccion_catalogo.php">Cat&aacute;logo</a>
				<a href="seccion_historial.php">Historiales</a>
		</div>

		<div id="contenedor">
			<div class="contenido" id="izq">
				<h2>Agregar artículo</h2>
				<hr>

				<form method="POST" action="guardar_nuevo_producto.php">
					<p>
						Codigo:<br>
						<input  type="number" min="1" name="codigo_art" id="codigo_art" required autofocus tabindex="1">
					</p>
					<p>
						Descripci&oacute;n:<br>
						<input type="text" name="descripcion" id="descripcion" required tabindex="2">
					</p>							
					<p>
						Costo:<br>
						<input type="number" min="1" name="costo" id="costo" required tabindex="3" >
					</p>
					<p>
						Precio:<br>
						<input type="number" min="1" name="precio" id="precio" required tabindex="4" >
					</p>
					<p>
						Categoria:<br>
						<input type="text" name="categoria" id="categoria" required tabindex="5">
					</p>
					<hr>
					<p>
						<input class="btn" type="reset" name="limpiar" value="Limpiar">
						<input class="btn" type="submit" name="guargar" value="Guardar">
					</p>
				</form>

			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Por favor, rellene todos los campos con la información correspondiente y haga click en el botón guardar cuando haya finalizado.</p>
				<p>Para borrar todos los campos, haga click en el botón Limpiar.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>
