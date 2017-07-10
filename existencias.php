<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar existencias</title>
</head>

<body>
	<form method="POST" action="guardar_existencias.php">
<form>
	Codigo de articulo: <input type="number" name="codigo_art" id="codigo_art"  tabindex="1" required>
	<br>
	Cantidad de existencias: <input type="number" name="existencias" id="existencias" tabindex="2" required>
	<br>
Ingresar fecha de compra: <input type="date" id="fecha" name="fecha" class=required/> 
<br>
	<input type="reset" name="limpiar">
    <input type="submit" name="guargar" value="Guardar">
</form>
</body>
</html>