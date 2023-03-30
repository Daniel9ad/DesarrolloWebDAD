<?php
    include("Operaciones.php");
    if (isset($_COOKIE['a']) and isset($_COOKIE['b'])) {
        $op = new Operaciones($_COOKIE['a'],$_COOKIE['b']);
        echo "La suma es: ".$op->divicion();
    }else{
        echo "No existen valores";
    }
?>
<meta http-equiv="refresh" content="5; url=Menu.html">