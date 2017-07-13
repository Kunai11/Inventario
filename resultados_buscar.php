<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Buscar Artículo | Control Comercial</title>
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
				<h2>Buscar artículo en particular</h2>
				<hr>
                <h3>Resultados de la búsqueda: <?php echo $palabra=$_GET['palabra']; ?> </h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Costo</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Existencias</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("cn/bdconexion.php");
                            $sql=mysqli_query($db,"SELECT C.*, E.Existencias FROM catalogo C INNER JOIN existencias E ON C.Codigo = E.Codigo_Art WHERE Codigo LIKE '%$palabra%'") or die(mysqli_error());
                            while($row=mysqli_fetch_array($sql)) {
                                echo '
                                    <tr>
                                        <td>'.$row['Codigo'].'</td>
                                        <td>'.$row['Descripcion'].'</td>
                                        <td>'.$row['Costo'].'</td>
                                        <td>'.$row['Precio'].'</td>
                                        <td>'.$row['Categoria'].'</td>
                                        <td>'.$row['Existencias'].'</td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
                <hr>
                <p><a href="buscar_articulo.php">Regresar</a></p>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
                <p>Aquí se muestran los resultados de la búsqueda anterior, los detalles del artículo y también sus respectivos valores en existencias.</p>
                <p>Si desea ver un listado completo de los artículos existentes en la base de datos, puede navegar al módulo "Catálogo de artículos" en la sección de "Catálogo", o puede hacer click <a href="catalogo_articulos.php">aquí</a>.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>
