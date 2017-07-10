<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar nuevo producto</title>
	</head>
	<body>
		<a href="index.php">Regresar</a>
		<form method="POST" action="guardar_nuevo_producto.php">
			<table border="1">
				<tr>
					<td colspan="2" align="center"><h1>Agregar nuevo producto</h1></td>
				</tr>
				<tr>
					<td>Codigo:</td>
					<td><input  type="number"  name="codigo_art" id="codigo_art" required autofocus tabindex="1"></td>
				</tr>
				<tr>
					<td>Descripci&oacute;n:</td>
					<td><input type="text" name="descripcion" id="descripcion" required tabindex="2"></td>
				</tr>
				<tr>
					<td>Costo:</td>
					<td><input type="number" name="costo" id="costo" required tabindex="3" ></td>
				</tr>
				<tr>
					<td>Precio:</td>
					<td><input type="number" name="precio" id="precio" required tabindex="4" ></td>
				</tr>
				<tr>
					<td>Categoria:</td>
					<td><input type="text" name="categoria" id="categoria" required tabindex="5"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="reset" name="limpiar">
						<input type="submit" name="guargar" value="Guardar">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>