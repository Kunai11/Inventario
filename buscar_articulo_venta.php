<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultados de la b&uacute;squeda</title>
    </head>
    <body>
        <div id="principal">
        <a href="venta_articulo.php">Regresar</a>
            <table border="1">
                <tr>
                    <td colspan="6" align="center"><h1>Resultados para: <?php echo $palabra=$_GET['palabra']; ?></h1></td>
                </tr>
               
                <?php
                    include("cn/bdconexion.php");
                    $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo LIKE '%$palabra%'") or die(mysqli_error());
                    while($row=mysqli_fetch_array($sql)) {
                        echo '
                            <tr>
                                <td>'.$row['Codigo'].'</td>
                                <td>'.$row['Descripcion'].'</td>
                                <td>'.$row['Costo'].'</td>
                                <td>'.$row['Precio'].'</td>
                                <td>'.$row['Categoria'].'</td>
                                <td>
                                    <form method="GET" action="vender_articulo.php">
                                        <input type="hidden" name="Codigo" Id="Codigo" value="'.$row['Codigo'].'">
                                        <input type="hidden" name="palabra" Id="palabra" value="'.$palabra.'">
                                        <input type="submit" name="vender" id="vender" value="Vender">
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