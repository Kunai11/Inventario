<?php
    include("cn/bdconexion.php");
    $codigo=$_GET['codigo'];
    $fecha=$_GET['fecha'];
    $existencia=$_GET['cantidad'];
   

    //echo $codigo.'-'.$fecha.'-'.$existencia.
  
  $sql=mysqli_query($db,"INSERT INTO egresos(Codigo_Art,Fecha_sal,Cantidad) values ('$codigo','$fecha','$existencia')")or die(mysqli_error());
  $sql=mysqli_query($db,"UPDATE existencias SET Existencias=Existencias-'$existencia' WHERE Codigo_Art=('$codigo')")or die(mysqli_error());

    echo '
        <p>Art&iacute;culo agregado exitosamente.</p>
        <p><a href="index.php">Regresar</a></p>
    ';
?>