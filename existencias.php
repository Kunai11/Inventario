<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Buscar codigo</title>
    </head>

    <body>
        <div id="principal">
            <a href="index.php">Regresar</a>
            <table border="1">
                <th colspan="2" align="center"><h1>Articulo</h1></th>
                <form method="GET" action="agregar_existencias.php">
                <tr>
                    <td>Buscar</td>
                    <td><input type="text" name="palabra" id="palabra" required autofocus>
                    <input type="submit" name="buscar" id="buscar" value="Buscar"></td>
                </tr>
                </form>
            </table>
        </div>
    </body>
</html>