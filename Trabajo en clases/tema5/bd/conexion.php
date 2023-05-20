<?php
$con =new mysqli("localhost", "root", "","bd2_agenda2023");
if ($con->connect_error)
    die ("conexion fallada".$con->connect_error);
?>