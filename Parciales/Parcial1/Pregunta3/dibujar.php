<?php
    include("examen.php");
    $c1 = $_GET['cadena1'];
    $c2 = $_GET['cadena2'];
    $e = new Examen($c1,$c2);
    $e->Cruzar();
?>