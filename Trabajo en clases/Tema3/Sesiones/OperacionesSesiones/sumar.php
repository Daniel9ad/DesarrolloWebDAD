<?php
session_start();
include("Operaciones.php");
if (isset($_SESSION['a']) and isset($_SESSION['b'])) {
    $op = new Operaciones($_SESSION['a'],$_SESSION['b']);
    echo "La suma es: ".$op->suma();
}else{
    echo "No existen valores";
}
?>
<meta http-equiv="refresh" content="5; url=Menu.html">