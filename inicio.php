<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INICIO DEL SISTEMA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <form action="insertar.php" method="post">
        <table>
        <TR><TD><label for="ID">No Usuario </label></TD>
            <TD><input type="text" id="ID" name="ID" /> <br></TD>
        </TR>
        <TR><TD><label for="nombre">Nombre Completo </label></TD>
            <TD><input type="text" id="nombre" name="nombre" /><br></TD>
        </TR>
        <TR><TD><label for="user_name">Usuario</label></TD>
            <TD><input type="text" id="user_name" name="user_name" /><br></TD>
        </TR>
        <TR><TD><label for="user_pass">Password</label></TD>
            <TD><input type="password" id="user_pass" name="user_pass" /><br></TD>
        </TR>
        <TR><td><br></td></TR>
        <TR>
            <TD colspan="2" align="center"><input type="submit" value="Guardar"></TD>
        </TR>
        </table>
       </form>
        
        
    </body>
</html>