<?php
    $n = $_GET['n'];
    $meses=[
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    ];
    $seleccion = $meses[$n];
?>
<select>
    <?php
        foreach($meses as $n => $valor){
            $selec = '';
            if ($valor==$seleccion){
                $selec = 'selected';
            }
            echo '<option value="'.$n.'" '.$selec.'>'.$valor.'</option>';
        }
    ?>
</select>
