<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Historial de Ventas | Control Comercial</title>
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
				<h2>Historial de ventas</h2>
				<hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Codigo del Articulo</th>
                            <th>Fecha de Transaccion</th>
                            <th>Cantidad Vendida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("cn/bdconexion.php");
                            $sql=mysqli_query($db,"SELECT * FROM egresos") or die(mysqli_error());
                            while($row=mysqli_fetch_array($sql)) {
                                echo '
                                    <tr>
                                        <td>'.$row['Codigo'].'</td>
                                        <td>'.$row['Cod_Articulo'].'</td>
                                        <td>'.$row['Fecha_sal'].'</td>
                                        <td>'.$row['Cantidad'].'</td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
                <hr>
                <a href="seccion_historial.php"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
                <p>Aquí se muestran el registro de todas las ventas de artículos que se han realizado, también los respectivos valores en existencias descargados y las fechas en que fueron realizadas.</p>
                <p>Si desea ver el historial de compras, puede navegar al módulo "Historial de Compras" en la sección de "Historiales", o puede hacer click <a href="historial_ingresos.php">aquí</a>.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>
