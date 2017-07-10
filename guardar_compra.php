<?php
    include("cn/bdconexion.php");
    $codigo=$_POST['codigo_art'];
    $existencias=$_POST['cantidad'];
    $fecha=$_POST['fecha'];

    //echo $identidad.'-'.$nombre.'-'.$direccion.'-'.$telefono;
    $sql=mysqli_query($db,"UPDATE existencias SET Existencias=Existencias+'$existencias' WHERE Codigo_Art=('$codigo')")or die(mysqli_error());
  $sql=mysqli_query($db,"INSERT INTO ingresos(Cod_Articulo,Fecha_en) values ('$codigo','$fecha')")or die(mysqli_error());

    echo '
        <p>Art&iacute;culo agregado exitosamente.</p>
        <p><a href="index.php">Regresar</a></p>
    ';
?>