<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comprar articulo</title>
</head>
<body>
		<form method="POST" action="guardar_compra.php">
<table position="center" border="1">
			<tr>
				<td colspan="3" align="center"><h1>Compra</h1></td>
			</tr>
			
			<tr>
				
				<td>Codigo de articulo</td>
				<td><input type="number" name="codigo_art" id="codigo_art"></td>
			</tr>
			<tr>
			
				<td>Cantidad de unidades</td>
				<td><input type="number" name="cantidad" id="cantidad"></td>
			</tr>
			<tr>
		
				<td>Fecha de transaccion</td>
				<td><input type="date" name="fecha" id="fecha"></td>
			</tr>
			<tr>
					<td colspan="2" align="center">
						<input type="reset" name="limpiar">
						<input type="submit" name="guargar" value="Guardar">
					</td>
				</tr>
		</table>
</body>
</html>