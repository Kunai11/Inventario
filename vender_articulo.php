<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8">
		<title>Vender Artículo | Control Comercial</title>
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
				<h2>Facturación de la venta del artículo</h2>
				<hr>
                <form method="POST" action="guardar_venta_articulo.php">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Categoria</th>
                                <th>Cantidad de compra</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $parametro=$_GET['palabra'];
                                include("cn/bdconexion.php");
                                $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo='".$_GET['Codigo']."'") or die(mysqli_error());
                                while($row=mysqli_fetch_array($sql)) {
                                    echo '
                                        <tr>
                                            <td>'.$row['Codigo'].'</td>
                                            <td>'.$row['Descripcion'].'</td>
                                            <td>'.$row['Precio'].'</td>
                                            <td>'.$row['Categoria'].'</td>
                                            <td><input type="number" min="1" name="cantidad" id="cantidad" required></td>
                                            <td><input type="date" name="fecha" id="fecha" required></td>
                                        </tr>
                                    ';
                                    $codigo=$row['Codigo'];
                                }  
                            ?>
                        </tbody>
                    </table>
                <hr>
                    <input type="hidden" name="Codigo" Id="Codigo" value="<?php echo $codigo; ?>">
                    <input type="hidden" name="parametro" Id="parametro" value="<?php echo $parametro; ?>">
                    <p>
                        <a href="buscar_articulo_venta.php?palabra=<?php echo $parametro ?>"><input class="btn" type="button" name="Regresar" id="Regresar" value="Regresar"></a>
                        <input class="btn" type="submit" name="facturar" id="facturar" value="Facturar">
                    </p>
                </form>
			</div>

			<div class="contenido" id="der">
				<h2>Información</h2>
				<hr>
                <p>Aquí se muestran los detalles del artículo de ha seleccionado para vender.</p>
                <p>Por favor, ingrese la cantidad de unidades que venderá de este artículo, luego seleccione la fecha de la transacción.</p>
                <p>Por último, proceda a facturar</p>
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
        <title>Modificaciones</title>
    </head>
    <body>
        <?php
            // include("cn/bdconexion.php");
            // $palabra=$_GET['palabra'];
            // $Codigo=$_GET['Codigo'];
            // $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo='$Codigo'") or die(mysqli_error());
            // $row=mysqli_fetch_array($sql);
        ?>
        <a href="resultados.php?palabra=<?php //echo $palabra; ?>">Regresar</a>
        <form method="GET" action="guardar_venta_articulo.php">
             <table border="1">
                <tr>
                    <td colspan="6" align="center"><h1>Factura</h1></td>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Ingresar cantidad de unidades</th>
                    <th>Fecha</th>

                </tr>
                <?php
                    // include("cn/bdconexion.php");
                    // $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo LIKE '%$palabra%'") or die(mysqli_error());
                    // while($row=mysqli_fetch_array($sql)) {
                    //     echo '
                    //         <tr>
                    //             <td>'.$row['Codigo'].'</td>
                    //             <td>'.$row['Descripcion'].'</td>
                    //             <td>'.$row['Precio'].'</td>
                    //             <td>'.$row['Categoria'].'</td>

                                 
                    //              <td></td>
                    //              <td></td>
                    //                         <input type="hidden" name="codigo" Id="codigo" value="'.$row['Codigo'].'">
                    //                          </tr>
                    //                         <td colspan="6" align="center"><input type="submit" name="facturar" id="facturar"  value="Facturar"></td>
                    //                         </form>

                    //     ';
                    // }
                ?>

            </table>
        </form>
    </body>
</html>
-->