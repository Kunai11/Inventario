<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultados de la b&uacute;squeda</title>
    </head>
    <body>
        <div id="principal">
        <a href="buscar_articulo.php">Regresar</a>
            <table border="1">
                <tr>
                    <td colspan="6" align="center"><h1>Resultados para: <?php echo $palabra=$_GET['palabra']; ?></h1></td>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Costo</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Existencias</th>
                </tr>
                <?php
                    include("cn/bdconexion.php");
                    $sql=mysqli_query($db,"SELECT C.*, E.Existencias FROM catalogo C INNER JOIN existencias E ON C.Codigo = E.Codigo_Art WHERE Codigo LIKE '%$palabra%'") or die(mysqli_error());
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