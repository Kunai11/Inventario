<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultados de la b&uacute;squeda</title>
    </head>
    <body>
        <div id="principal">
        <a href="modificar_articulo.php">Regresar</a>
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
                    <th>Modificar</th>
                </tr>
                <?php
                include("cn/conexion.php");
                    $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo LIKE '%$palabra%'") or die(mysqli_error());
                    while($row=mysqli_fetch_array($sql)) {
                        echo '
                        <tr>
                            <td>'.$row['Codigo'].'</td>
                            <td>'.$row['Descripcion'].'</td>
                            <td>'.$row['Costo'].'</td>
                            <td>'.$row['Precio'].'</td>
                            <td>'.$row['Categoria'].'</td>
                            </td>
                            <td>
                            <form method="GET" action="cambiar_campos_articulos.php">
                                <input type="hidden" name="Id" Id="Id" value="'.$row['Codigo'].'">
                                <input type="hidden" name="palabra" Id="palabra" value="'.$palabra.'">
                                <input type="submit" name="modificar" id="modificar" value="Modificar"></td>
                            </form>
                            </td>
                        </tr>
                        ';
                    }
                ?>
            </table>
        </div>
    </body>
</html>