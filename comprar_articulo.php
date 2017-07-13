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
								include("cn/bdconexion.php");
								$sql=mysqli_query($db,"SELECT * FROM catalogo") or die(mysqli_error());
								while($row=mysqli_fetch_array($sql)) {
									echo '
										<option value="'.$row['Codigo'].'">'.$row['Descripcion'].'</option>
									';
								}
							?>
						</select>
					</td>
					<!-- <td><input type="number" name="codigo_art" id="codigo_art"></td> -->
				</tr>
				<tr>
					<td>Cantidad de unidades</td>
					<td><input type="number" name="cantidad" id="cantidad" required tabindex="2"></td>
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