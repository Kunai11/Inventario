<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Eliminar Artículo | Control Comercial</title>
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
				<h2>Confirmar la eliminación del artículo</h2>
				<hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Costo</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $parametro=$_POST['parametro'];
                            include("cn/bdconexion.php");
                            $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo='".$_POST['Codigo']."'") or die(mysqli_error());
                            while($row=mysqli_fetch_array($sql)) {
                                echo '
                                    <tr>
                                        <td>'.$row['Codigo'].'</td>
                                        <td>'.$row['Descripcion'].'</td>
                                        <td>'.$row['Costo'].'</td>
                                        <td>'.$row['Precio'].'</td>
                                        <td>'.$row['Categoria'].'</td>
                                    </tr>
                                ';
                                $codigo=$row['Codigo'];
                            }  
                        ?>
                    </tbody>
                </table>
                <hr>
                <h4 class="eliminar">¿Est&aacute; seguro de eliminar el art&iacute;culo mostrado?</h4>
                <form method="POST" action="guardarEliminarArticulo.php">
                    <input type="hidden" name="Codigo" Id="Codigo" value="<?php echo $codigo; ?>">
                    <input type="hidden" name="parametro" Id="parametro" value="<?php echo $parametro; ?>">
                    <input class="btn-eliminar" type="submit" name="eliminar" id="eliminar" value="Eliminar" color=red>
                </form>
                <hr>
                <p><a href="resultadosEliminarArticulo.php?parametro=<?php echo $parametro ?>"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a></p>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
                <p class="eliminar"><strong>¡Cuidado!</strong></p>
                <p>Se pide una confirmación para eliminar el artículo que se muestra.</p>
                <p>Si está seguro que desea eliminar el artículo, haga click en el botón rojo.</p>
                <p>Si no está seguro o no desea eliminar el artículo, vuelva a la página anterior para seleccionar otro artículo.</p>
                <p class="eliminar">Esta acción no se puede deshacer.</p>                
			</div>
		</div>
		<div id="footer">
				<h6>&copy; Copyright 2017 | Carlos Meza | Carlos Vásquez  </h6>
			</div>
	</body>
</html>