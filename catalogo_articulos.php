<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>Catalogo</title>
    </head>
    <body>
        <div id="principal">
        <a href="index.php">Regresar</a>
        <table border="1">
            <tr>
                <td colspan="6" align="center"><h1>Catalogo</h1></td>
            </tr>
            <tr>
                <th>Codigo</th>
                <th>Descripci&oacute;n</th>
                <th>Costo</th>
                <th>Precio</th>
                <th>Cat&aacute;logo</th>
                <th>Existencias</th>
            </tr>
            <?php
                include("cn/bdconexion.php");
                $sql=mysqli_query($db,"SELECT C.*, E.Existencias FROM catalogo C INNER JOIN existencias E ON C.Codigo = E.Codigo_Art ") or die(mysqli_error());
                while($row=mysqli_fetch_array($sql)) {
                    echo '
                    <tr>
                        <td>'.$row['Codigo'].'</td>
                        <td>'.$row['Descripcion'].'</td>
                        <td>'.$row['Costo'].'</td>
                        <td>'.$row['Precio'].'</td>
                        <td>'.$row['Categoria'].'</td>
                        <td>'.$row['Existencias'].'</td>
                    </tr>
                    ';
                }
            ?>
        </table>
    </div>
</body>
</html>