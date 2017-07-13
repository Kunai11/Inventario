<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Modificar Artículo | Control Comercial</title>
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
				<h2>Modificar artículo</h2>
				<hr>
                <form method="GET" action="resultados.php">
                    <h3>Buscar</h3>
                    <p><input type="text" title="Parametros para la busqueda" name="palabra" id="palabra" required autofocus></p>
                    <hr>
                    <p><input class="btn" type="submit" name="buscar" id="buscar" value="Buscar"></p>
                </form>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Antes de modificar un artículo, debe buscar primero el artículo que desea modificar.</p>
                <p>Por favor, ingrese el código o parte de él en el campo que se muestra y luego haga click en el botón Buscar.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>