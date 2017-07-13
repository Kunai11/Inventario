<?php
    include("cn/bdconexion.php");
    $codigo=$_POST['Codigo'];
    $parametro=$_POST['parametro'];

    // echo $codigo.' - '.$parametro;
    $sql=mysqli_query($db,"DELETE FROM catalogo WHERE Codigo='$codigo'")or die(mysqli_error());

      $sql=mysqli_query($db,"DELETE FROM existencias WHERE Codigo_Art='$codigo'")or die(mysqli_error());


    echo '
        <p>Art&iacute;culo eliminado exitosamente.</p>
        <p><a href="resultadosEliminarArticulo.php?parametro='.$parametro.'">Regresar</a></p>
    ';
?>