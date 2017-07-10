<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modificaciones</title>
    </head>
    <body>
        <?php
            include("cn/bdconexion.php");
            $palabra=$_GET['palabra'];
            $Codigo=$_GET['Codigo'];
            $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo='$Codigo'") or die(mysqli_error());
            $row=mysqli_fetch_array($sql);
        ?>
        <a href="resultados.php?palabra=<?php echo $palabra; ?>">Regresar</a>
        <form method="GET" action="guardar_venta_articulos.php">
             <table border="1">
                <tr>
                    <td colspan="5" align="center"><h1>Factura</h1></td>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Ingresar cantidad de unidades</th>

                </tr>
                <?php
                    include("cn/bdconexion.php");
                    $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo LIKE '%$palabra%'") or die(mysqli_error());
                    while($row=mysqli_fetch_array($sql)) {
                        echo '
                            <tr>
                                <td>'.$row['Codigo'].'</td>
                                <td>'.$row['Descripcion'].'</td>
                                <td>'.$row['Precio'].'</td>
                                <td>'.$row['Categoria'].'</td>
                                <td><input type="number" name="cantidad" id="cantidad"></td>
                            </tr>
                            <td colspan="5" align="center"><input type="submit" name="facturar" id="facturar"  value="Facturar"></td>
                        ';
                    }
                ?>

            </table>
        </form>
    </body>
</html>