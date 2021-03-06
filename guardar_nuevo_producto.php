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
				<a href="seccion_articulos.php">ARTICULOS</a>
				<a href="seccion_transacciones.php">TRANSACCIONES</a>
				<a class="inicio" href="index.php"> <strong>INICIO</strong> </a>
				<a href="seccion_catalogo.php">CATALOGO</a>
				<a href="seccion_historial.php">HISTORIALES</a>
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
                        <a href="agregar_articulo.php"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
                        ';
                    }else{
                        $sql=mysqli_query($db,"INSERT INTO catalogo(Codigo,Descripcion,Costo,Precio,Categoria) values ('$codigo','$descripcion','$costo','$precio','$categoria')")or die(mysqli_error());
                        $sql=mysqli_query($db,"INSERT INTO existencias(Codigo_Art) values ('$codigo')")or die(mysqli_error());

                        echo '
                        <p>Art&iacute;culo guardado exitosamente.</p>
                        <a href="index.php"><input class="btn" type="button" name="Inicio" id="Inicio" value="Inicio"></a>
						<a href="agregar_articulo.php"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
						<a href="comprar_articulo.php"><input class="btn" type="button" name="Comprar" id="Comprar" value="Comprar"></a>
                    ';
                    }
                ?>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Aqui se muestra la respuesta de la base de datos.</p>
                <p>Si se ha guardado correctamente se mostrará un mensaje.</p>
                <p>En caso de que se muestre un error, vuelva a la página anterior y cambie el valor del código ingresado.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>