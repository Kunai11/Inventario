<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modificar</title>
    </head>

    <body>
        <div id="principal">
            <a href="index.php">Regresar</a>
            <table border="1">
                <th colspan="2" align="center"><h1>Modificar</h1></th>
                <form method="GET" action="resultados.php">
                <tr>
                    <td>Buscar</td>
                    <td><input type="text" title="Parametros para la busqueda" name="palabra" id="palabra" required autofocus>
                    <input type="submit" name="buscar" id="buscar" value="Buscar"></td>
                </tr>
                </form>
            </table>
        </div>
    </body>
</html>