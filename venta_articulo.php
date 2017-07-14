<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Vender Artículo | Control Comercial</title>
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
				<a href="seccion_articulos.php">ARTICULOS</a>
				<a href="seccion_transacciones.php">TRANSACCIONES</a>
				<a class="inicio" href="index.php"> <strong>INICIO</strong> </a>
				<a href="seccion_catalogo.php">CATALOGO</a>
				<a href="seccion_historial.php">HISTORIALES</a>
		</div>

		<div id="contenedor">
			<div class="contenido" id="izq">
				<h2>Vender artículo</h2>
				<hr>
                <form method="GET" action="buscar_articulo_venta.php">
                    <h3>Buscar</h3>
                    <p><input type="text" title="Parametros para la busqueda" name="palabra" id="palabra" required autofocus></p>
                    <hr>
                    <p>
						<a href="seccion_transacciones.php"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
						<input class="btn" type="submit" name="ver" id="ver" value="Ver Descripción">
					</p>
                </form>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
                <p>Por favor, ingrese el código o parte de él en el campo que se muestra y luego haga click en el botón Buscar.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>
