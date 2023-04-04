<?php
    include("eliminarMenores.php");
    $valores = $_GET["valor"];
    $mayor = $_GET["mayor"];
    eliminarM($valores, $mayor);
?>