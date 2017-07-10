<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>Historial de Egresos</title>
    </head>
    <body>
        <div id="principal">
        <a href="index.php">Regresar</a>
        <table border="1">
            <tr>
                <td colspan="5" align="center"><h1>Historial de Egresos</h1></td>
            </tr>
            <tr>
                <th>Codigo</th>
                <th>Codigo del Articulo</th>
                <th>Fecha de Transaccion</th>
            </tr>
            <?php
                include("cn/bdconexion.php");
                $sql=mysqli_query($db,"SELECT * FROM egresos") or die(mysqli_error());
                while($row=mysqli_fetch_array($sql)) {
                    echo '
                        <tr>
                            <td>'.$row['Codigo'].'</td>
                            <td>'.$row['Cod_Articulo'].'</td>
                            <td>'.$row['Fecha_sal'].'</td>
                        </tr>
                    ';
                }
            ?>
        </table>
    </div>
</body>
</html>