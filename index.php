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
				<a href="index.php">Inicio</a>
				<a href="seccion_articulos.php">Art&iacute;culos</a>
				<a href="seccion_transacciones.php">Transacciones</a>
				<a href="seccion_catalogo.php">Cat&aacute;logo</a>
				<a href="seccion_historial.php">Historiales</a>
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
					<li><h4>Artículos</h4></li>
					<p>Contiene las opciones que pueden realizarse con los artículos en la base de datos.</p>
					<ul>
						<li><a href="agregar_articulo.php">Agregar nuevo articulo</a></li>
						<li><a href="modificar_articulo.php">Modificar articulo</a></li>
						<li><a href="eliminar_articulo.php">Eliminar articulo</a></li>
					</ul>
					<br>
					<li><h4>Transacciones</h4></li>
					<p>Aquí se puede encontrar las transacciones comerciales básicas.</p>
					<ul>
						<li><a href="comprar_articulo.php">Comprar articulos</a></li>
						<li><a href="venta_articulo.php">Vender articulos</a></li>
					</ul>
					<br>
					<li><h4>Catálogo</h4></li>
					<p>En esta sección se puede revisar el listado completo o individual de los artículos existentes.</p>
					<ul>
						<li><a href="catalogo_articulos.php">Catalogo de articulos</a></li>
						<li><a href="buscar_articulo.php">Buscar un articulo</a></li>
					</ul>
					<br>
					<li><h4>Historiales</h4></li>
					<p>En caso de que se necesite dar un vistazo a las transacciones que se han realizado, puede entrar al módulo correspondiente en esta sección.</p>
					<ul>
						<li><a href="historial_ingresos.php">Historial de Compras</a></li>
						<li><a href="historial_egresos.php">Historial de Ventas</a></li>
					</ul>
				</ol>
				<hr>
				<h3>Vista previa</h3>
				<img src="img/preview.png">
			</div>

			<div class="contenido" id="der">
				<h2>Colaboradores</h2>
				<hr>
				<h4>Carlos Alfredo Meza</h4>
				<p>carlomeza11.cm@gmail.com</p>
				<h4>Carlos David Vásquez</h4>
				<p>carlosdavidvasquez7@gmail.com</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>