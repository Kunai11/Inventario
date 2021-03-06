<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Control Comercial</title>
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
				<h2>Inicio</h2>
				<hr>
				<h3>Descripción general</h3>
				<p>Proyecto sencillo realizado en lenguaje PHP y mySQL que maneja el control de artículos en un inventario permitiendo al administrador:</p>
				<ul>
					<li>Agregar, modificar y eliminar descripciones para sus artículos.</li>
					<li>Aumentar y dismiuir las existencias de sus artículos.</li>
					<li>Mostrar un historial de los ingresos y egresos de los artículos, la cantidad en la transacción y la fecha en la que realizó.</li>
				</ul>
				<hr>
				<h3>Listado de funcionalidades</h3>
				<p>Las funcionalidades se dividen a su vez en varios módulos.</p>
				<ol>
					<li><h4><a href="seccion_articulos.php">Artículos</a></h4></li>
					<p>Contiene las opciones que pueden realizarse con los artículos en la base de datos.</p>
					<ul>
						<li><a href="agregar_articulo.php">Agregar nuevo articulo</a></li>
						<li><a href="modificar_articulo.php">Modificar articulo</a></li>
						<li><a href="eliminar_articulo.php">Eliminar articulo</a></li>
					</ul>
					<br>
					<li><h4><a href="seccion_transacciones.php">Transacciones</a></h4></li>
					<p>Aquí se puede encontrar las transacciones comerciales básicas.</p>
					<ul>
						<li><a href="comprar_articulo.php">Comprar articulos</a></li>
						<li><a href="venta_articulo.php">Vender articulos</a></li>
					</ul>
					<br>
					<li><h4><a href="seccion_catalogo.php">Catálogo</a></h4></li>
					<p>En esta sección se puede revisar el listado completo o individual de los artículos existentes.</p>
					<ul>
						<li><a href="catalogo_articulos.php">Catalogo de articulos</a></li>
						<li><a href="buscar_articulo.php">Buscar un articulo</a></li>
					</ul>
					<br>
					<li><h4><a href="seccion_historial.php">Historiales</a></h4></li>
					<p>En caso de que se necesite dar un vistazo a las transacciones que se han realizado, puede entrar al módulo correspondiente en esta sección.</p>
					<ul>
						<li><a href="historial_ingresos.php">Historial de Compras</a></li>
						<li><a href="historial_egresos.php">Historial de Ventas</a></li>
					</ul>
				</ol>
				<hr>
				<h3>Vista previa</h3>
				<img src="img/vistaprevia.png">
			</div>

			<div class="contenido" id="der">
				<h2>Desarrolladores</h2>
				<hr>
				<h4>Carlos Alfredo Meza</h4>
				<p>carlomeza11.cm@gmail.com</p>
				<h4>Carlos David Vásquez</h4>
				<p>carlosdavidvasquez7@gmail.com</p>
				<hr>
				<h3>Nota de los desarrolladores:</h3>
				<p>Para que puedas aprovechar todas las funcionalidades de este proyecto, descarga la base de datos mySQL precargada con multiples registros.</p>
				<p><a href="descarga/inventario_1.2.sql.zip" download="inventario_1.2.zip"><input class="btn" type="button" name="descargarbd" value="Descargar Base de Datos"></a></p>
				<hr>
				<h3>Contribuir</h3>
				<p>Si desea revisar el proceso de desarrollo desde el inicio hasta como lo observa ahora o si desea contribuir con ideas para mejorar los módulos o crear nuevos.</p>
				<p>Puede acceder al repositorio de Github para este proyecto.</p>
				<p><a href="https://github.com/Kunai11/Inventario"><input class="btn" type="button" name="github" value="Ir al repositorio"></a></p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>