<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultados de la b&uacute;squeda</title>
    </head>
    <body>
    	<?php
            include("cn/bdconexion.php");
            $palabra=$_GET['palabra'];
                $sql=mysqli_query($db,"SELECT Codigo, Descripcion FROM catalogo WHERE Codigo='$palabra'") or die(mysqli_error());
                $row=mysqli_fetch_array($sql);
        ?>

     
        <div id="ex">
        <a href="modificar_articulo.php">Regresar</a>
            <table border="1">
            <tr>
                <td colspan="2" align="center">Modificar datos del articulo</td>
            </tr>
            <tr>
                <td>Codigo:</td>
                <td>
                    <input type="hidden" name="id" id="id" value="<?php echo $row['Codigo'];?>">
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
                <td>Cantidad:</td>
                <td>
                    <input type="number" name="cantidad" id="cantidad" required tabindex="3">
                </td>
            </tr>
        </div>
    </body>
</html>