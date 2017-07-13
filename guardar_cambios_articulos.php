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
				<a href="seccion_articulos.php">ARTICULOS</a>
				<a href="seccion_transacciones.php">TRANSACCIONES</a>
				<a class="inicio" href="index.php"> <strong>INICIO</strong> </a>
				<a href="seccion_catalogo.php">CATALOGO</a>
				<a href="seccion_historial.php">HISTORIALES</a>
		</div>

		<div id="contenedor">
			<div class="contenido" id="izq">
				<h2>Guardando cambios en el artículo</h2>
				<hr>
                <?php
                    include("cn/bdconexion.php");
                    $palabra=$_GET['palabra'];
                    $codigo=$_GET['codigo'];
                    $descripcion=$_GET['descripcion'];
                    $costo=$_GET['costo'];
                    $precio=$_GET['precio'];
                    $categoria=$_GET['categoria'];
                    $sql=mysqli_query($db,"UPDATE catalogo SET Codigo='$codigo', Descripcion='$descripcion', Costo='$costo', Precio='$precio', Categoria='$categoria' WHERE Codigo='$codigo'") or die(mysqli_error());

                    echo '
                        <p>Art&iacute;culo modificado exitosamente.</p>
                        <a href="resultados.php?palabra='.$palabra.'"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
						<a href="agregar_articulo.php"></a>
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