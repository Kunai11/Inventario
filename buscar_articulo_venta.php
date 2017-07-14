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
				<h2>Seleccione un artículo para vender</h2>
				<hr>
                <h3>Resultados de la búsqueda: <?php echo $palabra=$_GET['palabra']; ?> </h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Vender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("cn/bdconexion.php");
                            $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo LIKE '%$palabra%'") or die(mysqli_error());
                            while($row=mysqli_fetch_array($sql)) {
                                echo '
                                    <tr>
                                        <td>'.$row['Codigo'].'</td>
                                        <td>'.$row['Descripcion'].'</td>
                                        <td>'.$row['Precio'].'</td>
                                        <td>'.$row['Categoria'].'</td>
                                        <td>
                                            <form method="GET" action="vender_articulo.php">
                                                <input type="hidden" name="Codigo" Id="Codigo" value="'.$row['Codigo'].'">
                                                <input type="hidden" name="palabra" Id="palabra" value="'.$palabra.'">
                                                <input class="btn" type="submit" name="vender" id="vender" value="Vender">
                                            </form>
                                        </td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
                <hr>
                <a href="venta_articulo.php"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Antes de vender un artículo, debe buscar primero el artículo que desea vender.</p>
                <p>Aquí se muestran los resultados de la búsqueda anterior, si el artículo que desea vender se encuentra en la lista, haga click en el botón Vender que corresponda.</p>
                <p>Si no ha encontrado el artículo que estaba buscando, vuelva a la página anterior y realice una nueva búsqueda.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>
