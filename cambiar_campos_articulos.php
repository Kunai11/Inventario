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
        <form method="GET" action="guardar_cambios_articulos.php">
            <table border="1">
            <tr>
                <td colspan="2" align="center"><h1>Modificar datos del articulo</h1></td>
            </tr>
            <tr>
                <td>Codigo:</td>
                <td>
                    <input type="hidden" name="codigo" id="codigo" value="<?php echo $row['Codigo'];?>">
                    <input type="hidden" name="palabra" id="palabra" value="<?php echo $palabra;?>">
                    <input type="text" name="codigo" id="codigo" required autofocus tabindex="1" value="<?php echo $row['Codigo'];?>">
                </td>
            </tr>
            <tr>
                <td>Descripcion:</td>
                <td>
                    <input type="text" name="descripcion" id="descripcion" required tabindex="2" value="<?php echo $row['Descripcion'];?>">
                </td>
            </tr>
            <tr>
                <td>Costo:</td>
                <td>
                    <input type="number" name="costo" id="costo" required tabindex="3" value="<?php echo $row['Costo'];?>" ></input>
                </td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>
                    <input type="number" name="precio" id="precio" required tabindex="4" value="<?php echo $row['Precio'];?>">
                </td>
            </tr>
            <tr>
                <td>Categoria:</td>
                <td>
                    <input type="text" name="categoria" id="categoria" required tabindex="4" value="<?php echo $row['Categoria'];?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="modificar" id="modificar" value="Modificar" tabindex="5"></td>
            </table>
        </form>
    </body>
</html>