

<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Guardar Compra | Control Comercial</title>
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
				<h2>Registrando la compra</h2>
				<hr>
                <?php
                    include("cn/bdconexion.php");
                    $codigo=$_POST['codigo_art'];
                    $existencias=$_POST['cantidad'];
                    $fecha=$_POST['fecha'];

                    //echo $identidad.'-'.$nombre.'-'.$direccion.'-'.$telefono;
                    $sql=mysqli_query($db,"UPDATE existencias SET Existencias=Existencias+'$existencias' WHERE Codigo_Art=('$codigo')")or die(mysqli_error());
                    $sql=mysqli_query($db,"INSERT INTO ingresos(Cod_Articulo, Fecha_en, Cantidad) values ('$codigo', '$fecha', '$existencias')")or die(mysqli_error());

                    echo '
                        <p>Nueva compra registrada exitosamente.</p>
                        <p><a href="index.php">Regresar</a></p>
                    ';
                ?>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Aqui se muestra la respuesta de la base de datos.</p>
                <p>Se ha actualizado la base de datos.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>

