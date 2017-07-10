<?php
    include("cn/conexion.php");
    $palabra=$_GET['palabra'];
    $codigo=$_GET['codigo'];
    $descripcion=$_GET['descripcion'];
    $costo=$_GET['costo'];
    $precio=$_GET['precio'];
    $categoria=$_GET['categoria'];
    $sql=mysqli_query($db,"UPDATE catalogo SET Codigo='$codigo', Descripcion='$descripcion', Costo='$costo', Precio='$precio', Categoria='$categoria' WHERE Codigo='$codigo'") or die(mysqli_error());

    echo '
        <p>Art&iacute;culo modificado exitosamente.</p>
        <p><a href="resultados.php?palabra=$palabra">Regresar</a></p>
    ';
    // header("location:mod.php?Id=$id&palabra=$palabra");
?>