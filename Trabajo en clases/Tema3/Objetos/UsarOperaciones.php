<?php
$a = $_GET['a'];
$b = $_GET['b'];
$operacion = $_GET['operacion'];

include('Operaciones.php');

if ($operacion == "suma"){
    echo $a.'+'.$b.'='.Operaciones::Suma($a,$b);
}else{
    echo $a.'-'.$b.'='.Operaciones::Resta($a,$b);
}
?>