<?php

    $a = 3;
    $b = 4;
    $c = 1;

    if ($a<$b){
        if ($a<$c){
            echo "a es menor: $a";
        }else{
            echo "c es menor: $c";
        }
    }else{
        if ($b<$c){
            echo "b es menor: $b";
        }else{
            echo "c es menor: $c";
        }
    }

?>