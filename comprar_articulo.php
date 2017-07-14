<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Comprar Artículo | Control Comercial</title>
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
				<h2>Comprar artículo</h2>
				<hr>

				<form method="POST" action="guardar_compra.php">
					<p>
						Art&iacute;culo<br>
						<div class="select">
							<select name="codigo_art" name="codigo_art" required tabindex="1">
								<?php
									include("cn/bdconexion.php");
									$sql=mysqli_query($db,"SELECT * FROM catalogo") or die(mysqli_error());
									while($row=mysqli_fetch_array($sql)) {
										echo '
											<option value="'.$row['Codigo'].'">'.$row['Descripcion'].'</option>
										';
									}
								?>
							</select>
						</div>
					</p>
					<p>
						Cantidad de unidades<br>
						<input type="number" min="1" name="cantidad" id="cantidad" required tabindex="2">
					</p>							
					<p>
						Fecha de transacción<br>
						<input type="date" name="fecha" id="fecha" required tabindex="3">
					</p>
					<hr>
					<p>
						<a href="seccion_transacciones.php"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
						<input class="btn" type="reset" name="limpiar" tabindex="4">
						<input class="btn" type="submit" name="comprar" value="Comprar" tabindex="5">
					</p>
				</form>

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

<!--

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Comprar articulo</title>
	</head>
	<body>
		<?php
			
		?>
		<a href="index.php">Regresar</a>
		<form method="POST" action="guardar_compra.php">
			<table position="center" border="1">
				<tr>
					<td colspan="3" align="center"><h1>Compra</h1></td>
				</tr>
				<tr>
					<td>Art&iacute;culo</td>
					<td>
						<select name="codigo_art" name="codigo_art" required tabindex="1">
							<?php
								// include("cn/bdconexion.php");
								// $sql=mysqli_query($db,"SELECT * FROM catalogo") or die(mysqli_error());
								// while($row=mysqli_fetch_array($sql)) {
								// 	echo '
								// 		<option value="'.$row['Codigo'].'">'.$row['Descripcion'].'</option>
								// 	';
								// }
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Cantidad de unidades</td>
					<td><input type="number" min="1" name="cantidad" id="cantidad" required tabindex="2"></td>
				</tr>
				<tr>
					<td>Fecha de transaccion</td>
					<td><input type="date" name="fecha" id="fecha" required tabindex="3"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="reset" name="limpiar" tabindex="4">
						<input type="submit" name="guargar" value="Guardar" tabindex="5">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
-->