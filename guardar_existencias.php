<?php
    include("cn/bdconexion.php");
    $codigo=$_POST['codigo_art'];
    $existencias=$_POST['existencias'];

    //echo $identidad.'-'.$nombre.'-'.$direccion.'-'.$telefono;
    $sql=mysqli_query($db,"INSERT INTO existencias(Cod_Articulo,Existencias) values ('$codigo','$existencias')")or die(mysqli_error());

    echo '
        <p>Art&iacute;culo agregado exitosamente.</p>
        <p><a href="index.php">Regresar</a></p>
    ';
?>