<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Confirmaci&oacute;n</title>
    </head>
    <body>
        <div id="principal">
        <a href="resultadosEliminarArticulo.php?parametro=<?php echo $parametro=$_POST['parametro']; ?>">Regresar</a>
            <table border="1">
                <tr>
                    <td colspan="5" align="center"><h1>Detalles del Art&iacute;culo</h1></td>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Costo</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                </tr>
                <?php
                    include("cn/bdconexion.php");
                    $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo LIKE '%$parametro%'") or die(mysqli_error());
                    while($row=mysqli_fetch_array($sql)) {
                        echo '
                            <tr>
                                <td>'.$row['Codigo'].'</td>
                                <td>'.$row['Descripcion'].'</td>
                                <td>'.$row['Costo'].'</td>
                                <td>'.$row['Precio'].'</td>
                                <td>'.$row['Categoria'].'</td>
                            </tr>
                            </table>
                            <h3 text-color="red">¿Est&aacute; seguro de eliminar el art&iacute;culo mostrado?</h3>
                            <form method="POST" action="guardarEliminarArticulo.php">
                                <input type="hidden" name="Codigo" Id="Codigo" value="'.$row['Codigo'].'">
                                <input type="hidden" name="parametro" Id="parametro" value="'.$parametro.'">
                                <input type="submit" name="eliminar" id="eliminar" value="Eliminar" text-color="red">
                            </form>
                        ';
                    }
                ?>
        </div>
    </body>
</html>