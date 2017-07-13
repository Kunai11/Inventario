<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Guardando Nuevo Artículo | Control Comercial</title>
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
				<h2>Guardando nuevo artículo</h2>
				<hr>
                <?php
                    include("cn/bdconexion.php");
                    $codigo=$_POST['codigo_art'];
                    $descripcion=$_POST['descripcion'];
                    $costo=$_POST['costo'];
                    $precio=$_POST['precio'];
                    $categoria=$_POST['categoria'];

                    //echo $identidad.'-'.$nombre.'-'.$direccion.'-'.$telefono;

                    $sql=mysqli_query($db,"SELECT Codigo FROM catalogo WHERE Codigo = '$codigo' ")or die(mysqli_error());

                    if (mysqli_fetch_array($sql)) {
                        echo '
                        <p color="red">Error el art&iacute;culo no se puede agregar.</p>
                        <p>Ya existe el Codigo ingresado.</p>
                        <p><a href="agregar_articulo.php">Regresar</a></p>
                        ';
                    }else{
                        $sql=mysqli_query($db,"INSERT INTO catalogo(Codigo,Descripcion,Costo,Precio,Categoria) values ('$codigo','$descripcion','$costo','$precio','$categoria')")or die(mysqli_error());
                        $sql=mysqli_query($db,"INSERT INTO existencias(Codigo_Art) values ('$codigo')")or die(mysqli_error());

                        echo '
                        <p>Art&iacute;culo guardado exitosamente.</p>
                        <p><a href="index.php">Volver al Inicio</a></p>
                    ';
                    }
                ?>
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