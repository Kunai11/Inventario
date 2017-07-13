<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Eliminar articulo existente</title>
	</head>

	<body>
		<a href="index.php">Regresar</a>
		<table border="1">
			<th colspan="2" align="center"><h1>Eliminar articulo existente</h1></th>
			<form method="GET" action="resultadosEliminarArticulos.php">
			<tr>
				<td>Buscar</td>
				<td>
					<input type="text" title="Parametros para la busqueda" name="parametro" id="parametro" required autofocus>
					<input type="submit" name="buscar" id="buscar" value="Buscar">
				</td>
			</tr>
			</form>
		</table>
	</body>
</html>