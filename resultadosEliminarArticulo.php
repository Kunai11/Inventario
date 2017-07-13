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
                <h3>Resultados de la búsqueda: <?php echo $parametro=$_GET['parametro']; ?> </h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Costo</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("cn/bdconexion.php");
                            $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo LIKE '%$parametro%'") or die(mysqli_error());
                            while($row=mysqli_fetch_array($sql)) {
                                echo '
                                    <tr>
                                        <td>'.$row['Codigo'].'</td>
                                        <td>'.$row['Descripcion'].'</td>
                                        <td>'.$row['Costo'].'</td>
                                        <td>'.$row['Precio'].'</td>
                                        <td>'.$row['Categoria'].'</td>
                                        <td>
                                            <form method="POST" action="confirmarEliminarArticulo.php">
                                                <input type="hidden" name="Codigo" Id="Codigo" value="'.$row['Codigo'].'">
                                                <input type="hidden" name="parametro" Id="parametro" value="'.$parametro.'">
                                                <input class="btn" type="submit" name="eliminar" id="eliminar" value="Eliminar">
                                            </form>
                                        </td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
                <hr>
                <p><a href="eliminar_articulo.php">Regresar</a></p>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Antes de eliminar un artículo, debe buscar primero el artículo que desea eliminar.</p>
                <p>Aquí se muestran los resultados de la búsqueda anterior, si el artículo que desea eliminar se encuentra en la lista, haga click en el botón Eliminar que corresponda.</p>
                <p>Si no ha encontrado el artículo que estaba buscando, vuelva a la página anterior y realice una nueva búsqueda.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>