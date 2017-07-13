<?php
    include("cn/bdconexion.php");
    $codigo=$_POST['codigo_art'];
    $descripcion=$_POST['descripcion'];
    $costo=$_POST['costo'];
    $precio=$_POST['precio'];
    $categoria=$_POST['categoria'];

    //echo $identidad.'-'.$nombre.'-'.$direccion.'-'.$telefono;

    $sql=mysqli_query($db,"SELECT Codigo FROM catalogo WHERE Codigo = '$codigo' ")or die(mysqli_error());

    if (mysqli_fetch_array($sql)) {
        echo '
        <p>Error el art&iacute;culo no se puede agregar.</p>
        <p>Ya existe el Codigo ingresado.</p>
        <p><a href="agregar_articulo.php">Regresar</a></p>
        ';
    }else{
        $sql=mysqli_query($db,"INSERT INTO catalogo(Codigo,Descripcion,Costo,Precio,Categoria) values ('$codigo','$descripcion','$costo','$precio','$categoria')")or die(mysqli_error());
        $sql=mysqli_query($db,"INSERT INTO existencias(Codigo_Art) values ('$codigo')")or die(mysqli_error());

        echo '
        <p>Art&iacute;culo agregado exitosamente.</p>
        <p><a href="index.php">Regresar</a></p>
    ';
    }
?>