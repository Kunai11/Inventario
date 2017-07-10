<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modificaciones</title>
    </head>
    <body>
        <?php
            include("cn/conexion.php");
            $palabra=$_GET['palabra'];
            $Codigo=$_GET['Id'];
                $sql=mysqli_query($db,"SELECT * FROM catalogo WHERE Codigo='$Codigo'") or die(mysqli_error());
                $row=mysqli_fetch_array($sql);
        ?>
        <a href="resultados.php?palabra=<?php echo $palabra; ?>">Regresar</a>
        <form method="GET" action="editar.php">
            <table border="1">
            <tr>
                <td colspan="2" align="center">Modificar datos del articulo</td>
            </tr>
            <tr>
                <td>Codigo:</td>
                <td>
                    <input type="hidden" name="id" id="id" value="<?php echo $row['Codigo'];?>">
                    <input type="hidden" name="palabra" id="palabra" value="<?php echo $palabra;?>">
                    <input type="text" name="identidad" id="identidad" required autofocus tabindex="1" value="<?php echo $row['Codigo'];?>">
                </td>
            </tr>
            <tr>
                <td>Descripcion:</td>
                <td>
                    <input type="text" name="nombre" id="nombre" required tabindex="2" value="<?php echo $row['Descripcion'];?>">
                </td>
            </tr>
            <tr>
                <td>Costo:</td>
                <td>
                    <textarea name="direccion" id="direccion" required tabindex="3"><?php echo $row['Costo'];?></textarea>
                </td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>
                    <input type="text" name="telefono" id="telefono" required tabindex="4" value="<?php echo $row['Precio'];?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="modificar" id="modificar" value="Modificar" tabindex="5"></td>
            </table>
        </form>
    </body>
</html>