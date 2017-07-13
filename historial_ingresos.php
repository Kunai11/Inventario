<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>Historial de Ingresos</title>
    </head>
    <body>
        <div id="principal">
        <a href="index.php">Regresar</a>
            <table border="1">
                <tr>
                    <td colspan="4" align="center"><h1>Historial de Ingresos</h1></td>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Codigo del Articulo</th>
                    <th>Fecha de Transaccion</th>
                    <th>Cantidad Ingresada</th>
                </tr>
                <?php
                    include("cn/bdconexion.php");
                    $sql=mysqli_query($db,"SELECT * FROM ingresos") or die(mysqli_error());
                    while($row=mysqli_fetch_array($sql)) {
                        echo '
                            <tr>
                                <td>'.$row['Codigo'].'</td>
                                <td>'.$row['Cod_Articulo'].'</td>
                                <td>'.$row['Fecha_en'].'</td>
                                <td>'.$row['Cantidad'].'</td>
                            </tr>
                        ';
                    }
                ?>
            </table>
        </div>
    </body>
</html>