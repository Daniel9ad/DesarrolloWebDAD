<?php
$con =new mysqli("localhost", "root", "","bd_departamentos");
if ($con->connect_error)
    die ("conexion fallada".$con->connect_error);
?>