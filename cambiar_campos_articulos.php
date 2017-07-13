<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Modificar Artículo | Control Comercial</title>
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
                <?php
                    include("cn/bdconexion.php");
                    $palabra=$_GET['palabra'];
                    $Codigo=$_GET['Codigo'];
                    $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo='$Codigo'") or die(mysqli_error());
                    $row=mysqli_fetch_array($sql);
                ?>
				<h2>Cambiar valores del artículo</h2>
				<hr>

				<form method="GET" action="guardar_cambios_articulos.php">
					<p>
						Codigo:<br>
                        <input type="hidden" name="codigo" id="codigo" value="<?php echo $row['Codigo'];?>">
                        <input type="hidden" name="palabra" id="palabra" value="<?php echo $palabra;?>">
                        <input type="text" name="codigo" id="codigo" required autofocus tabindex="1" value="<?php echo $row['Codigo'];?>" disabled>
					</p>
					<p>
						Descripci&oacute;n:<br>
						<input type="text" name="descripcion" id="descripcion" required tabindex="2" value="<?php echo $row['Descripcion'];?>">
					</p>							
					<p>
						Costo:<br>
						<input type="number" name="costo" id="costo" required tabindex="3" value="<?php echo $row['Costo'];?>" ></input>
					</p>
					<p>
						Precio:<br>
						<input type="number" name="precio" id="precio" required tabindex="4" value="<?php echo $row['Precio'];?>">
					</p>
					<p>
						Categoria:<br>
						<input type="text" name="categoria" id="categoria" required tabindex="5" value="<?php echo $row['Categoria'];?>">
					</p>
					<hr>
					<p>
                        <a href="resultados.php?palabra=<?php echo $palabra; ?>"><input class="btn" type="button" name="regresar" id="regresar" value="Regresar" tabindex="6"></a>
						<input class="btn" type="submit" name="modificar" id="modificar" value="Modificar" tabindex="7">
					</p>
				</form>

			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
				<p>Por favor, realice los cambios en los campos con la información correspondiente y haga click en el botón modificar cuando haya finalizado.</p>
				<p>Para borrar todos los campos, haga click en el botón Limpiar.</p>
                <p>Si no desea realizar cambios, haga click en el botón Regresar para modificar otro artículo.</p>
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>