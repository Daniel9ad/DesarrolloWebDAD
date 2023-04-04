<?php
    function eliminarM($valores, $mayor){
        $l = count($valores);
        for($i=0; $i<$l; $i++){
            if ($valores[$i]>$mayor){
                unset($valores[$i]);
            }
        }
        foreach($valores as $valor){
            echo $valor." ";
        }
    }
?>