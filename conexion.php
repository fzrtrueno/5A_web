<?php
$con=new mysqli("localhost","root","","ventas");
if ($con->connect_errno) {
    echo "Error de Conexión con BD " . $con->connect_errno . "--" . $con->connect_error; 
}



?>