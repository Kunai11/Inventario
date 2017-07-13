<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Eliminar Artículo | Control Comercial</title>
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
				<h2>Eliminar artículo</h2>
				<hr>
                <form method="GET" action="resultadosEliminarArticulo.php">
                    <h3>Buscar</h3>
                    <p><input type="text" title="Parametros para la busqueda" name="parametro" id="parametro" required autofocus></p>
                    <hr>
                    <p>
						<a href="seccion_articulos.php"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
						<input class="btn" type="submit" name="buscar" id="buscar" value="Buscar">
					</p>
                </form>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Antes de elimimar un artículo, debe buscar primero el artículo que desea eliminar.</p>
                <p>Por favor, ingrese el código o parte de él en el campo que se muestra y luego haga click en el botón Buscar.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>